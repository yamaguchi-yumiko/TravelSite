<?php

namespace App\Http\Controllers;

use App\Rules\Uppercase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;

class ReserveController extends Controller
{

    private $addresses = [
        '' => '都道府県を選択してください',
        1 => '北海道',
        2 => '青森県',
        3 => '岩手県',
        4 => '宮城県',
        5 => '秋田県',
        6 => '山形県',
        7 => '福島県',
        8 => '茨城県',
        9 => '栃木県',
        10 => '群馬県',
        11 => '埼玉県',
        12 => '千葉県',
        13 => '東京都',
        14 => '神奈川県',
        15 => '新潟県',
        16 => '富山県',
        17 => '石川県',
        18 => '福井県',
        19 => '山梨県',
        20 => '長野県',
        21 => '岐阜県',
        22 => '静岡県',
        23 => '愛知県',
        24 => '三重県',
        25 => '滋賀県',
        26 => '京都府',
        27 => '大阪府',
        28 => '兵庫県',
        29 => '奈良県',
        30 => '和歌山県',
        31 => '鳥取県',
        32 => '島根県',
        33 => '岡山県',
        34 => '広島県',
        35 => '山口県',
        36 => '徳島県',
        37 => '香川県',
        38 => '愛媛県',
        39 => '高知県',
        40 => '福岡県',
        41 => '佐賀県',
        42 => '長崎県',
        43 => '熊本県',
        44 => '大分県',
        45 => '宮崎県',
        46 => '鹿児島県',
        47 => '沖縄県',
    ];

    private $times = [
        '' => 'お選びください',
        1 => '15:00',
        2 => '15:30',
        3 => '16:00',
        5 => '17:00',
        6 => '17:30',
        7 => '18:00',
        8 => '18:30',
    ];


    //仮のルームデータ
    private $roomInfoData = [
        'id' => '001',
        'hotel_name' => 'ＴＨＥ ＨＩＲＡＭＡＴＳＵ ＨＯＴＥＬＳ＆ＲＥＳＯＲＴＳ 熱海',
        'hotel_name_kana' => 'ザヒラマツホテルズアンドリゾーツアタミ',
        'room_stick' => '6◆日本全国より取り寄せた厳選の食材を使った極上のフランス料理・レイトチェックアウト12時',
        'stay_date' => '2021-04-01',
        'stay_number' => 1,
        'guest_number' => 5,
        'rooms_number' => 4,
        'rooms_food' => '朝食',
    ];

    //仮のユーザ
    private $sessionUser = [
        'id' => '1',
        'user_id' => 'fabulous1109',
        'password' => 'abc',
        'last_name' => '山口',
        'first_name' => '由美子',
        'last_name_kana' => 'ヤマグチ',
        'first_name_kana' => 'ユミコ',
        'gender' => 2,
        'birthday' => '19821109',
        'postal_code' => '000-0000',
        'prefecture_cd' => '12',
        'city_name' => '柏市',
        'town_name' => '柏',
        'other_address' => '1丁目00-00',
        'tel' => '000-0000-0000',
        'emergency_contact' => '000-0000-0000',
        'email' => 'fabulous@icloud.com',
        'email_verify_token' => 'fabulous@icloud.com',
        'email_verified' => 'true',
        'point_total' => 13560,
    ];

    private $gests = [
        ['room' => 1, 'adults_price' => 14080, 'adults_number' => 1, 'child_number' => 1, 'child_price' => 14080, 'sub_price' => 123936],
        ['room' => 2, 'adults_price' => 28160, 'adults_number' => 1, 'child_number' => 0, 'child_price' => 0, 'sub_price' => 121120],
        ['room' => 3, 'adults_price' => 28160, 'adults_number' => 1, 'child_number' => 0, 'child_price' => 0, 'sub_price' => 121120],
        ['room' => 4, 'adults_price' => 28160, 'adults_number' => 1, 'child_number' => 0, 'child_price' => 0, 'sub_price' => 121120],
    ];

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
        'first_name',
        'last_name',
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

        $total = 0;
        foreach ($this->gests as $gest) {
            $total += $gest['sub_price'];
        };

        $week = ['日', '月', '火', '水', '木', '金', '土',];

        $stay_date = $this->roomInfoData['stay_date'];
        $week_date = date("w", strtotime($stay_date));
        $date = date("Y年m月d日", strtotime($stay_date)) . '(' . $week[$week_date] . ')';

        return view('reserves.edit')
            ->with([
                'addresses' => $this->addresses,
                'times' => $this->times,
                'roomInfoData' => $this->roomInfoData,
                'gest' => $this->gests,
                'total' => $total,
                'sessionUser' => $this->sessionUser,
                'date' => $date,
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
                'first_name.*' => ['required', 'regex:/^[ぁ-んァ-ヶ一-龥々]+$/u'],
                'last_name.*' => ['required', 'regex:/^[ぁ-んァ-ヶ一-龥々]+$/u'],
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
        // セッションから値を取り出す
        $input = $request->session()->get('reserve_input');
        // セッションに値が無い時はフォームに戻る
        if (!$input) {
            return redirect()->action([ReserveController::class, 'show']);
        }

        return view('reserves.confirm')
            ->with(['input' => $input]);
    }
    /**
     * 送信処理
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
