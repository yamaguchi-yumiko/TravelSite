@extends('layouts.reserves')
@section('title', '予約・購入情報確認')
@section('content')
<div class="reserve_container">
    <p class="user_name">
        @if(Auth::check())
            {{$order_data['auth_user']->user_id}}
        @endif
    </p>
    <div class="reserve_flow">
        <p><img src="/images/step-chart01.gif" alt="予約・購入までの流れ"></p>
        <p><img src="/images/step-reserve-input2.gif" alt="①予約・購入情報入力"></p>
        <p><img src="/images/step-reserve-confirm-stay.gif" alt="②予約・購入情報確認"></p>
        <p><img src="/images/step-reserve-complete.gif" alt="③予約・購入情報完了"></p>
    </div>
    <div class="reserve_content">
        <form action="" method="POST">
            @csrf
            <div class="reserve_desc reserve_conf">
                <h1>予約・購入情報確認</h1>
                <p><span>国内旅館・ホテルの予約・購入はまだ完了していません。予約・購入完了画面が表示された段階で、手続が完了となります。</span><br>
                    予約入力内容を確認のうえ、ページ下部の［上記の内容に同意する］にチェックし、［予約・購入する］ボタンをクリックしてください。<br>
                    ※弊社承諾以降の変更・取消については、ご利用規約に基づき所定の取消料を申し受けます。<br>
                    ※旅行代金につきましては、現地宿泊施設にてお支払いください。</p>
            </div>
            <div class="hotel_info">
                @foreach($order_data['hotel_info'] as $value)
                <p>{{$value->HOTEL_NAME}}<span>({{$value->HOTEL_NAME_KANA}})</span</p>
                <table>
                    <tr>
                        <th>商品名</th>
                        <td>{{$value->ROOM_STICK}}</td>
                    </tr>
                    <tr>
                        <th>利用日</th>
                        <td>{{Util::getDate($order_data['room_info']['check_in'])}}</td>
                    </tr>
                    <tr>
                        <th>泊数</th>
                        <td>{{$order_data['stay_number']}}泊</td>
                    </tr>
                    <tr>
                        <th>人数・室数</th>
                        <td>{{Util::getGuestNumber($order_data['room_gests'])}}名{{count($order_data['room_gests'])}}室</td>
                    </tr>
                    <tr>
                        <th>プラン条件</th>
                        <td>{{$order_data['stay_number']}}泊{{$value->ROOM_FOOD}}</td>
                    </tr>
                    <tr>
                        <th>獲得予定トラベルポイント</th>
                        <td>184&nbsp;ポイント</td>
                    </tr>
                </table>
                @endforeach
            </div>
            <div class="hotel_info hotel_conf">
            @foreach($order_data['hotel_info'] as $value)
                <h3>商品情報</h3>
                <table>
                    <tr>
                        <th>項目</th>
                        <th>内容</th>
                    </tr>
                    <tr>
                        <td>部屋</td>
                        <td>{{$value->ROOM_NAME}}&nbsp;{{$value->ROOM_TYPE}}&nbsp;{{$value->ROOM_SIZE}}</td>
                    </tr>
                    <tr>
                        <td>チェックイン/アウト</td>
                        <td>15:00/10:00</td>
                    </tr>
                    <tr>
                        <td>お支払い方法</td>
                        <td>{{$value->ROOM_PAYMENT}}</td>
                    </tr>
                    <tr>
                        <td>部屋施設</td>
                        <td>{{$value->ROOM_FACILITY}}</td>
                    </tr>
                    <tr>
                        <td>部屋アメニティー</td>
                        <td>{{$value->ROOM_AMENITIES}}</td>
                    </tr>
                </table>
                @endforeach
            </div>
            <div class="travel_info">
                <h2>［旅行代金］</h2>
                <div class="price_items">
                    <h3>・宿泊料金</h3>
                    <table>
                        <tr>
                            <th colspan="2" rowspan="2">内訳</th>
                            <th colspan="2">大人</th>
                            <th colspan="2">小人</th>
                            <th colspan="2" rowspan="2">小計</th>
                        </tr>
                        <tr>
                            <th>単価</th>
                            <th>人数</th>
                            <th>単価</th>
                            <th>人数</th>
                        </tr>
                        @foreach($order_data['room_gests'] as $index => $gest)
                        <tr>
                            <th colspan="2" rowspan="2">部屋{{$gest['reservation_details_room_number']}}</th>
                        </tr>
                        <tr class="price_items_detail">
                            <td>{{number_format($gest['adults_price'])}}円</td>
                            <td>{{$gest['adults_number']}}</td>
                            <td>{{number_format($gest['child_price'])}}円</td>
                            <td>{{$gest['child_number']}}</td>
                            <td>{{number_format($gest['sub_price'])}}円</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="7" class="price_items_subtotal price_subtotal_conf">
                                宿泊料金合計<span>145,200円</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7" class="price_items_total price_total_conf">
                                <p>合計<span>145,200</span>円</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="accss_conf">
                    <h3>チェックイン・交通手段の選択</h3>
                    <table>
                        <tr>
                            <th>項目</th>
                            <th>内容</th>
                        </tr>
                        <tr>
                            <td>チェックイン時間</td>
                            <td>
                                <p>{{GeneralConst::CHECK_IN_TIMES[$input['check_time']]}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>宿泊施設への交通手段</td>
                            <td>
                                <p>{{$input['transportation']}}</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="payment_info payment_conf">
                    <h3>お支払い方法の選択</h3>
                    <table>
                        <tr>
                            <th>項目</th>
                            <th>内容</th>
                            <th>ヘルプ</th>
                        </tr>
                        <tr>
                            <td>お支払い情報</td>
                            <td>
                                {{$input['payment'] == 'local_payment' ? '現地払い': '事前支払い'}}
                            </td>
                            <td class="help_inner">・宿泊施設でのお支払いになります。ご本人様の利用を確認させていただく為に、ご連絡をさせていただく場合がございますのでご了承ください</td>
                        </tr>
                    </table>
                </div>
                <div class="subscriber_info subscriber_conf">
                    <h3>予約者（代表者）情報入力</h3>
                    <table>
                        <tr>
                            <th>項目</th>
                            <th>内容</th>
                        </tr>
                        <tr>
                            <td>氏名（漢字）</td>
                            <td>{{$order_data['auth_user']['last_name']}}&nbsp;{{$order_data['auth_user']['first_name']}}様</td>
                        </tr>
                        <tr>
                            <td>氏名（カタカナ）</td>
                            <td>{{$order_data['auth_user']['last_name_kana']}}{{$order_data['auth_user']['first_name_kana']}}様</td>
                        </tr>
                        <tr>
                            <td>性別</td>
                            <td>{{$order_data['auth_user']['gender'] == 1 ? '男性' : '女性' }}</td>
                        </tr>
                        <tr>
                            <td>年齢</td>
                            <td>{{floor((date('Ymd') - $order_data['auth_user']['birthday']) / 10000) }}歳</td>
                        </tr>
                        <tr class="address_info">
                            <td>住所</td>
                            <td class="postal_code">
                                〒{{$input['postal_code_first']}} - {{$input['postal_code_second']}}
                                {{$input['address_prefectures']}}{{$input['address_cities']}}{{$input['address_town']}}{{$input['address_other']}}
                            </td>
                        </tr>
                        </tr>
                        <tr class="telephone">
                            <td>電話番号</td>
                            <td cla080-5079-2903ss="telephone_item">
                            {{$input['tel_first']}} - {{$input['tel_second']}} - {{$input['tel_third']}}
                            </td>
                        </tr>
                        <tr class="telephone emergency_contact">
                            <td>電話番号<br>（緊急連絡先）</td>
                            <td class="telephone_item">
                            {{$input['emergency_contact_first']}} - {{$input['emergency_contact_second']}} - {{$input['emergency_contact_third']}}
                            </td>
                        </tr>
                        <tr class="email_info">
                            <td>メールアドレス</td>
                            <td class="email_item">
                                <p>
                                    @empty($input['next_email'])
                                        @if(Auth::check())
                                            {{$order_data['auth_user']->email}}
                                        @endif
                                    @endempty
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="delegate_info delegate_conf">
                    <h3>宿泊者（部屋別代表者）情報入力</h3>
                    <table>
                        <tr>
                            <th>項目</th>
                            <th>内容</th>
                        </tr>
                        @empty(!$order_data['room_gests'])
                        @foreach($order_data['room_gests'] as $index => $gest)
                        @if($gest['reservation_details_room_number'] === 1)
                        <tr>
                            <td>部屋1&nbsp;代表者氏名（漢字）</td>
                            <td>{{$order_data['auth_user']['last_name']}}&nbsp;{{$order_data['auth_user']['first_name']}}様</td>
                        </tr>
                        @else
                        <tr>
                            <td>部屋{{ $gest['reservation_details_room_number'] }}&nbsp;代表者氏名（漢字）</td>
                            <td>
                                {{$input['room_last_name'][$index]}}&nbsp;{{$input['room_first_name'][$index]}}様
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        @endempty
                    </table>
                </div>
                <p class="transaction_terms">取引条件説明書面を表示し、表示された内容を保存または印刷して保管してください。（※別ウィンドウで開きます）<a href=""><img src="/images/bt-view-manual.gif" alt=""></a></p>
            </div>
            <div class="personal_info personal_done">
                <h3>予約･購入を完了する</h3>
                <p>下記の内容をご確認のうえ、チェックボックスにチェックを入れてください。</p>
                <p>・取引条件説明書面の内容について承諾します。</p>
                <p>・取引条件説明書面を保存または印刷しました。</p>
                <p class="personal_info_check"><input type="checkbox">上記の内容に同意する</p>
                <p>※本承諾をもって、取引条件の説明を受けたものとさせていただきます。</p>
                <div class="confirm_button confirm_button_conf">
                    <p><button type="submid" name="">予約・購入する</button></p>
                </div>
            </div>
        </form>
        <div class="cancel_button">
            <p><button type="submid" name="">予約・購入を中止する</button></p>
            <p><button type="submid" name="">入力内容を変更する</button></p>
        </div>
    </div>
</div>
@endsection
