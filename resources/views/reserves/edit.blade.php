@extends('layouts.reserves')
@section('title', '予約・購入情報登録')
@section('content')
<div class="reserve_container">
    <p class="user_name">
        @if(Auth::check())
            {{$auth_user->user_id}}
        @endif
    </p>
    <div class="reserve_flow">
        <p><img src="/images/step-chart01.gif" alt="予約・購入までの流れ"></p>
        <p><img src="/images/step-reserve-input-stay.gif" alt="①予約・購入情報入力"></p>
        <p><img src="/images/step-reserve-confirm.gif" alt="②予約・購入情報確認"></p>
        <p><img src="/images/step-reserve-complete.gif" alt="③予約・購入情報完了"></p>
    </div>
    <div class="reserve_content">
        <div class="reserve_desc">
            <h1>予約・購入情報入力</h1>
            @if($errors->has('kiyaku'))
            <p class="error">{{$errors->first('kiyaku')}}</p>
            @endif
            <p>国内旅館・ホテルの予約を受け付けています。<br>選択内容を確認のうえ、予約・購入情報を入力し、「予約情報・入力内容を確認する」ボタンをクリックしてください。</p>
        </div>
        <div class="hotel_info">
            @foreach($hotel_info as $value)
            <p>{{$value->HOTEL_NAME}}<span>({{$value->HOTEL_NAME_KANA}})</span></p>
            <table>
                <tr>
                    <th>商品名</th>
                    <td>{{$value->ROOM_STICK}}</td>
                </tr>
                <tr>
                    <th>利用日</th>
                    <td>{{Util::getDate($room_info['check_in'])}}</td>
                </tr>
                <tr>
                    <th>泊数</th>
                    <td>{{$stay_number}}泊</td>
                </tr>
                <tr>
                    <th>人数・室数</th>
                    <td>{{Util::getGuestNumber($room_gests)}}名{{count($room_gests)}}室</td>
                </tr>
                <tr>
                    <th>プラン条件</th>
                    <td>１泊{{$value->ROOM_FOOD}}</td>
                </tr>
            </table>
            @endforeach
        </div>
        <form action={{ route('reserve.post')}} method="post">
            @csrf
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
                        @foreach($room_gests as $index => $gest)
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
                            <td colspan="7" class="price_items_subtotal">
                                宿泊料金合計 <span>{{number_format($hotel_total_price)}}円</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7" class="price_items_total">
                                <p v-show="!!isPointApply"> ポイント利用<span>@{{'-' + applyPointAfter}}</span>pt</p>
                                <p>合計<span>@{{totalPrice.toLocaleString()}}</span>円</p>
                                <p>獲得予定トラベルポイント</p>
                                <p>現地払いの場合：<span>@{{localPoint}}</span>ポイント</p>
                                <p>事前払いの場合：<span>@{{advancePoint}}</span>ポイント</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="accss">
                    <h3>チェックイン・交通手段の選択</h3>
                    <table>
                        <tr>
                            <th>項目</th>
                            <th>内容</th>
                            <th>ヘルプ</th>
                        </tr>
                        <tr>
                            <td>チェックイン時間<span>※必須</span></td>
                            <td>
                                <select name="check_time" value="{{old('check_time')}}" @focus="timeFocus" :class="isTime === false ? timeClass : 'on_check'">
                                    @foreach(GeneralConst::CHECK_IN_TIMES as $index => $time)
                                    <option value="{{$index}}" @if(old('check_time')==$index) selected @endif>{{ $time }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('check_time'))
                                <p class="error">{{$errors->first("check_time")}}</p>
                                @elseif(old('check_time') === null)
                                <p class="warning">★チェックイン時間は必ず選択してください。</p>
                                @endif
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>宿泊施設への交通手段</td>
                            <td>
                                <input type="radio" name="transportation" id="train" value="train" {{old('transportation') === 'train ' ? ' checked' : ''}} checked>
                                <label for="train">公共交通機関</label>
                                <input type="radio" name="transportation" id="car" value="car" {{old('transportation') === 'car' ? ' checked' : ''}}>
                                <label for="car">車</label>
                            </td>
                            <td class="help_inner">・「駐車場情報（<img src="/images/window.gif" alt=""><a href="#">施設情報・アクセス</a>に掲載）」をご確認ください。</td>
                        </tr>
                    </table>
                </div>
                <div class="payment_info">
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
                                <div class="point_acquisition">
                                    <input type="radio" name="payment" id="local_payment" value="local_payment" {{old('payment') === 'local_payment' ? ' checked' : ''}} checked>
                                    <label for="local_payment">現地払い</label>
                                    <p><span>@{{localPoint}}</span>ポイント獲得予定</p>
                                </div>
                                <div class="point_acquisition">
                                    <input type="radio" name="payment" id="advance_payment" value="advance_payment" {{old('payment') === 'advance_payment' ? ' checked' : ''}}>
                                    <label for="advance_payment">事前払い</label>
                                    <p><span>@{{advancePoint}}</span>ポイント獲得予定</p>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="point_info">
                    <h3>・トラベルポイント利用</h3>
                    <p>お客様が現在保有されているトラベルポイントは下記の通りです。今回ご利用になるトラベルポイント数を設定してください。<br>
                        【注意】オンライン予約では、トラベルポイントとたびたびバンクは併用できません。<br>
                        今回のオンライン予約でたびたびバンクをご利用になる予定のお客様は、トラベルポイントは利用せずに予約確認画面へお進みください。<br>
                        ※JTBトラベルギフトにてお支払いの場合、トラベルポイントの追加利用はできませんので、JTBトラベルギフトのお支払いと同時にご利用ください。
                    </p>
                    <table>
                        <tr>
                            <th>項目</th>
                            <th>内容</th>
                            <th>ヘルプ</th>
                        </tr>
                        <tr>
                            <td>保有トラベルポイント</td>
                            <td class="owned_point">
                                <span>
                                    @if($user_point != 0)
                                    @{{ownedPoint}}
                                    @else
                                    0
                                    @endif
                                </span>ポイント
                            </td>
                            <td rowspan="2" class="help_inner">
                                <img src="/images/window.gif" alt=""><a href="#">トラベルポイント利用について</a><br>
                                <p :class="isApplyPointError ? 'checkInfo' : ''">・トラベルポイントは100ポイント以上、100ポイント単位でご利用頂けます。</p>
                            </td>
                        </tr>
                        <tr>
                            <td>今回ご利用のポイント</td>
                            <td class="use_point">
                                @if($user_point != 0)
                                <input type="text" :class="isApplyPointError ? 'checkError' : ''" name="point_use" v-model.number="applyPointInpt" type="number">
                                <button type="button" size="15" @click="applyPoint">適用</button>
                                <span class="error" v-show="isApplyPointError">ポイントはお間違いのないようご入力ください。</sp>
                                    @else
                                    <span>100ポイント以上でご利用いただけます。</span>
                                    @endif
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="subscriber_info">
                    <h3>予約者（代表者）情報入力<span>※宿泊される方の情報をご入力ください。（代理予約は承っておりません。）</span></h3>
                    <table>
                        <tr>
                            <th>項目</th>
                            <th>内容</th>
                            <th>ヘルプ</th>
                        </tr>
                        <tr>
                            <td>氏名（漢字）</td>
                            <td>{{ Auth::check() ? $auth_user->last_name : '' }}&nbsp;{{ Auth::check() ? $auth_user->first_name : '' }}&nbsp;様</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>氏名（カタカナ）</td>
                            <td>{{ Auth::check() ? $auth_user->last_name_kana : '' }}&nbsp;{{ Auth::check() ? $auth_user->first_name_kana : '' }}&nbsp;様</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>性別</td>
                            <td>{{ Auth::check() ? $auth_user->gender=== 1 ? '男性': '女性' : ''}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>年齢</td>
                            <td>{{Auth::check() ? floor((date('Ymd') - $auth_user->birthday) / 10000) : ''}}歳</td>
                            <td></td>
                        </tr>
                        <tr class="address_info">
                            <td rowspan="2">住所<span>※必須</span></td>
                            <td class="postal_code">
                                郵便番号<input type="text" name="postal_code_first" @focus="postalFirstFocus" :class="!isPostalFirst ? postalFirstClass : 'on_check'" value="{{old('postal_code_first') ? old('postal_code_first') : (Auth::check() ? substr($auth_user->postal_code,0,3) : '')}}">
                                - <input type="text" name="postal_code_second" @focus="postalSecondFocuts" :class="!isPostalSecond ? postalSecondClass : 'on_check'" value="{{old('postal_code_second') ? old('postal_code_second') : (Auth::check() ? substr($auth_user->postal_code,4,4) : '')}}"><br>
                                <p class="error">
                                    @if($errors->has('postal_code_first'))
                                    {{$errors->first('postal_code_first')}}
                                    @elseif($errors->has('postal_code_second'))Ï
                                    {{$errors->first('postal_code_second')}}
                                    @endif
                                <p>※数字（前半3桁-後半4桁）を入力してください。</p>
                            </td>
                            <td class="help_inner">
                                <p :class="postalFirstClass === 'checkError' || postalSecondClass  === 'checkError' ? 'checkInfo' : ''">例）&nbsp;123-4567</p>
                            </td>
                        </tr>
                        <tr class="address_info">
                            <td class="prefectures">
                                <p><button type="button" @click="onClick" href="#">郵便番号から住所を自動入力</button></p>
                                <p class="error" ref="addresButton"></p>
                                <select name="address_prefectures" @focus="prefecturesFocus" ref="prefectures" value="{{ old('address_prefectures') }}" :class="!isPrefectures ? PrefecturesClass : 'on_check'">
                                <option value="">都道府県を選択してください</option>
                                    @foreach( DB::table('prefectures')->get() as $index => $address)
                                    <option value="{{$address->name}}" @if(old('address_prefectures')==$address->prefecture_cd) selected @elseif (Auth::check() ? ($auth_user->prefecture_cd == $address->prefecture_cd) : '') selected @endif>{{ $address->name }}</option>
                                    @endforeach
                                </select>
                                <p class="address_cities">市区町村<input type="text" name="address_cities" ref="cities" @focus="citiesFocus" :class="!isCities ? citiesClass : 'on_check'" value="{{ old('address_cities') ? old('address_cities') : (Auth::check() ? $auth_user->city_name : '')}}"></p>
                                <p class="address_town">町名番地<input type="text" name="address_town" @focus="townFocus" :class="!isTown ? townClass : 'on_check'" value="{{ old('address_town') ? old('address_town') : (Auth::check() ? $auth_user->town_name : '')}}"></p>
                                <p class="address_other">マンション名など<input type="text" name="address_other" value="{{ old('address_other') ? old('address_other') : (Auth::check() ? $auth_user->other_address: '')}}"></p>
                                <p class="error">
                                    @if($errors->has('address_prefectures'))
                                    {{$errors->first('address_prefectures')}}
                                    @elseif($errors->has('address_cities'))
                                    {{$errors->first('address_town')}}
                                    @elseif($errors->has('address_townÏ'))
                                    {{$errors->first('address_cities')}}
                                    @endif
                                </p>
                            </td>
                            <td class="help_inner">
                                <p :class="PrefecturesClass === 'checkError' || citiesClass  === 'checkError' || townClass  === 'checkError' ? 'checkInfo' : ''">例）&nbsp;東京都例）品川区<br>
                                    例）&nbsp;東品川2-3-11<br>
                                    例）&nbsp;JTBビル16F<br>
                                    <span>マンション名・建物名・部屋番号等は省略せずに必ず入力をお願いします。</span>
                                </p>
                            </td>
                        </tr>
                        <tr class="telephone">
                            <td>電話番号<span>※必須</span></td>
                            <td class="telephone_item">
                                <input type="telephone" name="tel_first" @focus="telFirstFocus" :class="!isTelFirst ? telFirstClass : 'on_check'" value="{{old('tel_first') ? old('tel_first') : (Auth::check() ? substr($auth_user->tel,0,3) : '')}}">
                                <input type="telephone" name="tel_second" @focus="telSecondFocus" :class="!isTelSecond ? telSecondClass : 'on_check'" value="{{old('tel_second') ? old('tel_second') : (Auth::check() ? substr($auth_user->tel,4,4) : '')}}">
                                <input type="telephone" name="tel_third" @focus="telThirdFocus" :class="!isTelThird ? telThirdClass : 'on_check'" value="{{old('tel_third') ? old('tel_third') : (Auth::check() ? substr($auth_user->tel,9,4) : '')}}">
                                <p class="error">
                                    @if($errors->has('tel_first'))
                                    {{$errors->first('tel_first')}}
                                    @elseif($errors->has('tel_second'))
                                    {{$errors->first('tel_second')}}
                                    @elseif($errors->has('tel_third'))
                                    {{$errors->first('tel_third')}}
                                    @endif
                                </p>
                                <p>※数字（市外局番-市内局番-加入者番号）を入力してください。</p>
                            </td>
                            <td class="help_inner">
                                <p :class="telFirstClass === 'checkError' || telSecondClass === 'checkError' || telThirdClass === 'checkError' ? 'checkInfo' : ''">
                                    例）&nbsp;03-1234-5678<br>
                                    例）&nbsp;090-1234-5678
                                </p>
                                ・0から始まる市外局番から入力してください。<br>
                                <span>・携帯電話の入力も可能です。</span>
                            </td>
                        </tr>
                        <tr class="telephone emergency_contact">
                            <td>電話番号<br>（緊急連絡先）</td>
                            <td class="telephone_item">
                                <input type="telephone" name="emergency_contact_first" @focus="emergencyFirstFocus" :class="!isEmergencyFirst ? emergencyFirstClass : 'on_check'" value="{{old('emergency_contact_first') ? old('emergency_contact_first') : (Auth::check() ? substr($auth_user->emergency_contact,0,3) : '')}}">
                                <input type="telephone" name="emergency_contact_second" @focus="emergencySecondFocus" :class="!isEmergencySecond ? emergencySecondClass : 'on_check'" value="{{old('emergency_contact_second') ? old('emergency_contact_second') : (Auth::check() ? substr($auth_user->emergency_contact,4,4) : '')}}">
                                <input type="telephone" name="emergency_contact_third" @focus="emergencyThirdFocus" :class="!isEmergencyThird ? emergencyThirdClass : 'on_check'" value="{{old('emergency_contact_third') ? old('emergency_contact_third') : (Auth::check() ? substr($auth_user->emergency_contact,9,4) : '')}}">
                                <p class="error">
                                    @if($errors->has('emergency_contact_first'))
                                    {{$errors->first('emergency_contact_first')}}
                                    @elseif($errors->has('emergency_contact_second'))
                                    {{$errors->first('emergency_contact_second')}}
                                    @elseif($errors->has('emergency_contact_third'))
                                    {{$errors->first('emergency_contact_third')}}
                                    @endif
                                </p>
                                <p>※数字（市外局番-市内局番-加入者番号）を入力してください。</p>
                            </td>
                            <td class="help_inner">
                                <p :class="emergencyFirstClass  === 'checkError' || emergencySecondClass  === 'checkError'  || emergencyThirdClass  === 'checkError' ? 'checkInfo' : ''">例）&nbsp;03-1234-5678<br>
                                    例）&nbsp;090-1234-5678
                                </p>
                                ・0から始まる市外局番から入力してください。<br>
                                ・緊急な連絡が必要な場合でも、必ずご連絡がとれる連絡先（携帯・自宅・会社等の電話番号）を入力してください。<br>
                                <span>・携帯電話の入力も可能です。</span>
                            </td>
                        </tr>
                        <tr class="email_info">
                            <td>メールアドレス<span>※必須</span></td>
                            <td class="email_item">
                                <p>
                                    <input type="radio" name="email_option" value="normal" id="normal_email" v-model="email">
                                    <label for="normal_email">通常のメールアドレスを使用する</label>
                                </p>
                                <p>
                                @if(Auth::check())
                                    {{$auth_user->email}}
                                @endif
                                </p>
                                <p>
                                    <input type="radio" name="email_option" value="next" id="next_email" v-model="email">
                                    <label for="next_email">次のメールアドレスを使用する</label>
                                </p>
                                <p>
                                    <input type="text" name="next_email" value="{{old('next_email')}}" @focus="emailFocus" :class="!isEmail ? emailClass : 'on_check'" :disabled="email != 'next'"><span>※英数字で入力してください。</span>
                                </p>
                                @if($errors->has('next_email') && old('email_option') === 'next')
                                <p class="error">{{$errors->first('next_email')}}</p>
                                @endif
                                <p class="wrong_transmission">誤送信を防ぐために、もう一度同じメールアドレスを入力してください。</p>
                                <p class="wrong_transmission_input">
                                    <input type="text" name="email_conf" value="{{old('email_conf')}}" @focus="emailConfFocus" :class="!isEmailConf ? emailConfClass : 'on_check'" :disabled="email != 'next'">
                                </p>
                                @if($errors->has('email_conf'))
                                <p class="error">{{$errors->first('email_conf')}}</p>
                                @endif
                            </td>
                            <td class="help_inner">
                                <p :class="emailClass === 'checkError' || emailConfClass === 'checkError' ? 'checkInfo' : ''">例） 123abcde@jtb.co.jp</p>
                                ・携帯端末以外のメールアドレスのご利用をお勧めいたします。<br>
                                ・フリーメールでは予約ができない場合がございます。<br>
                                <span>・「.@」「..」を含むメールアドレスはご利用いただけませんので予めご了承ください。</span><br>
                                <span>・ドメイン指定してある場合はjtb.co.jpからメールを受け取れるように設定してください。</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="delegate_info">
                    <h3>宿泊者（部屋別代表者）情報入力</h3>
                    <table>
                        <tr>
                            <th>項目</th>
                            <th>内容</th>
                            <th>ヘルプ</th>
                        </tr>
                        @empty(!$room_gests)
                        @foreach($room_gests as $index => $gest)
                        <tr class="delegate">
                            @if($gest['reservation_details_room_number'] === 1)
                            <td>部屋1&nbsp;代表者氏名（漢字）<br></td>
                            <td>宿泊者代表と同一になります</td>
                            <td></td>
                            @else
                            <td>部屋{{ $gest['reservation_details_room_number'] }}&nbsp;代表者氏名（漢字）<br><span>※必須</span></td>
                            <td>
                                <div class="delegate_item">
                                    <p>姓<input type="text" name="room_last_name[{{$index}}]" value='{{old("room_last_name.$index")}}'></p>
                                    <p>名<input type="text" name="room_first_name[{{$index}}]" value='{{old("room_first_name.$index")}}'></p>
                                </div>
                                @if($errors->has("room_last_name.$index"))
                                <p class="error" ref="gestFirstError">部屋{{ $gest['reservation_details_room_number'] }}{{$errors->first("room_first_name.$index")}}</p>
                                @elseif($errors->has("room_last_name.$index"))
                                <p class="error" ref="gestlastError">部屋{{ $gest['reservation_details_room_number'] }}{{$errors->first("room_last_name.$index")}}</p>
                                @else
                                <p><span>部屋{{ $gest['reservation_details_room_number'] }}&nbsp;代表者氏名（漢字）は必ず入力してください。</p>
                                @endif
                                <p>※漢字（漢字がない方は、ひらがなもしくはカタカナ）で入力してください。</span></p>
                            </td>
                            <td class="help_inner">
                                <p>例）&nbsp;姓：山田<span>名：太郎</span></p>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                        @endempty
                    </table>
                </div>
            </div>
            <div class="personal_info">
                <h3>個人情報の取り扱いについての同意</h3>
                <p>入力いただくお客様の個人情報は、当該旅行サービスのご案内のみに使用し、それ以外の目的で使用することはございません。また、お申し込みいただいた当該旅行サービスの手続きに必要な範囲内で、手配代行者に対しお客様の個人情報を提供いたします。さらに、今後のお客様のご旅行申し込みを簡素化するために、JTBグループ企業とお客様の個人情報を共有する場合がございます。</p>
                <p><span>上記にご同意頂ける場合は「個人情報の取り扱いについて同意します」にチェックをいれてください。</span></p>
                <p><img src="/images/window.gif" alt=""><a href="">プライバシーポリシー全文</a></p>
                <p class="personal_info_check"><input type="checkbox" name="kiyaku" value="1">個人情報の取り扱いについて同意します</p>
                <div class="confirm_button">
                    <p><button>予約情報・入力内容の確認をする</button></p>
                </div>
            </div>
        </form>
    </div>
    <div class="cancel_button">
        <p><button>予約・購入を中止する</button></p>
    </div>
    <div>
        @endsection
