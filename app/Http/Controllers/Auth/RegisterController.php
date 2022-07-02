<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Prefecture;
use Illuminate\Validation\Rule;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use App\Mail\EmailVerification;
use Mail;
use Illuminate\Http\Request;
use App\Rules\AlphaNumCheck;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    private const DISPLAY_ID = 'test';

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * 仮登録時のバリデーションチェック
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function preValidator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:256', Rule::unique('users', 'email')->where('email_verified', true), 'confirmed'],
            'id_privacy' => ['required'],
        ]);
    }

    /**
     * 本登録時のバリデーションチェック
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_id' => ['required', Rule::unique('users', 'user_id')->where('email_verified', true), new AlphaNumCheck(), 'min:6', 'max:32'],
            'password' => ['required', 'confirmed', new AlphaNumCheck(), 'min:6'],
            'last_name' => ['required', 'string', 'max:64'],
            'first_name' => ['required', 'string', 'max:64'],
            'last_name_kana' => ['required', 'string', 'regex:/^[ァ-ヶー]+$/u', 'max:64'],
            'first_name_kana' => ['required', 'string', 'regex:/^[ァ-ヶー]+$/u', 'max:64'],
            'gender' => ['required', 'integer', 'size:1'],
            'birthyear' => ['required', 'integer'],
            'birthmonth' => ['required', 'regex:/^[0-9]+$/u', 'size:2'],
            'birthday' => ['required', 'regex:/^[0-9]+$/u', 'size:2'],
            'postal_code1' => ['required', 'regex:/^[0-9]+$/u', 'size:3'],
            'postal_code2' => ['required', 'regex:/^[0-9]+$/u', 'size:4'],
            'prefecture_cd' => ['required', 'regex:/^[0-9]+$/u', 'max:2'],
            'city_name' => ['required', 'string', 'max:64'],
            'town_name' => ['required', 'string', 'max:64'],
            'other_address' => ['required', 'string', 'max:256'],
            'tel1' => ['required', 'regex:/^[0-9]+$/u', 'max:5'],
            'tel2' => ['required', 'regex:/^[0-9]+$/u', 'max:4'],
            'tel3' => ['required', 'regex:/^[0-9]+$/u', 'max:4'],
            'emergency_contact1' => ['nullable', 'regex:/^[0-9]+$/u', 'max:5'],
            'emergency_contact2' => ['nullable', 'regex:/^[0-9]+$/u', 'max:4'],
            'emergency_contact3' => ['nullable', 'regex:/^[0-9]+$/u', 'max:4'],
        ]);
    }

    /**
     * 認証前仮登録処理
     *
     * @param  Request $request
     * @return void
     */
    public function preRegister(Request $request)
    {
        $data = $request->all();
        $this->preValidator($data)->validate();

        // 会員テーブルに仮登録
        event(new Registered($user = $this->create($request->all())));

        // 一時的な署名付きルートURLの生成
        // 期限を設定
        $expiration = strtotime(now()->addMinutes(20));
        // トークンの生成
        $signature = hash_hmac('sha256', $user->id . $expiration, env('APP_KEY'));

        // 会員情報のトークン更新
        $user->email_verify_token = $signature;
        $user->save();

        // URL生成
        $user = (object)[
            'email' => $data['email'],
            'url' => route(
                'register.form',
                [
                    'id' => $user->id,
                    'expires' => $expiration,
                    'signature' => $signature
                ]
            ),
        ];

        // 認証用メール送信
        $email = new EmailVerification($user);
        Mail::to($user->email)->send($email);

        return redirect('/register/mail_send');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm(Request $request)
    {
        // 仮登録情報
        $user = User::where('id', $request->id)
            ->where('email_verify_token', $request->signature)
            ->first();
        // TODO 仮登録情報が取得できない場合　とりあえず404
        if (!$user) {
            return abort(404);
        }
        // TODO 認証済みの場合　とりあえず404
        if ($user->email_verified) {
            return abort(404);
        }

        // 都道府県マスタ取得
        $prefecture = Prefecture::select()->get();
        // 認証期限取得
        $expiration = $request->get('expires');

        return view(
            'auth.register',
            compact('user', 'expiration', 'prefecture')
        );
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function userIdCheck(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'user_id' => [
                'required',
                Rule::unique('users', 'user_id')->where('email_verified', true),
                new AlphaNumCheck(),
                'min:6',
                'max:32'
            ],
        ]);

        // ID重複チェック
        if (!$validate->passes()) {
            $message = '会員IDの入力に誤りがあります。';
        } else {
            $message = '入力のIDはご利用可能です。';
        }

        return response()->json($message, 200);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function registerConfirm(Request $request)
    {
        // 入力情報をフラッシュセッションに保存
        $this->flashSession($request->all());
        // バリデーションチェック
        $this->validator($request->all())->validate();
        // 都道府県マスタ取得
        $prefecture = Prefecture::select()
            ->where('prefecture_cd', session('prefecture_cd'))->first();

        return view('auth.registerConfirm', compact('prefecture'));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        // 入力情報をセッションから取得
        $data = $request->session()->all();

        $user = User::where('id', $data['id'])
            ->where('email_verify_token', $data['signature'])
            ->first();

        // TODO 仮登録情報が取得できない場合　とりあえず404
        if (!$user) {
            return abort(404);
        }
        // TODO 認証済みの場合　とりあえず404
        if ($user->email_verified) {
            return abort(404);
        }

        // TODO ID重複の場合　とりあえず404
        if (User::where('user_id', $data['user_id'])->exists()) {
            return abort(404);
        }

        $this->update($data, $user);

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }

    /**
     * 仮登録
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'user_id' => '',
            'password' => '',
            'last_name' => '',
            'first_name' => '',
            'last_name_kana' => '',
            'first_name_kana' => '',
            'gender' => 0,
            'birthday' => '',
            'postal_code' => '',
            'prefecture_cd' => '',
            'city_name' => '',
            'town_name' => '',
            'other_address' => '',
            'tel' => '',
            'emergency_contact' => '',
            'email' => $data['email'],
            'email_verify_token' => '',
            'email_verified' => false,
            'ins_date' => now(),
            'ins_prg' => self::DISPLAY_ID,
            'upd_date' => now(),
            'upd_prg' => self::DISPLAY_ID,
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  User $user
     * @return \App\Models\User
     */
    protected function update(array $data, User $user)
    {
        $user->update([
            'user_id' => $data['user_id'],
            'password' => Hash::make($data['password']),
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
            'last_name_kana' => $data['last_name_kana'],
            'first_name_kana' => $data['first_name_kana'],
            'gender' => $data['gender'],
            'birthday' => $data['birthyear'] . $data['birthmonth'] . $data['birthday'],
            'postal_code' => $data['postal_code1'] . '-' . $data['postal_code2'],
            'prefecture_cd' => $data['prefecture_cd'],
            'city_name' => $data['city_name'],
            'town_name' => $data['town_name'],
            'other_address' => $data['other_address'],
            'tel' => $data['tel1'] . '-' . $data['tel2'] . '-' .  $data['tel3'],
            'emergency_contact' => $data['emergency_contact1'] . '-' . $data['emergency_contact2'] . '-' .  $data['emergency_contact3'],
            'email_verified' => true,
            'upd_date' => now(),
            'upd_prg' => self::DISPLAY_ID,
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function flashSession(array $data)
    {
        foreach ($data as $key => $val) {
            if ($key === '_token') {
                continue;
            }
            session()->flash($key, $val);
        };
    }
}
