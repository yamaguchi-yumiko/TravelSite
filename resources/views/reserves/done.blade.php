@extends('layouts.reserves')
@section('title', '予約・購入情報完了')
@section('content')
        <div class="reserve_container">
            <p class="user_name">fabulous1109</p>
            <div class="reserve_flow">
                <p><img src="/images/step-chart01.gif" alt="予約・購入までの流れ"></p>
                <p><img src="/images/step-reserve-input.gif" alt="①予約・購入情報入力"></p>
                <p><img src="/images/step-reserve-confirm2.gif" alt="②予約・購入情報確認"></p>
                <p><img src="/images/step-reserve-complete-stay.gif" alt="③予約・購入情報完了"></p>
            </div>
            <div class="reserve_content">
                    <div class="reserve_desc reserve_done">
                        <h1>予約・購入完了</h1>
                        <div class="reserve_established">
                            <p><span>このページの表示をもって旅行契約が成立しました。</span></p>
                            <p><a href="">このページを印刷する</a></p>
                        </div>
                        <p>印刷されない場合は受付番号をお控えの上、チェックイン時にお名前と受付番号を宿泊施設へお伝えください。<br>
                            これ以降の変更取消については取引条件説明書面に基づき所定の取消料をいただきます。</p>
                        <p class="reserve_completion"><span>申込内容をご確認いただくために、お客様のメールアドレスに「完了メール」を送信いたします。</span><br>
                            ※このページは再表示できませんのでご注意ください。<br>
                            ※「完了メール」の着否は契約の成立とは関係ありません。また、このページの内容と「完了メール」の内容が異なる場合、このページの内容を優先します。<br>
                            ※「完了メール」が見つからない場合、迷惑メールフォルダに振り分けられていないかをご確認ください。</p>
                        <div class="receipt_number">
                            <p>契約成立日：&nbsp;2021年12月13日</p>
                            <p>受付番号：&nbsp;<span>5965783288</span></p>
                        </div>
                    </div>
                    <div class="hotel_info">
                        <p>ＴＨＥ　ＨＩＲＡＭＡＴＳＵ　ＨＯＴＥＬＳ＆ＲＥＳＯＲＴＳ　熱海<span>(ザヒラマツホテルズアンドリゾーツアタミ)</span></p>
                        <table>
                            <tr>
                                <th>商品名</th>
                                <td>6◆日本全国より取り寄せた厳選の食材を使った極上のフランス料理・レイトチェックアウト12時</td>
                            </tr>
                            <tr>
                                <th>利用日</th>
                                <td>2021年12月15日(水)</td>
                            </tr>
                            <tr>
                                <th>泊数</th>
                                <td>1泊</td>
                            </tr>
                            <tr>
                                <th>人数・室数</th>
                                <td>2名1室</td>
                            </tr>
                            <tr>
                                <th>プラン条件</th>
                                <td>1泊2食</td>
                            </tr>
                            <tr>
                                <th>獲得予定トラベルポイント</th>
                                <td>184　ポイント</td>
                            </tr>
                        </table>
                    </div>
                    <div class="hotel_info hotel_done">
                        <h3>商品情報</h3>
                        <table>
                            <tr>
                                <th>項目</th>
                                <th>内容</th>
                            </tr>
                            <tr>
                                <td>部屋</td>
                                <td>ツイン(新館AQUA SQUARE コートヤード ツイン 禁煙) 24.00平米 眺望:山</td>
                            </tr>
                            <tr>
                                <td>チェックイン/アウト</td>
                                <td>15:00/10:00</td>
                            </tr>
                            <tr>
                                <td>オプション</td>
                                <td>なし</td>
                            </tr>
                            <tr>
                                <td>お支払い方法</td>
                                <td>現地支払い</td>
                            </tr>
                            <tr>
                                <td>部屋施設</td>
                                <td>シャワーブース/トイレ/洋式トイレ/洗浄器付トイレ等/冷房（無料）/暖房（無料）/冷蔵庫/テレビ（無料）/貸金庫（無料） ベッドサイズ206cm×120cm</td>
                            </tr>
                            <tr>
                                <td>部屋アメニティー</td>
                                <td>歯ブラシ/タオル/バスタオル/かみそり/ドライヤー/ユカタ</td>
                            </tr>
                            <tr>
                                <td>交通案内</td>
                                <td>公共機関：ＪＲ東海道線熱海駅→タクシー約１０分</td>
                            </tr>
                            </tr>
                        </table>
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
                                <tr>
                                    <th colspan="2" rowspan="2">部屋1</th>
                                </tr>
                                <tr class="price_items_detail">
                                    <td>72,600円</td>
                                    <td>2</td>
                                    <td>0円</td>
                                    <td>0</td>
                                    <td>145,200円</td>
                                </tr>
                                <tr>
                                    <td colspan="7" class="price_items_subtotal">宿泊料金合計<span>145,200円</span></td>
                                </tr>
                                <tr>
                                    <td colspan="7" class="price_items_total">
                                        <p>合計<span>145,200</span>円</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="accss_done">
                            <h3>チェックイン・交通手段の選択</h3>
                            <table>
                                <tr>
                                    <th>項目</th>
                                    <th>内容</th>
                                </tr>
                                <tr>
                                    <td>チェックイン時間</td>
                                    <td>
                                        <p>15:00</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>宿泊施設への交通手段</td>
                                    <td>
                                        <p>公共交通機関</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="payment_info payment_done">
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
                                        現地支払い
                                    </td>
                                    <td class="help_inner">・宿泊施設でのお支払いになります。ご本人様の利用を確認させていただく為に、ご連絡をさせていただく場合がございますのでご了承ください</td>
                                </tr>
                            </table>
                        </div>
                        <div class="subscriber_info subscriber_done">
                            <h3>予約者（代表者）情報入力</h3>
                            <table>
                                <tr>
                                    <th>項目</th>
                                    <th>内容</th>
                                </tr>
                                <tr>
                                    <td>氏名（漢字）</td>
                                    <td>山口 由美子様</td>
                                </tr>
                                <tr>
                                    <td>氏名（カタカナ）</td>
                                    <td>ヤマグチ ユミコ様</td>
                                </tr>
                                <tr>
                                    <td>性別</td>
                                    <td>女性</td>
                                </tr>
                                <tr>
                                    <td>年齢</td>
                                    <td>39歳</td>
                                </tr>
                                <tr class="address_info">
                                    <td>住所</td>
                                    <td class="postal_code">
                                        〒331-0068
                                        千葉県 柏 柏７丁目１０－２２ ジュネパレス柏第６９　　２０１号室
                                    </td>
                                </tr>
                                </tr>
                                <tr class="telephone">
                                    <td>電話番号</td>
                                    <td cla080-5079-2903ss="telephone_item">
                                        080-5079-2903
                                    </td>
                                </tr>
                                <tr class="telephone emergency_contact">
                                    <td>電話番号<br>（緊急連絡先）</td>
                                    <td class="telephone_item">
                                        080-5079-2903
                                    </td>
                                </tr>
                                <tr class="email_info">
                                    <td>メールアドレス</td>
                                    <td class="email_item">
                                        <p>fabulous1109@icloud.com</p>
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
                                </tr>
                                <tr>
                                    <td>部屋１&nbsp;代表者氏名（漢字</td>
                                    <td>山口ゆみこ様</td>
                                </tr>
                                <tr class="delegate">
                                    <td>部屋２&nbsp;代表者氏名（漢字）</td>
                                    <td>山口ゆみこ様</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="personal_info personal_done">
                        <h3>取引条件説明書書面について</h3>
                        <p>お客様に保存または印刷いただいた取引条件説明書書面の内容をもって、ご契約内容とさせていただきます。</p>
                    </div>
                <div class="cancel_button done_cancel_button">
                    <p><button type="submid" name="">予約一覧へ進む</button></p>
                    <p><button type="submid" name="">TOPに戻る</button></p>
                </div>
            </div>
        </div>
@endsection
