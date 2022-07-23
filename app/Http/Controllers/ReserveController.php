<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use Util;
use GeneralConst;
use App\Models\Prefecture;
use App\Models\User;
use App\Models\Point;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Roomdetail;

class ReserveController extends Controller
{
    private $reservesItems = [
        'check_time',
        'transportation',
        'payment',
        'point_use',
        'postal_code_first',
        'postal_code_second',
        'address_prefectures',
        'address_cities',
        'address_town',
        'address_other',
        'tel_first',
        'tel_second',
        'tel_third',
        'emergency_contact_first',
        'emergency_contact_second',
        'emergency_contact_third',
        'next_email',
        'email_conf',
        'room_first_name',
        'room_last_name',
        'kiyaku',
    ];

    /**
     *   予約登録画面を表示
     *
     *@return object
     *
     **/
    public function show(Request $request)
    {
        $user = Auth::user();
        //仮のゲストデータ
        $room_gests = [
            ['reservation_details_room_number' => 1, 'adults_price' => 14080, 'adults_number' => 1, 'child_number' => 1, 'child_price' => 14080, 'sub_price' => 123936],
            ['reservation_details_room_number' => 2, 'adults_price' => 28160, 'adults_number' => 1, 'child_number' => 0, 'child_price' => 0, 'sub_price' => 121120],
            ['reservation_details_room_number' => 3, 'adults_price' => 28160, 'adults_number' => 1, 'child_number' => 0, 'child_price' => 0, 'sub_price' => 121120],
            ['reservation_details_room_number' => 4, 'adults_price' => 28160, 'adults_number' => 1, 'child_number' => 0, 'child_price' => 0, 'sub_price' => 121120],
        ];
        //仮のルームデータ
        $room_info = [
            'room_number' => 1,//ルーム詳細ID
            'reservation_date'=> '2021-03-01',//予約日
            'check_in'=> '2021-04-01',//チェックイン
            'check_out'=> '2021-04-03',//チェックアウト
        ];
        $stay_umber = Util::getStayNumber($room_info['check_in'], $room_info['check_out']);

        //ホテル情報をDBから取得
        $hotel_info = DB::table('hotels')
        ->join('rooms', 'hotels.HOTEL_NUMBER', '=', 'rooms.hotel_HOTEL_NUMBER')
        ->join('roomdetails', 'rooms.ROOM_NUMBER', '=', 'roomdetails.room_ROOM_NUMBER')
        ->where('roomdetails.room_ROOM_NUMBER', '=', $room_info['room_number'])
        ->get();

        //ユーザのポイント情報をDBから取得
        $user_point = DB::table('points')
        ->select('points.point_total')
        ->join('users', 'users.id', '=', 'points.user_id')
        ->where('points.user_id', '=', $user['id'])
        ->get();

        //ポイントテーブルが１つもなけれは０を代入
        if(count($user_point) == 0){
            $user_point = 0;
        }

        //注文内容
        $order_data = [
            'room_gests' => $room_gests,
            'room_info' => $room_info,
            'hotel_info' => $hotel_info,
            'auth_user' => $user,
            'stay_number'=> $stay_umber,
            'user_point' => $user_point
        ];
        $request->session()->put('order_data', $order_data);

        return view('reserves.edit')
            ->with([
                'room_info' => $room_info,
                'room_gests' => $room_gests,
                'hotel_total_price' => array_sum(array_column($room_gests, 'sub_price')),
                'auth_user' => $user,
                'stay_number'=> $stay_umber,
                'hotel_info' => $hotel_info,
                'user_point' => $user_point
            ]);
    }

    /**
     * 確認画面へ移動
     *
     * @param  object $request
     * @return object
     **/
    public function post(Request $request)
    {
        //入力のキーと値を取得
        $input = $request->only($this->reservesItems);

        //バリテーションの実行
        $validator = Validator::make(
            $input,
            [
                'check_time' => ['required'],
                'postal_code_first' => ['required', 'digits:3', 'numeric'],
                'postal_code_second' => ['required', 'digits:4', 'numeric'],
                'address_prefectures' => ['required'],
                'address_cities' => ['required'],
                'address_town' => ['required'],
                'tel_first' => ['required', 'numeric', 'regex:/^0\d/'],
                'tel_second' => ['required', 'numeric', 'regex:/\d{1,4}/'],
                'tel_third' => ['required', 'numeric', 'regex:/\d{1,4}/'],
                'emergency_contact_first' => ['nullable', 'numeric', 'regex:/^0\d/'],
                'emergency_contact_second' => ['nullable', 'numeric', 'regex:/\d{0,4}/'],
                'emergency_contact_third' => ['nullable', 'numeric', 'regex:/\d{0,4}/'],
                'next_email' => ['max:255', 'email'],
                'email_conf' => 'same:next_email',
                'room_first_name.*' => ['required', 'regex:/^[ぁ-んァ-ヶ一-龥々]+$/u'],
                'room_last_name.*' => ['required', 'regex:/^[ぁ-んァ-ヶ一-龥々]+$/u'],
                'kiyaku' => ['required', 'accepted'],
            ],
        );

        // バリデーションの正否
        $validator->validate();
        $request->session()->put('reserve_input', $input);
        return redirect()->action([ReserveController::class, 'confirm']);
    }

    /**
     * 確認処理
     *
     * @param  object $request
     * @return object
     **/

    public function confirm(Request $request)
    {
        $input = $request->session()->get('reserve_input');
        $order_data = $request->session()->get('order_data');

        // セッションに値が無い時はフォームに戻る
        if (!$input || !$order_data) {
            return redirect()->action([ReserveController::class, 'show']);
        }

        return view('reserves.confirm')
            ->with([
                'input' => $input,
                'order_data'=> $order_data,
            ]);
    }
    /**
     * 送信処理~
     *
     * @param  object $request
     * @return object
     **/

    public function send(Request $request)
    {
        // セッションから値を取り出す
        $input = $request->session()->get('reserve_input');
        // セッションに値が無い時はフォームに戻る
        if (!$input) {
            return redirect()->action([ReserveController::class, 'show']);
        }
        // メール送信

        // forgetでセッション変数を空にする
        $request->session()->forget('reserve_input');

        return redirect()->action([ReserveController::class, 'done']);
    }

    /**
     * 完了画面に移動
     *
     * @return object
     **/

    public function done()
    {
        return view('reserves.done');
    }
}
