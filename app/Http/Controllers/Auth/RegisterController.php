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
use App\Mail\EmailVerification;
use Mail;
use Illuminate\Http\Request;

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
}
