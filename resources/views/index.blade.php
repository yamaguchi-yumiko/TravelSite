
@extends('layouts.header')

@section('content')
<body>
    <!-- 共通header.html -->
    <!-- 共通処理スクリプト↓ -->
    <script type="text/javascript" src="/js/run_rwd.js"></script>
    <!-- ログイン判定・不要な場合は削除 -->
    <script type="text/javascript" src="/js/common.js"></script>
    <!-- salesforce set cookie↓ -->
    <script type="text/javascript" src="/js/sfmc_setcookie.js"></script>
    <!-- Google Analytics（旧GA）↓ -->
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30028509-1']);
    _gaq.push(['_setDomainName', '.jtb.co.jp']);
    _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- /Google Analytics（旧GA） -->
    <!-- Google Tag Manager↓ -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MNC3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MNC3');</script>
    <!-- End Google Tag Manager -->
    <link rel="stylesheet" href="https://www.jtb.co.jp/_common/_template2020/_assets/css/headfooter_rwd.css">
    <!-- 共通ヘッダ・フル版のhtml PC -->




    <main id="str_main" class="main-content">
    <div class="str_content -warning">
        <div class="str_segment">
            <div class="str_outer">
                <div id="myjtb_banner_C"></div>
            </div>
            <div class="str_outer">
                <div class="str_inner">
                    <div class="warning_area js_waring_area">
                        <!--p class="hdg icon -notice">重要なお知らせ</p-->
                        <ul class="warning_list">
                        <!--li><a target="blank" href="https://www.jtb.co.jp/operate/weather.asp">大雨特別警報発令に伴う悪天候時の影響について</a></li-->
                        <!--li>このたびの台風で被災された方々に、心よりお見舞いを申し上げます。一日も早い復興を心よりお祈り申し上げます。</li-->
                        <!--li><a target="blank" href="https://www.jtb.co.jp/information/19_20/index.asp">システムメンテナンスに伴う年末年始期間中のサービス内容一部変更について</a></li-->
                        </ul>
                    <!-- /.warning_area --></div>
                </div>
            </div>
        </div>
    <!-- /.str_content --></div>

    <div class="mv_area">
        <div class="mv_carousel js_mv_carousel -is_loading">
        <div class="slide">
            <img src="{{ asset('_images/img_mv_p_220101_1.png') }}" alt="福春">
            <div class="content">
                <p><a class="btn -mv" href="https://www.jtb.co.jp/fukuharu/" onclick="_gaq.push(['_trackEvent','top_pc','main','福春']);">詳細を見る</a></p>
            </div>
        </div>

        <div class="slide">
            <img src="{{ asset('/_images/img_mv_p_210805_2.jpg') }}" alt="オンラインリモート相談">
            <div class="content">
                <p><a class="btn -mv" href="https://consultants.jtb.co.jp/top" onclick="_gaq.push(['_trackEvent','top_pc','main','オンラインリモート相談']);">詳細を見る</a></p>
            </div>
        </div>

        <div class="slide">
            <img src="{{ asset('/_images/img_mv_p_211222_6.jpg') }}" alt="JTBふるさと納税旅行クーポン">
            <div class="content">
                <p><a class="btn -mv" href="https://www.jtb.co.jp/furu-po/202112/jtb_coupon/" onclick="_gaq.push(['_trackEvent','top_pc','main','JTBふるさと納税旅行クーポン']);">詳細を見る</a></p>
            </div>
        </div>

        <div class="slide">
            <img src="{{ asset('/_images/img_mv_13.jpg') }}" alt="JTBダイナミックパッケージ">
            <div class="content">
                <p><a class="btn -mv" href="https://www.jtb.co.jp/kokunai_tour/" onclick="_gaq.push(['_trackEvent','top_pc','main','JTBダイナミックパッケージ']);">詳細を見る</a></p>
            </div>
        </div>

        <div class="slide">
            <img src="{{ asset('/_images/img_mv_16.jpg') }}" alt="USJ">
            <div class="content">
                <p><a class="btn -mv" href="https://www.jtb.co.jp/usj/" onclick="_gaq.push(['_trackEvent','top_pc','main','USJ']);">詳細を見る</a></p>
            </div>
        </div>

        <div class="slide">
            <img src="{{ asset('/_images/img_mv_15.jpg') }}" alt="新幹線で旅する国内ツアー">
            <div class="content">
                <p><a class="btn -mv" href="https://www.jtb.co.jp/kokunai/dynamic/jr/" onclick="_gaq.push(['_trackEvent','top_pc','main','新幹線で旅する国内ツアー']);">詳細を見る</a></p>
            </div>
        </div>

        <div class="slide">
            <img src="{{ asset('/_images/img_mv_p_211202_5.jpg') }}" alt="日本の旬四国">
            <div class="content">
                <p><a class="btn -mv" href="https://www.jtb.co.jp/nihonnoshun/shikoku/" onclick="_gaq.push(['_trackEvent','top_pc','main','日本の旬四国']);">詳細を見る</a></p>
            </div>
        </div>

        <!--div class="slide">
            <img src="/_images/img_mv_08.jpg" alt="JTBクルーズの旅">
            <div class="content">
            <p><a class="btn -mv" href="https://www.jtb.co.jp/cruise/" onclick="_gaq.push(['_trackEvent','top_pc','main','クルーズ']);">クルーズ特集を見る</a></p>
            </div>
        </div-->
        <!-- /.js_mv_carousel --></div>

    <div class="search_area">
    <div class="inner js_search_tab">
    <ul class="search_tab_list js_tab_list">
    <li class="tab_item _dom"><a class="" href="#tab-dom">ホテル・旅館・宿</a></li>
    <li class="tab_item _kokunai"><a class="" href="#tab-kokunai">国内ツアー</a></li>
    <li class="tab_item _kaigai"><a class="" href="#tab-kaigai">海外ツアー</a></li>
    <li class="tab_item _kaigaiair"><a class="" href="#tab-kaigaiair">海外航空券</a></li>
    <!-- /.search_tab_list --></ul>

    <div class="search_tab_panel js_tab_penel">
    <div id="tab-dom" class="panel_item _dom">
    <form id="form_search_dom" class="form_search" action="kokunai_hotel" method="GET" data-title="国内宿泊検索" data-hooks="kokunai_hotel" novalidate>
    @csrf
        <script>
            var kokunai_hotel = {
                onCountChange: function (_form) {
                    // こどもDの最大人数設定
                    var MAX_PERSON1 = 8, // こどもD以外の最大人数
                        MAX_PERSON2 = 14, // 総合計最大人数
                        frm = _form,
                        vals = frm.getValue('roomassign'),
                        asns = frm.roomassign,
                        // おとな+こどもA～Cの合計は8名以下
                        ttl = vals[0][0] * 1 + vals[1][0] * 1 + vals[2][0] * 1 + vals[3][0] * 1 + vals[4][0] * 1;

                    // こどもD以外人数制御
                    document.getElementById('count_control_person').setAttribute('data-count-max', Math.min(MAX_PERSON1, MAX_PERSON2 - vals[5][0]));
                    // こどもD人数制御
                    asns[5].setAttribute('data-count-max', MAX_PERSON2 - ttl);
                    // 室数が大人人数を超えないようにする(検索結果画面に入っていない制御なのでいったん除去)
                    /*var adl = vals[0][0] * 1 + vals[1][0] * 1;
                    rom.setAttribute('data-count-max', adl);
                    if (adl * 1 < rom.value * 1) {
                        rom.value = adl;
                        rom.setAttribute('data-value', adl);
                        rom.refresh();
                    }*/
                },
                getFormData: function (_object, _form) {
                    // フォーム送信値の調整
                    var ret = _object;
                    // 表示名の追加
                    ret.stayplacedisplay = [ret.area[1]];
                    // 人数内訳編集
                    var asns = ret.roomassign[0].split(',');
                    ret.roomassign[0] =
                        (asns[0] * 1 ? 'm' + asns[0] : '') +
                        (asns[1] * 1 ? 'f' + asns[1] : '') +
                        (asns[2] * 1 ? 'a' + asns[2] : '') +
                        (asns[3] * 1 ? 'b' + asns[3] : '') +
                        (asns[4] * 1 ? 'c' + asns[4] : '') +
                        (asns[5] * 1 ? 'd' + asns[5] : '');
                    delete ret.person_d;
                    ret.room[0] = ret.room[0] === '0' ? '' : ret.room[0];
                    // 客室条件の編集
                    if (ret.roomstyle) {
                        ret.roomstyle[0] = ret.roomstyle[0].split(',').join('-');
                    }
                    // 食事条件の編集
                    if (ret.mealtype) {
                        ret.mealtype[0] = ret.mealtype[0].split(',').join('-');
                    }
                    // こだわり条件の編集
                    if (ret.kodawari) {
                        ret.kodawari[0] = ret.kodawari[0].split(',').join('-');
                    }
                    return ret;
                },
                onChangeKeyword: function (_element) {
                    // サジェストから選択できない単語だった場合
                    if (_element.value) {
                        var _hiddenElm = _element.previousElementSibling.previousElementSibling
                        if (!_element.classList.contains('-is_selected')) {
                            _element.setAttribute('data-value', _element.value);
                            _hiddenElm.setAttribute('data-value', _element.value);
                            _hiddenElm.setAttribute('value', _element.value);
                        } else {
                            _hiddenElm.removeAttribute('data-value');
                            _hiddenElm.removeAttribute('value');
                        }
                    }
                },
                onCheckRequired: function (_$element) {
                    var elm = _$element[0],
                        suggestElm = elm.nextElementSibling.nextElementSibling,
                        elmValue = elm.getAttribute('value');
                    frm = elm.form;

                    switch (elm.getAttribute('data-name') || elm.name) {
                        case 'roomperson':
                            var asns = frm.roomassign;
                            if (asns[5].getAttribute('data-value') * 1 > 0) {
                                var val =
                                    asns[0].getAttribute('data-value') * 1 +
                                    asns[1].getAttribute('data-value') * 1;
                                return val > 0;
                            } else {
                                return true;
                            }
                            break;
                    }

                    // サジェスト選択とフリーワードで分岐する
                    if (elmValue == null) {
                        elm = suggestElm;
                        return elm;
                    }

                },
/*                 onSubmit: function (_form) {

                    var frm = _form;

                    // GA
                    var ga = window._gaq;

                    var ara = frm.area;
                    // mesh_code or rrbchiku_code の判定用に用意
                    var dtyp = document.getElementById('search_dom_place').getAttribute('data-datatype');
                    // 半角英数字で存在しないサジェストに出ない文字列が入力された場合の判定用（-is_selectedが存在するか否か）
                    var cls = document.getElementById('search_dom_place').getAttribute('class');


                    if (dtyp == 'custom_control_shisetsu' || dtyp == 'stayplace_master' && /^\d{4}\w{2}\d/.test(ara.value)) {
                        // ホテルの場合は hotel 引数
                        ara.name = 'hotel';
                    } else if (/^\(\d{3}\.\d+,\d{2}\.\d/.test(ara.value)) {
                        // 経緯度の場合は landmark 引数
                        ara.name = 'landmark';
                    } else if (cls.indexOf('-is_selected') != -1 && /^\w\D+/.test(ara.value)) {
                        // 文字列の場合は feature 引数（サジェストから選択した場合）
                        frm.action += 'feature/' + ara.value;
                        ara.value = '';
                    } else if (/[^\x01-\x7E]/.test(ara.value) || /^\w\D+/.test(ara.value)) {
                        for (let i = 0; i < window.checkitems.length; i++) {
                            // 文字列がサジェストに表示されるが、サジェストから選択しなかった場合
                            if (frm.planinfokeyword.value == window.checkitems[i].label && /^\w\D+/.test(window.checkitems[i].area)) {
                                // サジェストフラグが立っていない時
                                frm.planinfokeyword.value = '';
                                frm.action += 'feature/' + window.checkitems[i].area;
                            } else if (frm.planinfokeyword.value == window.checkitems[i].label && window.checkitems[i].data_type == 'stayplace_master') {
                                // サジェストフラグが立っていない且つ施設が一意の時
                                ara.name = 'hotel';
                                frm.planinfokeyword.value = '';
                                ara.value = window.checkitems[i].area;
                            } else if (frm.planinfokeyword.value == window.checkitems[i].label && /^\d+/.test(window.checkitems[i].area)) {
                                // サジェストフラグが立っていない且つエリアコードの時
                                ara.name = '';
                                frm.planinfokeyword.value = '';
                                frm.action += window.checkitems[i].area + '/';
                            } else if (frm.planinfokeyword.value == window.checkitems[i].label && room/^\(\d{3}\.\d+,\d{2}\.\d/.test(window.checkitems[i].area)) {
                                // サジェストフラグが立っていない且つエリアがランドマークの時
                                ara.name = 'landmark';
                                frm.planinfokeyword.value = '';
                                ara.value = window.checkitems[i].area;
                            } else {
                                // 文字列の時はキーワード検索（サジェストから選択できなかった場合）
                                ara.value = '';
                                ara.name = '';
                            }
                        }
                    } else if (ara.value) {
                        // エリア引数は URL に含める
                        frm.action += ara.value + '/';
                        ara.value = '';
                    }
                }
 */
            };
        </script>
        <div class="items -required">
            <div class="items_inner">
                <h2 class="panel_hdg">国内旅館ホテル検索</h2>

                <div class="form_item icon -pin -is_required">
                    <input type="hidden" id="search_dom_keyword" name="planinfokeyword">
                    <label class="label_txt" for="search_dom_place">宿泊地</label>
                    <input id="search_dom_place" class="_w_full js_autocomplete" type="text" name="area"
                        placeholder="目的地、ホテル名、空港・駅(周辺の宿を検索)、キーワード" onchange="javascript:kokunai_hotel.onChangeKeyword(this)">
                    <p class="error_message_required">必須項目です。</p>
                    <!-- /.form_item -->
                </div>
                <div class="form_group">
                    <div class="form_group_item -connect">
                        <div class="form_item icon -calender">
                            <label class="label_txt" for="search_dom_checkin_day">宿泊日 + 泊数</label>
                            <input id="search_dom_checkin_day" class="_w_full js_datepicker" type="text" name="godate" placeholder="年/月/日" readonly data-min="0" data-max="184" data-datepicker-linkage-from="search_dom_checkin">
                            <!-- /.form_item -->
                        </div>
                        <!-- /.form_group_item -->
                    </div>

                    <div class="form_group_item">
                        <div class="form_item_select icon -calender">
                            <select id="search_dom_stay" class="js_select _w_ss js_date_connect" title="泊数" data-datepicker-linkage-to="search_dom_checkin" name="staynight" data-placeholder="泊" disabled>
                                <option value="" selected>泊数</option>
                                <option value="1">1泊</option>
                                <option value="2">2泊</option>
                                <option value="3">3泊</option>
                                <option value="4">4泊</option>
                                <option value="5">5泊</option>
                                <option value="6">6泊</option>
                            </select>
                            <!-- /.form_item_select -->
                        </div>
                        <!-- /.form_group_item -->
                    </div>

                    <div class="form_group_item">
                        <div class="form_item icon -human -is_validate">
                            <label class="label_txt" for="search_dom_persons">人数・室数</label>
                            <div class="form_item_drop_select js_drop_select">
                                <input id="search_dom_persons" class="_w_full js_count_set" type="text" data-count-set="#{${person}+${person_d}}名 / ${room}室" placeholder="指定なし" data-name="roomperson">
                                <p class="error_message_child_d">おとな人数を指定してください</p>
                                <!-- /.form_item_drop_select -->
                            </div>

                            <div class="js_drop_item">
                                <div id="count_control_person" data-count-get="${person}" data-count-max="8">
                                    <div class="form_item -flex -counter">
                                        <label class="label_txt" for="search_dom_person_1">おとな男性</label>
                                        <button class="btn -count_down" type="button" data-count-type="decrement"><span>マイナス</span></button>
                                        <input id="search_dom_person_1" class="_w_num" data-count="${person}" data-count-max="8" data-count-min="0" data-value="0" value="0" type="text" pattern="^¥d+$" maxlength="2" name="roomassign">
                                        <button class="btn -count_up" type="button" data-count-type="increment"><span>プラス</span></button>
                                        <!-- /.form_item -->
                                    </div>

                                    <div class="form_item -flex -counter">
                                        <label class="label_txt" for="search_dom_person_2">おとな女性</label>
                                        <button class="btn -count_down" type="button" data-count-type="decrement"><span>マイナス</span></button>
                                        <input id="search_dom_person_2" class="_w_num" data-count="${person}" data-count-max="8" data-count-min="0" data-value="0" value="0" type="text" pattern="^¥d+$" maxlength="2" name="roomassign">
                                        <button class="btn -count_up" type="button" data-count-type="increment"><span>プラス</span></button>
                                        <!-- /.form_item -->
                                    </div>

                                    <div class="form_item -flex -counter">
                                        <label class="label_txt" for="search_dom_person_3">こどもA<br><span
                                                class="sub">（寝具、大人に準じた食事）</span></label>
                                        <button class="btn -count_down" type="button" data-count-type="decrement"><span>マイナス</span></button>
                                        <input id="search_dom_person_3" class="_w_num" data-count="${person}" data-count-max="7" data-count-min="0" data-value="0" value="0" type="text" pattern="^¥d+$" maxlength="2" name="roomassign">
                                        <button class="btn -count_up" type="button" data-count-type="increment"><span>プラス</span></button>
                                        <!-- /.form_item -->
                                    </div>

                                    <div class="form_item -flex -counter">
                                        <label class="label_txt" for="search_dom_person_4">こどもB<br><span
                                                class="sub">（寝具、お子様用の食事）</span></label>
                                        <button class="btn -count_down" type="button" data-count-type="decrement"><span>マイナス</span></button>
                                        <input id="search_dom_person_4" class="_w_num" data-count="${person}" data-count-max="7" data-count-min="0" data-value="0" value="0" type="text" pattern="^¥d+$" maxlength="2" name="roomassign">
                                        <button class="btn -count_up" type="button" data-count-type="increment"><span>プラス</span></button>
                                        <!-- /.form_item -->
                                    </div>

                                    <div class="form_item -flex -counter -not_last">
                                        <label class="label_txt" for="search_dom_person_5">こどもC<br><span class="sub">（寝具のみ）</span></label>
                                        <button class="btn -count_down" type="button" data-count-type="decrement"><span>マイナス</span></button>
                                        <input id="search_dom_person_5" class="_w_num" data-count="${person}" data-count-max="7" data-count-min="0" data-value="0" value="0" type="text" pattern="^¥d+$" maxlength="2"
                                            name="roomassign">
                                        <button class="btn -count_up" type="button" data-count-type="increment"><span>プラス</span></button>
                                        <!-- /.form_item -->
                                    </div>

                                    <div class="form_item -flex -counter" data-count-get="${person_d}">
                                        <label class="label_txt" for="search_dom_person_6">こどもD<br><span class="sub">（寝具・食事なし）</span></label>
                                        <button class="btn -count_down" type="button" data-count-type="decrement"><span>マイナス</span></button>
                                        <input id="search_dom_person_6" class="_w_num" data-count="${person_d}" data-count-max="14" data-count-min="0" data-value="0" value="0" type="text" pattern="^¥d+$" maxlength="2" name="roomassign">
                                        <button class="btn -count_up" type="button" data-count-type="increment"><span>プラス</span></button>
                                        <!-- /.form_item -->
                                    </div>
                                    <!-- /.js_count_up -->
                                </div>

                                <p>
                                    一部屋あたりのご利用人数を指定してください。<br>
                                    お子様を含むご予約については、<a href="https://help.jtb.co.jp/366/1520/1521/1609/f4905.html"
                                        target="_blank">こちら</a>をご確認ください。
                                </p>

                                <div data-count-get="${room}">
                                    <div class="form_item -flex -separator -is_required">
                                        <label class="label_txt" for="search_dom_room">室数</label>
                                        <button class="btn -count_down" type="button" data-count-type="decrement"><span>マイナス</span></button>
                                        <input id="search_dom_room" value="0" class="_w_num" type="text" data-count="${room}" data-count-max="7" data-count-min="0" name="room">
                                        <button class="btn -count_up" type="button" data-count-type="increment"><span>プラス</span></button>
                                    </div>
                                    <!-- /.js_count_up -->
                                </div>

                                <button class="btn -select js_count_set_btn" type="button">選択</button>
                                <!-- /.select_drop_down -->
                            </div>
                            <!-- /.form_item -->
                        </div>
                        <!-- /.form_group_item -->
                    </div>
                    <!-- /.form_group -->
                </div>
                <ul class="btn_list">
                    <li><button type="submit" class="btn -search">検索する</button></li>
                    <li><button type="button" class="btn -add js_panel_open"><span>条件を追加する</span></button></li>
                    <!-- /.btn_list -->
                </ul>
                <!-- /.items_inner -->
            </div>
            <!-- /.items -->
        </div>

        <div class="items -optional">
            <div class="items_inner">

                <p>部屋条件</p>
                <div class="form_item_checkbox" data-col="3">
                    <label for="search_dom_room_1">シングル<input type="checkbox" value="SB" name="roomstyle" id="search_dom_room_1"></label>
                    <label for="search_dom_room_2">ツイン<input type="checkbox" value="TB" name="roomstyle" id="search_dom_room_2"></label>
                    <label for="search_dom_room_3">ダブル<input type="checkbox" value="DB" name="roomstyle" id="search_dom_room_3"></label>
                    <label for="search_dom_room_4">トリプル<input type="checkbox" value="TR" name="roomstyle" id="search_dom_room_4"></label>
                    <label for="search_dom_room_5">和室<input type="checkbox" value="JP" name="roomstyle" id="search_dom_room_5"></label>
                    <label for="search_dom_room_6">和洋室<input type="checkbox" value="JW" name="roomstyle" id="search_dom_room_6"></label>
                    <label for="search_dom_room_7">その他客室<input type="checkbox" value="OT" name="roomstyle" id="search_dom_room_7"></label>
                    <!-- /..form_item_checkbox -->
                </div>

                <p>食事条件</p>
                <div class="form_item_checkbox">
                    <label for="search_dom_food_1">1泊2食付<input type="checkbox" name="mealtype" value="1" id="search_dom_food_1"></label>
                    <label for="search_dom_food_2">1泊朝食付<input type="checkbox" name="mealtype" value="2" id="search_dom_food_2"></label>
                    <label for="search_dom_food_3">1泊夕食付<input type="checkbox" name="mealtype" value="3" id="search_dom_food_3"></label>
                    <label for="search_dom_food_4">1泊食事無<input type="checkbox" name="mealtype" value="4" id="search_dom_food_4"></label>
                    <!-- /..form_item_checkbox -->
                </div>

                <p>こだわり条件</p>

                <div class="form_item_checkbox">
                    <label for="search_dom_particular_1">露天風呂<input type="checkbox" name="kodawari" value="syb11" id="search_dom_particular_1"></label>
                    <label for="search_dom_particular_2">大浴場<input type="checkbox" name="kodawari" value="sbb1" id="search_dom_particular_2"></label>
                    <label for="search_dom_particular_3">禁煙ルーム<input type="checkbox" name="kodawari" value="rmb38" id="search_dom_particular_3"></label>
                    <label for="search_dom_particular_4">ネット可能<input type="checkbox" name="kodawari" value="sob9" id="search_dom_particular_4"></label>
                    <label for="search_dom_particular_5">送迎あり<input type="checkbox" name="kodawari" value="scb25" id="search_dom_particular_5"></label>
                    <label for="search_dom_particular_6">現地支払い可能<input type="checkbox" name="kodawari" value="rab1" id="search_dom_particular_6"></label>
                    <!-- /..form_item_checkbox -->
                </div>

                <button type="button" class="btn -remove js_panel_close"><span>条件を閉じる</span></button>
                <!-- /.items_inner -->
            </div>
            <!-- /.items -->
        </div>
        <!-- /.form_search -->
    </form>
    <!-- /.panel_item --></div>

    <div id="tab-kokunai" class="panel_item _kokunai">
    <link rel="stylesheet" type="text/css" href="/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="https://www.jtb.co.jp/kokunai_jr/static/css/1.0/kkrs-gadget.css">
    <link rel="stylesheet" type="text/css" href="https://www.jtb.co.jp/kokunai_air/static/css/1.0/kkrs-gadget.css">

    <div id="form_search_kokunai">
        <div class="items -required">
            <div class="items_inner">
                <h2 class="panel_hdg">国内ツアー検索</h2>
                <div class="tab_search js_tab">
                    <ul class="tab_list js_tab_list">
                        <li><a href="#tab_kokunaidp_jr"><span class="icon -train_hotel" aria-hidden="true"></span>JR + 宿・ホテル</a></li>
                        <li><a href="#tab_kokunaidp_air"><span class="icon -plane_hotel" aria-hidden="true"></span>航空 + 宿・ホテル</a></li>
                    </ul>

                    <div class="tab_panel js_tab_item">
                        <div id="tab_kokunaidp_jr" class="tab_item">
                            <div class="kkrs-top-mv-contents">
                                <div class="kkrs-top-mv-body">
                                    <aside id="app_jr" class="kkrs-top-search-section"> </aside>
                                </div>
                            </div>
                        </div>
                        <div id="tab_kokunaidp_air" class="tab_item">
                            <div class="kkrs-top-mv-contents">
                                <div class="kkrs-top-mv-body">
                                    <aside id="app" class="kkrs-top-search-section"> </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://www.jtb.co.jp/kokunai_jr/static/gadget/search_jr.js"></script>
    <script src="https://www.jtb.co.jp/kokunai_air/static/gadget/search_air.js"></script>
    <script>
        window.gadgetConfig = {
            deparea: "",  // 出発地
            area: "2701",  // 目的地エリアコード
            airport: "",  // 発着空港
            airportkeyword: "",  // 出発地キーワード

            area: "",  // 目的地エリアコード
            suggestkeyword: "",  // 目的地キーワード

            // stayplacedisplay: "道頓堀",  // 目的地表示名 (ランドマーク, 施設指定の場合)
            // hotelid: "6491042",  // 施設ID (施設指定の場合)
            // landmark: "(141.3563232,43.06112042)",  // ランドマーク座標 (ランドマーク指定の場合)

            godate: "",  // 出発日
            backdate: "",  // 帰着日
            checkindate: "",  // チェックイン日
            staynight: "1",  // 泊数
            flightassign: "m2a0c0d0",  // 人数
            trainassign: "m2a0c0d0",  // 人数
            room: "1",  // 部屋数
            planinfokeyword: "",  // キーワード
            includecarrent: ""  // レンタカーもあわせて検索する
        };
    </script>

    <!-- /.panel_item --></div>

    <div id="tab-kaigai" class="panel_item _kaigai">
    <form id="form_search_kaigai" class="form_search" action="https://ovspkg.jtb.co.jp/pkg/toursearch/search_result.aspx" accept-charset="shift_jis"
        data-title="海外ツアー検索" data-hooks="kaigai_tour">
    <script>
    var kaigai_tour = {
        onChange: function (_$form) {
            var frm = _$form[0],
                dsp = document.getElementById('search_kaigai_arrival_display'),
                // hidden
                araH = frm.destareacd,
                cntH = frm.destcountrycd,
                ctyH = frm.destcitycd;
            //console.log(['kaigaitour_onchange', dsp.value, ctyH.value, cntH.value, araH.value]);
            if (!dsp.value) {
                dsp.value = ctyH.value || cntH.value || araH.value;
            }
        },
        getFormData: function (_object) {
            var ret = _object;
            // 日付の分離(年月と日)
            var mch = /^(\d{4})(\d{2})(\d{2})$/.exec(ret.deptdate[0]);
            if (mch && mch[3]) {
                ret.deptyearmon = [mch[1] + mch[2], mch[1] + mch[2]];
                ret.deptdate = [mch[3], mch[3]];
            }
            // 都市データの分離
            var mch = /^(\w{3}) (\w{2}) (\w{3})$/.exec(ret.destcitycd[0]);
            if (mch && mch[3]) {
                ret.destareacd = [mch[1], mch[1]];
                ret.destcountrycd = [mch[2], mch[2]];
                ret.destcitycd = [mch[3], ret.destcitycd[1]];
            }
            return ret;
        },
        onChangePulldown: function (_element, _btnId) {
            // 選択肢の内容を選択ボタンの裏設定値に反映
            var elm = _element,
                btn = document.getElementById(_btnId),
                opt = elm[elm.selectedIndex];
            if (opt) {
                btn.setAttribute('data-label', opt.textContent || opt.innerText);
                btn.setAttribute('data-value', opt.value)
            }
        },
        onChangeKeyword: function (_element) {
            _element.setAttribute('data-value', _element.value);
        },
        onCheckRequired: function (_$element) {
            // 行き先の必須チェック
            var frm = _$element[0].form,
                ara = frm.destareacd;
            return !!ara.getAttribute('data-value');
        },
        onSelectAutocomplete: function (_$form) {
            var	$dsp = _$form.find("#search_kaigai_arrival_display"),
                $ara = _$form.find("[name=destareacd]"),
                $cnt = _$form.find("[name=destcountrycd]"),
                $cty = _$form.find("[name=destcitycd]");
            var	vals = ($dsp.attr('data-value') || '').split(/[ :]/);
            $ara.attr('data-value', vals[0] || '');
            $cnt.attr('data-value', vals[1] || '');
            $cty.attr('data-value', vals[2] || '');
            $ara[0].value = $cnt[0].value = $cty[0].value = $dsp[0].value;
            // 表示名の保存
            $dsp.attr('data-label', $cty.val() || $cnt.val() || $ara.val());
        },
        onClickArrivalButton: function (_element) {
            var elm = _element,
                frm = elm.form,
                dsp = document.getElementById('search_kaigai_arrival_display'),
                // hidden
                araH = frm.destareacd,
                cntH = frm.destcountrycd,
                ctyH = frm.destcitycd,
                // select
                araS = document.getElementById('search_kaigai_arrival_panel_area'),
                cntS = document.getElementById('search_kaigai_arrival_panel_country'),
                ctyS = document.getElementById('search_kaigai_arrival_panel_city'),
                // option
                araO = araS[araS.selectedIndex],
                cntO = cntS[cntS.selectedIndex],
                ctyO = ctyS[ctyS.selectedIndex],
                // value(プロパティだと空欄が取得できない)
                araV = araO.getAttribute('value'),
                cntV = cntO.getAttribute('value'),
                ctyV = ctyO.getAttribute('value'),
                // label
                araL = araO.textContent || araO.innerText,
                cntL = cntO.textContent || cntO.innerText,
                ctyL = ctyO.textContent || ctyO.innerText;
            araH.setAttribute('data-value', araV);
            cntH.setAttribute('data-value', cntV);
            ctyH.setAttribute('data-value', ctyV);
            araH.value = araV && araL;
            cntH.value = cntV && cntL;
            ctyH.value = ctyV && ctyL;
            // dislpay
            dsp.value = ctyH.value || cntH.value || araH.value;
        },
        onSubmit: function (_form) {
            var frm = _form;

            // GA
            var ga = window._gaq;
        }
    };
    </script>
    <div class="items -required">
    <div class="items_inner">
    <h2 class="panel_hdg">海外ツアー検索</h2>

    <div class="form_item_select icon -take_off -is_required">
    <label class="label_txt" for="search_kaigai_departure">出発地</label>
    <select id="search_kaigai_departure" class="js_select _w_full js_datacontrol" name="deptplacecd" data-placeholder="出発地"
        data-control-source="/_common/panel/kaigai_tour/json/airports.json" data-group="kaigaitour_airports">
    </select>
    <p class="error_message_required">必須項目です。</p>
    <!-- /.form_item_select --></div>

    <input id="search_kaigai_arrival_area" type="hidden" name="destareacd">
    <input id="search_kaigai_arrival_country" type="hidden" name="destcountrycd">
    <input id="search_kaigai_arrival_city" type="hidden" name="destcitycd">
    <div class="form_item icon -flying -is_required">
    <label class="label_txt" for="search_kaigai_arrival_city">目的地</label>
    <input id="search_kaigai_arrival_display" class="_w_full js_autocomplete js_suggest" type="text" placeholder="国・都市を指定"
        data-autocomplete="/_common/panel/kaigai_tour/json/suggestion_destinations.json" data-name="area">
    <p class="error_message_required">必須項目です。</p>
    <div class="js_drop_item -wide">
    <p class="lead">下記の「人気都市から選ぶ」か、「全ての都市から選ぶ」からお選びください</p>

    <div class="tab_search js_tab">
    <ul class="tab_list js_tab_list">
    <li><a href="#tab_kaigai_arrival_1">人気都市から選ぶ</a></li>
    <li><a href="#tab_kaigai_arrival_2">全ての都市から選ぶ</a></li>
    <!-- /.tab_list --></ul>

    <div class="tab_panel js_tab_item">
    <div id="tab_kaigai_arrival_1" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" type="button" value="HWI H1 HNL"
        data-applyform="search_kaigai_arrival_area search_kaigai_arrival_country search_kaigai_arrival_city">ホノルル</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" type="button" value="GUM GU GUM"
        data-applyform="search_kaigai_arrival_area search_kaigai_arrival_country search_kaigai_arrival_city">グアム</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" type="button" value="ASI KR SEL"
        data-applyform="search_kaigai_arrival_area search_kaigai_arrival_country search_kaigai_arrival_city">ソウル</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" type="button" value="ASI TW TPE"
        data-applyform="search_kaigai_arrival_area search_kaigai_arrival_country search_kaigai_arrival_city">台北</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" type="button" value="ASI HK HKG"
        data-applyform="search_kaigai_arrival_area search_kaigai_arrival_country search_kaigai_arrival_city">香港</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" type="button" value="ASI TH BKK"
        data-applyform="search_kaigai_arrival_area search_kaigai_arrival_country search_kaigai_arrival_city">バンコク</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" type="button" value="ASI SG SIN"
        data-applyform="search_kaigai_arrival_area search_kaigai_arrival_country search_kaigai_arrival_city">シンガポール</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" type="button" value="OCE AU CNS"
        data-applyform="search_kaigai_arrival_area search_kaigai_arrival_country search_kaigai_arrival_city">ケアンズ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" type="button" value="AME US LAX"
        data-applyform="search_kaigai_arrival_area search_kaigai_arrival_country search_kaigai_arrival_city">ロサンゼルス</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" type="button" value="AME US NYC"
        data-applyform="search_kaigai_arrival_area search_kaigai_arrival_country search_kaigai_arrival_city">ニューヨーク</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" type="button" value="EUR GB LON"
        data-applyform="search_kaigai_arrival_area search_kaigai_arrival_country search_kaigai_arrival_city">ロンドン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" type="button" value="EUR FR PAR"
        data-applyform="search_kaigai_arrival_area search_kaigai_arrival_country search_kaigai_arrival_city">パリ</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.tab_item --></div>

    <div id="tab_kaigai_arrival_2" class="tab_item">
    <div class="form_group">
    <div class="form_group_item">
    <div class="form_item_select">
    <select class="js_select _w_m js_datacontrol" id="search_kaigai_arrival_panel_area"
        data-name="destarea" data-group="search_kaigai_arrival" data-placeholder="エリアを指定">
    <option value="">エリアを指定</option>
    <option value="HWI">ハワイ</option>
    <option value="GUM">グアム・サイパン</option>
    <option value="ASI">アジア</option>
    <option value="AME">アメリカ・カナダ・メキシコ</option>
    <option value="EUR">ヨーロッパ・アフリカ</option>
    <option value="OCE">オセアニア</option>
    <option value="CHI">中国</option>
    </select>
    <!-- /.form_item_select --></div>
    <!-- /.form_group_item --></div>

    <div class="form_group_item">
    <div class="form_item_select">
    <select class="js_select _w_m js_datacontrol" id="search_kaigai_arrival_panel_country"
        data-control-source="/_common/panel/kaigai_tour/json/{destarea}.json"
        data-name="destcountry" data-group="search_kaigai_arrival" data-placeholder="国(地域)を指定">
    <option value="">国(地域)を指定</option>
    </select>
    <!-- /.form_item_select --></div>
    <!-- /.form_group_item --></div>

    <div class="form_group_item">
    <div class="form_item_select">
    <select class="js_select _w_m js_datacontrol" id="search_kaigai_arrival_panel_city"
        data-control-source="/_common/panel/kaigai_tour/json/{destcountry}.json"
        data-name="destcity" data-group="search_kaigai_arrival" data-placeholder="都市を指定">
    <option value="">都市を指定</option>
    </select>
    <!-- /.form_item_select --></div>
    <!-- /.form_group_item --></div>
    <!-- /.form_group --></div>

    <button class="btn -select js_suggest_btn" type="button" onclick="javascript:kaigai_tour.onClickArrivalButton(this)">選択</button>

    <!-- /.tab_item --></div>
    <!-- /.tab_panel--></div>

    <button class="js_drop_close_btn btn -close" type="button"><span>閉じる</span></button>
    <!-- /.tab_search--></div>
    <!-- /.js_drop_item --></div>
    <!-- /.form_item --></div>

    <div class="form_item icon -calender">
    <label class="label_txt" for="search_kaigai_date_departure">出発日</label>
    <input id="search_kaigai_date_departure" class="_w_s js_datepicker" type="text" placeholder="(任意)年/月/日" name="deptdate" readonly data-max="365">
    <p class="error_message_required">必須項目です。</p>
    <!-- /.form_item --></div>

    <ul class="btn_list">
    <li><button type="submit" class="btn -search">検索する</button></li>
    <li><button type="button" class="btn -add js_panel_open"><span>条件を追加する</span></button></li>
    <!-- /.btn_list --></ul>
    <!-- /.items_inner --></div>
    <!-- /.items --></div>

    <div class="items -optional">
    <div class="items_inner">

    <div class="form_group">
    <div class="form_group_item">
    <div class="form_item_select">
    <label class="label_txt" for="search_kaigai_days_1">日数</label>

    <select class="_w_full js_select" id="search_kaigai_days_1" name="dayfrom">
    <option value="">指定しない</option>
    <option value="2">2日</option>
    <option value="3">3日</option>
    <option value="4">4日</option>
    <option value="5">5日</option>
    <option value="6">6日</option>
    <option value="7">7日</option>
    <option value="8">8日</option>
    <option value="9">9日</option>
    </select>
    <!-- /.form_item_select --></div>
    <!-- /.form_group_item --></div>

    <div class="form_group_item -unit">
    <span class="unit">～</span>
    <!-- /.form_group_item --></div>

    <div class="form_group_item">
    <div class="form_item_select">
    <select class="_w_full js_select" id="search_kaigai_days_2" name="dayto">
    <option value="">指定しない</option>
    <option value="2">2日</option>
    <option value="3">3日</option>
    <option value="4">4日</option>
    <option value="5">5日</option>
    <option value="6">6日</option>
    <option value="7">7日</option>
    <option value="8">8日</option>
    <option value="9">9日</option>
    </select>
    <!-- /.form_item_select --></div>
    <!-- /.form_group_item --></div>
    <!-- /.form_group --></div>

    <div class="form_group">
    <div class="form_group_item">
    <div class="form_item_select">
    <label class="label_txt" for="search_kaigai_budget_1">予算</label>

    <select class="_w_full js_select" id="search_kaigai_budget_1" name="budgetfrom">
    <option value="">指定しない</option>
    <option value="1">10,000円</option>
    <option value="3">30,000円</option>
    <option value="5">50,000円</option>
    <option value="7">70,000円</option>
    <option value="10">100,000円</option>
    <option value="15">150,000円</option>
    <option value="20">200,000円</option>
    <option value="25">250,000円</option>
    <option value="30">300,000円</option>
    <option value="35">350,000円</option>
    </select>
    <!-- /.form_item_select --></div>
    <!-- /.form_group_item --></div>

    <div class="form_group_item -unit">
    <span class="unit">～</span>
    <!-- /.form_group_item --></div>

    <div class="form_group_item">
    <div class="form_item_select">

    <select class="_w_full js_select" id="search_kaigai_budget_2" name="budgetto">
    <option value="">指定しない</option>
    <option value="1">10,000円</option>
    <option value="3">30,000円</option>
    <option value="5">50,000円</option>
    <option value="7">70,000円</option>
    <option value="10">100,000円</option>
    <option value="15">150,000円</option>
    <option value="20">200,000円</option>
    <option value="25">250,000円</option>
    <option value="30">300,000円</option>
    <option value="35">350,000円</option>
    </select>
    <!-- /.form_item_select --></div>
    <!-- /.form_group_item --></div>
    <!-- /.form_group --></div>

    <div class="form_item">
    <input type="hidden" name="freeword" id="kaigai_keyword">
    <label>キーワード
    <input class="_w_full js_applyform" type="text" placeholder="目的・観光地・食材など"
        onchange="javascript:kaigai_tour.onChangeKeyword(this)"
        data-applyform="kaigai_keyword">
    </label>
    <!-- /.form_item --></div>

    <button type="button" class="btn -remove js_panel_close"><span>条件を閉じる</span></button>
    <!-- /.items_inner --></div>
    <!-- /.items --></div>
    <!-- /.form_search --></form>
    <!-- /.panel_item --></div>

    <div id="tab-kaigaiair" class="panel_item _kaigaiair">
    <form id="form_search_kaigaiair" class="form_search" method="post" novalidate
        action="/kaigai_fit/fr/DFR01AIR01V01_GetAirUrl.do?cm=getAirUrl"
        data-title="海外航空券検索" data-hooks="kaigai_air"
        data-cookie="ovsair_formValue" data-cookie-domain=".jtb.co.jp" data-cookie-expires="+1">
    <script>
    var kaigai_air = {
        onCountChange: function (_form) {
            var frm = _form;
            // GA
            var ga = window._gaq;

            var MAX_COUNT = 9;
            var adl = _form.adl_num.value * 1;
            var chd = _form.chd_num.value * 1;
            var inw = _form.inf_withseat_num.value * 1;
            var inf = _form.inf_noseat_num.value * 1;
            // 子供収容人数
            var cap = Math.min(adl * 2, MAX_COUNT - adl);
            // 値制限
            frm.adl_num.setAttribute('data-count-min', Math.max(1, chd / 2));
            frm.adl_num.setAttribute('data-count-max', MAX_COUNT - chd - inf - inw);
            frm.chd_num.setAttribute('data-count-max', Math.max(0, cap - inf - inw));
            frm.inf_withseat_num.setAttribute('data-count-max', Math.max(0, cap - chd - inf));
            frm.inf_noseat_num.setAttribute('data-count-max', Math.max(0, Math.min(cap - chd - inw, adl)));
        },
        getFormData: function (_object) {
            var ret = _object;
            // 往路発地->復路着地/往路着地->復路発地格納
            ret.to1 = ret.from0;
            ret.from1 = ret.to0;
            return ret;
        },
        onSubmit: function (_form) {
            var frm = _form;
            var ret = [
                (function getGAAction() {
                    var ret = [
                        'sec1:' + [frm.from0.value, frm.to0.value].join('-'),
                        'sec2:' + [frm.from1.value, frm.to1.value].join('-')
                    ];
                    ret.unshift('section_num:' + ret.length);
                    return ret.join('_');
                })(),
                (function getGALabel() {
                    var d0 = frm.date0.value.replace(/^(\d{4})(\d{2})(\d{2})$/, '$1/$2/$3');
                    var d1 = frm.date1.value.replace(/^(\d{4})(\d{2})(\d{2})$/, '$1/$2/$3');
                    var g = {
                        'go_dep_date:': d0,
                        'return_dep_date:': d1,
                        'date1:': d0,
                        'date2:': d1,
                        'num:':
                            (frm.adl_num.value * 1 || 0) +
                            (frm.chd_num.value * 1 || 0) +
                            (frm.inf_noseat_num.value * 1 || 0) +
                            (frm.inf_withseat_num.value * 1 || 0),
                        'adt:': frm.adl_num.value,
                        'chd:': frm.chd_num.value,
                        'inf:':
                            (frm.inf_noseat_num.value * 1 || 0) +
                            (frm.inf_withseat_num.value * 1 || 0),
                        'num_var:': [frm.adl_num.value, frm.chd_num.value, frm.inf_withseat_num.value, frm.inf_noseat_num.value].join('-'),
                        'class:': frm['class'].value,
                        'direct:': (frm.direct.value * 1) ? '1' : 'none',
                        'alliance:': 'none',
                        'carrier:': 'none'
                    };
                    var a = [];
                    for (var i in g) {
                        if (g[i] != undefined) {
                            a.push(i + g[i]);
                        }
                    }
                    return a.join('_');
                })()
            ];
        }
    };
    </script>
    <div class="items -required">
    <div class="items_inner">
    <h2 class="panel_hdg">海外航空券検索</h2>

    <div class="form_item icon -take_off -is_required">
    <label class="label_txt" for="search_kaigaiair_departure">日本出発地</label>
    <input id="search_kaigaiair_departure" name="from0" class="_w_full js_autocomplete js_suggest" type="text" placeholder="日本出発地"
        data-autocomplete="/_common/panel/kaigaiair/json/suggestion_airports.json" data-applyform="search_kaigaiair_arrival">
    <p class="error_message_required">必須項目です。</p>
    <div class="js_drop_item -wide">
    <p class="lead">都市、空港を入力するか、下記の人気都市（海外）からお選びください</p>

    <div class="tab_search js_tab">
    <ul class="tab_list js_tab_list">
    <li><a href="#tab_kaigaiair_departure_1">主要空港</a></li>
    <li><a href="#tab_kaigaiair_departure_2">北海道</a></li>
    <li><a href="#tab_kaigaiair_departure_3">東北</a></li>
    <li><a href="#tab_kaigaiair_departure_4">関東</a></li>
    <li><a href="#tab_kaigaiair_departure_5">中部</a></li>
    <li><a href="#tab_kaigaiair_departure_6">近畿</a></li>
    <li><a href="#tab_kaigaiair_departure_7">中国</a></li>
    <li><a href="#tab_kaigaiair_departure_8">四国</a></li>
    <li><a href="#tab_kaigaiair_departure_9">九州</a></li>
    <li><a href="#tab_kaigaiair_departure_10">沖縄</a></li>
    <!-- /.tab_list --></ul>

    <div class="tab_panel js_tab_item">
    <div id="tab_kaigaiair_departure_1" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="TYO" type="button">東京(羽田+成田)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="HND" type="button">東京(羽田)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="NRT" type="button">東京(成田)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="OSA" type="button">大阪(関空+伊丹)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="CTS" type="button">札幌(新千歳)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="NGO" type="button">名古屋(セントレア)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="FUK" type="button">福岡</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_departure_2" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="CTS" type="button">札幌(新千歳)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="RIS" type="button">利尻</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="WKJ" type="button">稚内</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="MBE" type="button">オホーツク紋別</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="MMB" type="button">女満別</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="AKJ" type="button">旭川</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="SHB" type="button">根室中標津</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="KUH" type="button">釧路</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="OBO" type="button">とかち帯広</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="HKD" type="button">函館</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_departure_3" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="AOJ" type="button">青森</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="MSJ" type="button">三沢</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="HNA" type="button">花巻</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="ONJ" type="button">大館能代</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="AXT" type="button">秋田</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="SYO" type="button">庄内</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="GAJ" type="button">山形</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="SDJ" type="button">仙台</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="FKS" type="button">福島</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_departure_4" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="IBR" type="button">茨城</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="OIM" type="button">大島</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="HAC" type="button">八丈島</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="MYE" type="button">三宅島</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="MMJ" type="button">信州まつもと</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="KIJ" type="button">新潟</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="HND" type="button">東京(羽田)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="NRT" type="button">東京(成田)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="TY1" type="button">東京(羽田+成田)</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_departure_5" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="TOY" type="button">富山</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="KMQ" type="button">小松</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="NTQ" type="button">能登</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="FSZ" type="button">富士山静岡</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="NKM" type="button">名古屋(小牧)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="NGO" type="button">名古屋(セントレア)</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_departure_6" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="ITM" type="button">伊丹</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="KIX" type="button">関空</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="OSA" type="button">大阪(関空+伊丹)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="UKB" type="button">神戸</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="SHM" type="button">南紀白浜</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_departure_7" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="OKJ" type="button">岡山</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="HIJ" type="button">広島</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="IWK" type="button">岩国錦帯橋</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="UBJ" type="button">山口宇部</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="TTJ" type="button">鳥取</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="YGJ" type="button">米子</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="IZO" type="button">出雲</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="OKI" type="button">隠岐</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="IWJ" type="button">石見</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_departure_8" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="TKS" type="button">徳島</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="TAK" type="button">高松</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="MYJ" type="button">松山</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="KCZ" type="button">高知</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_departure_9" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="FUK" type="button">福岡</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="KKJ" type="button">北九州</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="HSG" type="button">有明佐賀</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="IKI" type="button">壱岐</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="TSJ" type="button">対馬</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="NGS" type="button">長崎</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="FUJ" type="button">五島福江</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="OIT" type="button">大分</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="KMJ" type="button">熊本</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="KMI" type="button">宮崎</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="KOJ" type="button">鹿児島</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="ASJ" type="button">奄美</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="OKE" type="button">沖永良部</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="KKX" type="button">喜界</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="TKN" type="button">徳之島</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="KUM" type="button">屋久島</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_departure_10" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="OKA" type="button">那覇</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="ISG" type="button">石垣</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="MMY" type="button">宮古島</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="UEO" type="button">久米島</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="TRA" type="button">多良間</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="KTD" type="button">北大東</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="MMD" type="button">南大東</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_departure" data-value="OGN" type="button">与那国</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>
    <!-- /.tab_panel--></div>

    <button class="js_drop_close_btn btn -close" type="button"><span>閉じる</span></button>
    <!-- /.tab_search--></div>
    <!-- /.js_drop_item --></div>
    <!-- /.form_item --></div>

    <div class="form_item icon -flying -is_required">
    <label class="label_txt" for="search_kaigaiair_arrival">目的地</label>
    <input id="search_kaigaiair_arrival" name="to0" class="_w_full js_autocomplete js_suggest" type="text" placeholder="都市、空港"
        data-autocomplete="/_common/panel/kaigaiair/json/suggestion_destinations.json">
    <p class="error_message_required">必須項目です。</p>
    <div class="js_drop_item -wide">
    <p class="lead">都市、空港を入力するか、下記の人気都市（海外）からお選びください</p>

    <div class="tab_search js_tab">
    <ul class="tab_list js_tab_list">
    <li><a href="#tab_kaigaiair_arrival_1">トップ20</a></li>
    <li><a href="#tab_kaigaiair_arrival_2">アジア</a></li>
    <li><a href="#tab_kaigaiair_arrival_3">ハワイ・グアム・サイパン</a></li>
    <li><a href="#tab_kaigaiair_arrival_4">北米・中南米</a></li>
    <li><a href="#tab_kaigaiair_arrival_5">ヨーロッパ</a></li>
    <li><a href="#tab_kaigaiair_arrival_7">オセアニア</a></li>
    <!-- /.tab_list --></ul>

    <div class="tab_panel js_tab_item">
    <div id="tab_kaigaiair_arrival_1" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="HNL" type="button">ホノルル</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="GUM" type="button">グアム</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SEL" type="button">ソウル</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="HKG" type="button">香港</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="TPE" type="button">台北</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SHA" type="button">上海</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="PEK" type="button">北京</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="LHR" type="button">ロンドン(ヒースロー)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="CDG" type="button">パリ(シャルルドゴール)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="FCO" type="button">ローマ(フィウミチーノ)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="BCN" type="button">バルセロナ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="NYC" type="button">ニューヨーク</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="LAX" type="button">ロサンゼルス</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="YVR" type="button">バンクーバー</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SIN" type="button">シンガポール</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="BKK" type="button">バンコク</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SGN" type="button">ホーチミン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="DPS" type="button">バリ島</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="CEB" type="button">セブ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SYD" type="button">シドニー</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_arrival_2" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SEL" type="button">ソウル</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="TPE" type="button">台北</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="HKG" type="button">香港</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="MFM" type="button">マカオ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SHA" type="button">上海</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="DLC" type="button">大連</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="PEK" type="button">北京</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="BKK" type="button">バンコク</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SIN" type="button">シンガポール</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="MNL" type="button">マニラ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="HAN" type="button">ハノイ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SGN" type="button">ホーチミン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="DEL" type="button">デリー</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="KTM" type="button">カトマンズ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="CGK" type="button">ジャカルタ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="DPS" type="button">バリ島</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="KUL" type="button">クアラルンプール</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="REP" type="button">シェムリアップ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="MNL" type="button">マニラ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="CEB" type="button">セブ</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_arrival_3" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="HNL" type="button">ホノルル</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="LIH" type="button">リフエ (カウアイ島)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="HPV" type="button">プリンスヴィル(カウアイ島)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="KOA" type="button">コナ(ハワイ島)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="ITO" type="button">ヒロ(ハワイ島)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="MUE" type="button">ワイメアコハラ(ハワイ島)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="GUM" type="button">グアム</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SPN" type="button">サイパン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="ROR" type="button">コロール(パラオ)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="MAJ" type="button">マジュロ(マーシャル諸島)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="YAP" type="button">ヤップ(ミクロネシア連邦)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="PNI" type="button">ポンペイ(ミクロネシア連邦)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="KSA" type="button">コスラエ(ミクロネシア連邦)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="TKK" type="button">チューク(ミクロネシア連邦)</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_arrival_4" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="NYC" type="button">ニューヨーク</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="LAX" type="button">ロサンゼルス</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SFO" type="button">サンフランシスコ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="LAS" type="button">ラスベガス</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SEA" type="button">シアトル</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="ATL" type="button">アトランタ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="MCO" type="button">オーランド</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="ORD" type="button">シカゴ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="PDX" type="button">ポートランド</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="WAS" type="button">ワシントンD.C.</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="BOS" type="button">ボストン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="IAH" type="button">ヒューストン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="YVR" type="button">バンクーバー</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="YYZ" type="button">トロント</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="YYC" type="button">カルガリー</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="YUL" type="button">モントリオール</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="CUN" type="button">カンクン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="MEX" type="button">メキシコシティ―</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_arrival_5" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="LON" type="button">ロンドン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="EDI" type="button">エジンバラ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="PAR" type="button">パリ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="ROM" type="button">ローマ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="MIL" type="button">ミラノ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="FLR" type="button">フィレンツェ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="VCE" type="button">ベネチア</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="VIE" type="button">ウィーン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="AMS" type="button">アムステルダム</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="ATH" type="button">アテネ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="GVA" type="button">ジュネーブ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="BCN" type="button">バルセロナ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="MAD" type="button">マドリード</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="STO" type="button">ストックホルム</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="CPH" type="button">コペンハーゲン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="OSL" type="button">オスロ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="HEL" type="button">ヘルシンキ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="LIS" type="button">リスボン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="FRA" type="button">フランクフルト</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="MUC" type="button">ミュンヘン</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>

    <div id="tab_kaigaiair_arrival_7" class="tab_item">
    <ul class="btn_list -col_4">
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="SYD" type="button">シドニー</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="CNS" type="button">ケアンズ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="PER" type="button">パース</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="MEL" type="button">メルボルン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="ADL" type="button">アデレード</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="BNE" type="button">ブリスベン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="AKL" type="button">オークランド</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="ZQN" type="button">クイーンズタウン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="CHC" type="button">クライストチャーチ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="WLG" type="button">ウェリントン</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="ROT" type="button">ロトルア</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="APW" type="button">アビア（サモア）</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="PPG" type="button">バゴバゴ(米領サモア)</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="NOU" type="button">ヌメア</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="NAN" type="button">ナンディ</button></li>
    <li><button class="btn -link js_suggest_btn js_applyform" data-applyform="search_kaigaiair_arrival" data-value="PPT" type="button">パペーテ(タヒチ島)</button></li>
    <!-- /.btn-list --></ul>
    <!-- /.panel_item --></div>
    <!-- /.tab_panel--></div>

    <button class="js_drop_close_btn btn -close" type="button"><span>閉じる</span></button>
    <!-- /.tab_search--></div>
    <!-- /.js_drop_item --></div>
    <!-- /.form_item --></div>

    <div class="form_group">
    <div class="form_group_item">
    <div class="form_item icon -calender -is_required">
    <label class="label_txt" for="search_kaigaiair_date_departure">出発日</label>
    <input id="search_kaigaiair_date_departure" class="_w_ss js_datepicker" type="text" name="date0" placeholder="年/月/日" readonly
        data-datepicker-sync-from="kaigaiair_date" data-min="0" data-max="341">
    <p class="error_message_required">必須項目です。</p>
    <!-- /.form_item --></div>
    <!-- /.form_group_item --></div>

    <div class="form_group_item">
    <div class="form_item icon -calender -is_required">
    <label class="label_txt" for="search_kaigaiair_date_arrival">現地出発日</label>
    <input id="search_kaigaiair_date_arrival" class="_w_ss" type="text" name="date1" placeholder="年/月/日" readonly
        data-datepicker-sync-to="kaigaiair_date" data-min="0" data-max="341">
    <p class="error_message_required">必須項目です。</p>
    <!-- /.form_item --></div>
    <!-- /.form_group_item --></div>

    <div class="form_group_item">
    <div class="form_item icon -human -is_required">
    <label class="label_txt" for="search_kaigaiair_persons">人数</label>
    <div class="form_item_drop_select js_drop_select">
    <input id="search_kaigaiair_persons" class="_w_s js_count_set" type="text" value="1名" data-count-set="${person}名" placeholder="名" readonly>
    <p class="error_message_required">必須項目です。</p>
    <!-- /.form_item_drop_select --></div>

    <div class="js_drop_item -narrow">
    <div data-count-get="${person}">
    <div class="form_item -flex -counter">
    <label class="label_txt" for="search_kaigaiair_person_1">大人</label>
    <button class="btn -count_down" type="button" data-count-type="decrement"><span>マイナス</span></button>
    <input id="search_kaigaiair_person_1" class="_w_num" data-count="${person}" data-count-max="9" data-count-min="1" value="1" data-value="1" type="text" pattern="^¥d+$" maxlength="2" name="adl_num" readonly>
    <button class="btn -count_up" type="button" data-count-type="increment"><span>プラス</span></button>
    <!-- /.form_item --></div>

    <div class="form_item -flex -counter">
    <label class="label_txt" for="search_kaigaiair_person_2">こども</label>
    <button class="btn -count_down" type="button" data-count-type="decrement"><span>マイナス</span></button>
    <input id="search_kaigaiair_person_2" class="_w_num" data-count="${person}" data-count-max="8" data-count-min="0" value="0" data-value="0" type="text" pattern="^¥d+$" maxlength="2" name="chd_num" readonly>
    <button class="btn -count_up" type="button" data-count-type="increment"><span>プラス</span></button>
    <!-- /.form_item --></div>

    <div class="form_item -flex -counter">
    <label class="label_txt" for="search_kaigaiair_person_3">幼児<br><span class="sub">（座席あり）</span></label>
    <button class="btn -count_down" type="button" data-count-type="decrement"><span>マイナス</span></button>
    <input id="search_kaigaiair_person_3" class="_w_num" data-count="${person}" data-count-max="8" data-count-min="0" value="0" data-value="0" type="text" pattern="^¥d+$" maxlength="2" name="inf_withseat_num" readonly>
    <button class="btn -count_up" type="button" data-count-type="increment"><span>プラス</span></button>
    <!-- /.form_item --></div>

    <div class="form_item -flex -counter">
    <label class="label_txt" for="search_kaigaiair_person_4">幼児<br><span class="sub">（座席なし）</span></label>
    <button class="btn -count_down" type="button" data-count-type="decrement"><span>マイナス</span></button>
    <input id="search_kaigaiair_person_4" class="_w_num" data-count="${person}" data-count-max="8" data-count-min="0" value="0" data-value="0" type="text" pattern="^¥d+$" maxlength="2" name="inf_noseat_num" readonly>
    <button class="btn -count_up" type="button" data-count-type="increment"><span>プラス</span></button>
    <!-- /.form_item --></div>
    <!-- /.js_count_up --></div>

    <button class="btn -select js_count_set_btn" type="button">選択</button>
    <!-- /.select_drop_down --></div>
    <!-- /.form_item --></div>
    <!-- /.form_group_item --></div>
    <!-- /.form_group --></div>

    <ul class="btn_list">
    <li><button type="submit" class="btn -search">検索する</button></li>
    <li><button type="button" class="btn -add js_panel_open"><span>条件を追加する</span></button></li>
    <!-- /.btn_list --></ul>
    <!-- /.items_inner --></div>
    <!-- /.items --></div>

    <div class="items -optional">
    <div class="items_inner">

    <div class="form_item_select">
    <label for="search_kaigaiair_seat">座席クラス</label>

    <select class="js_select _w_full" id="search_kaigaiair_seat" name="class" data-placeholder="座席クラスで選ぶ">
    <option value="">指定なし</option>
    <option value="M">エコノミー</option>
    <option value="W">プレミアムエコノミー</option>
    <option value="C">ビジネス</option>
    <option value="F">ファースト</option>
    </select>
    <!-- /.form_item_select --></div>

    <div class="form_item_select">
    <label for="search_kaigaiair_company">航空会社</label>

    <select class="js_select js_datacontrol _w_full" id="search_kaigaiair_company" name="carrier0"
        data-placeholder="航空会社で選ぶ" data-group="airline" data-control-source="/kaigai_air/assets/data/airlines.json">
    <option value="">すべての航空会社</option>
    </select>
    <!-- /.form_item_select --></div>

    <div class="form_item_checkbox" data-col="3">
    <label for="search_kaigaiair_flight_1">直行便のみ<input type="checkbox" name="direct" value="1" id="search_kaigaiair_flight_1"></label>
    <!-- /..form_item_checkbox --></div>

    <button type="button" class="btn -remove js_panel_close"><span>条件を閉じる</span></button>
    <!-- /.items_inner --></div>
    <!-- /.items --></div>
    <!-- /.form_search --></form>
    <!-- /.panel_item --></div>
    <!-- /.search_tab_panel --></div>
    <!-- /.inner --></div>
    <!-- /.search_area --></div>

    <!-- 検索パネル -->
    <script src="/js/holidays.js"></script>
    <script src="/js/panel_kaigai.js?form=form_search_kaigai,form_search_kaigaiair&version=20190725"></script>
    <script src="/js/panel_kokunai.js?form=form_search_dom,form_search_kokunai,form_search_kokunaidp&version=20200309"></script>
    <style>
        .ui-selectmenu-menu ul {
            max-height: 20em;
        }
    </style>

    <!-- 国内ツールチップ -->
    <div id="domTooltipHelpNight" style="display:none">
        <div class="dom-tooltip dom-tooltip-help">
            <h3 class="dom-tooltip-help__heading">よくある質問</h3>
            <div class="dom-tooltip-help__question"><span class="dom-tooltip-help__question-ttl">質問</span>ツアーは最大で何日まで予約できますか？</div>
            <div class="dom-tooltip-help__answer"><span class="dom-tooltip-help__answer-ttl">回答</span>
            オンラインでは、旅行日数は最大14日、宿泊は最大10泊までご予約いただけます。15日間以上のご旅行や、11泊以上のご旅行のお申込みは、お手数ですが店舗もしくは旅の予約センターまでお問合せください。</div>
        </div>
    </div>

    <div id="domTooltipHelpPeople" style="display:none">
        <div class="dom-tooltip dom-tooltip-help">
            <h3 class="dom-tooltip-help__heading">よくある質問</h3>
            <div class="dom-tooltip-help__question"><span class="dom-tooltip-help__question-ttl">質問</span>こどもの人数はどう入力すればよいですか？</div>
            <div class="dom-tooltip-help__answer"><span class="dom-tooltip-help__answer-ttl">回答</span>乳幼児以外のお子様は人数に含めて検索してください。例えば、大人2名、小学生1名、乳児1名でご旅行の場合には「3名」で検索してください。詳細な内訳は、後のページで入力していただきます。</div>
        </div>
    </div>

    <div id="domTooltipHelpPamphlet" style="display:none">
        <div class="dom-tooltip dom-tooltip-help">
            <h3 class="dom-tooltip-help__heading">よくある質問</h3>
            <div class="dom-tooltip-help__question"> <span class="dom-tooltip-help__question-ttl">質問</span>パンフレットコードは何を見ればわかりますか？ </div>
            <div class="dom-tooltip-help__answer"> <span class="dom-tooltip-help__answer-ttl">回答</span>パンフレットの裏面右下に記載された7桁の数字になります。</div>
        </div>
    </div>

    <div id="domTooltipHelpPlanCode" style="display:none">
        <div class="dom-tooltip dom-tooltip-help">
            <h3 class="dom-tooltip-help__heading">よくある質問</h3>
            <div class="dom-tooltip-help__question"> <span class="dom-tooltip-help__question-ttl">質問</span>プランコードは何を見ればわかりますか？ </div>
            <div class="dom-tooltip-help__answer"> <span class="dom-tooltip-help__answer-ttl">回答</span>パンフレット内のプラン毎に記載された8桁の英数字になります。プランコードに紐づく商品検索が出来ます。</div>
        </div>
    </div>

    <!-- /.mv_area --></div>

    <div class="str_content -recommend">
    <div class="str_segment">
    <div class="str_outer">
    <div class="str_inner">

    <br>
    <div class="recommend_area">
    <h2 class="hdg_lv2">国内旅行・海外旅行おすすめ情報</h2>

    <div class="recommend_carousel js_recommend_carousel">
    <div class="slide">
    <a href="https://www.jtb.co.jp/usj/">
    <p class="text">JTBだけのスペシャルプログラム「アーリー・パークイン」など、パークをたっぷり楽しめるプランをご用意！まずはこちらをクリック♪</p>
    <div class="image">
    <img src="{{ asset('/_images/img_reco_211201_1.jpg') }}" alt="JTBだけのスペシャルプログラムが楽しめるUSJ">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/kokunai_tour/">
    <p class="text">「新こだわり検索」や現地で使えるクーポンなど、あなたにぴったりの旅を見つけるJTBだけのサポートが充実！</p>
    <div class="image">
    <img src="{{ asset('/_images/01_01.jpg') }}" alt="旅をもっと自由に、わがままに　JTBダイナミックパッケージMySTYLE">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/theme/nationalparks/">
    <p class="text">密にならない、大自然を楽しもう！全国34公園の美しい写真や特長、アクセスなどの基本情報から公園および周辺エリアのアクティビティ、宿泊プランをご紹介！</p>
    <div class="image">
    <img src="{{ asset('/_images/img_reco_210929_02.jpg') }}" alt="密にならない、大自然を楽しもう！">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/lookjtb/kokorotrip/">
    <p class="text">日本で海外を体験できるプラン！日本国内で海外に纏わる「リアル」な旅&お出かけを楽しみながら、ライブ配信などで現地の雰囲気を「バーチャル」に体験します。</p>
    <div class="image">
    <img src="{{ asset('/_images/img_reco_211021_03.jpg') }}" alt="JTBこころトリップ　日本にいながらプチ海外旅行気分">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/kokunai/dynamic/jr/zurashi-tabi/">
    <p class="text">旅する時間や場所、行動ををずらしてみると、今まで知らなかったことに気づけるかもしれません。新しい組み立て方であなただけの旅を始めませんか。</p>
    <div class="image">
    <img src="{{ asset('/_images/img_reco_211005_4.jpg') }}" alt="ずらし旅　分散型旅行を楽しもう">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/nihonnoshun/shikoku/">
    <p class="text">海、山、川の大自然に包まれて、ゆっくりと流れる時間。古来から受け継がれる日本のおもてなしの心。架け橋の先にある、癒しと感動の世界。懐かしくて新しい、四国へ行こう。</p>
    <div class="image">
    <img src="{{ asset('/_images/img_reco_211202_6.jpg') }}" alt="日本の旬四国">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/kokunai/dynamic/jr/">
    <p class="text">JTBならではの豊富なラインナップ！JR・新幹線で出かけるプランはこちらから！</p>
    <div class="image">
    <img src="{{ asset('/_images/01_06.jpg') }}" alt="JR新幹線で旅をする国内ツアー">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/kokunai/offline/">
    <p class="text">ホームページでは購入できない国内旅行プランもご紹介！店舗・旅の予約センター・オンライン相談を利用して旅の知識豊富なJTBスタッフに相談しよう！</p>
    <div class="image">
    <img src="{{ asset('/_images/01_07.jpg') }}" alt="店舗でのみ申し込める国内ツアー">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/kokunai_hotel/list/feature/vaccine/">
    <p class="text">新型コロナウイルスワクチン接種済みの方または陰性証明をお持ちの方への応援プラン。割引や特典がついたプランも！※チェックイン時に、接種完了証明もしくは、陰性証明のご提示が必要です。</p>
    <div class="image">
    <img src="{{ asset('/_images/img_reco_211201_8.png') }}" alt="新型コロナウイルスワクチン接種応援プラン">
    </div>
    </a>
    </div>
    <!-- /.js_recommend_carousel --></div>

    <h2 class="hdg_lv2">お得な割引クーポン・キャンペーン</h2>

    <div class="recommend_carousel js_recommend_carousel">
    <div class="slide">
    <a href="https://www.jtb.co.jp/fukuharu/">
    <p class="text">JTBから感動体験プレゼント！大吉なら20,220ポイントが当たるおみくじ実施中！
    更に、アンケートに答えて最大半額クーポン(割引上限10万円)が当たる♪2022年の福春をお見逃しなく</p>
    <div class="image">
    <img src="{{ asset('/_images/img_reco_220101_01.png') }}" alt="福春">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/myjtb/campaign/twitter_2021winter2022spring/">
    <p class="text">第１弾ご好評につき、JTB公式Twitter（＠JTB_jp)にて＜観光地応援第2弾＞47都道府県おすすめご当地グルメがあたる、フォロー＆リツイートキャンペーンを開催中！キャンペーンのご応募は2月28日（月）まで！</p>
    <div class="image">
    <img src="{{ asset('/_images/img_reco_211217_1.jpg') }}" alt="Twitterキャンペーン">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/myjtb/campaign/coupon/">
    <p class="text">国内宿泊・ツアーのネット予約で使えるお得なクーポンが目白押し！期間限定や先着順など種類も豊富で、随時更新しています。お見逃しなく！</p>
    <div class="image">
    <img src="{{ asset('/_images/02_02.jpg') }}" alt="国内宿泊・ツアーネット予約に使える割引クーポン">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/kokunai/chiikiwari/">
    <p class="text">都道府県が実施する旅行商品や宿泊割引、地域限定で旅行期間中に使用可能なクーポンなどをまとめページでご紹介！都道府県民限定のキャンペーンもございます！</p>
    <div class="image">
    <img src="{{ asset('/_images/img_reco_210921_03.jpg') }}" alt="都道府県が実施する旅行商品などをまとめページでご紹介！">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/myjtb/card/campaign/non_member/webcampaign/">
    <p class="text">キャンペーンページからのWeb入会限定！入会特典に加えてWebでの旅行商品購入にカードを利用するとさらにトラベルポイントをプレゼント！</p>
    <div class="image">
    <img src="{{ asset('/_images/img_reco_211201_4.jpg') }}" alt="キャンペーンページからのご入会でJTBトラベルポイントプレゼント">
    </div>
    </a>
    </div>
    <!-- /.js_recommend_carousel --></div>

    <h2 class="hdg_lv2">JTBの店舗&オンライン相談</h2>

    <div class="recommend_carousel js_recommend_carousel">
    <div class="slide">
    <a href="https://consultants.jtb.co.jp/top">
    <p class="text">オンラインで旅行のご相談・お申込みを承ります。知識豊富なスタッフがご希望に叶う旅をご提案します。相談予約は24時間いつでもこちらのページからどうぞ！</p>
    <div class="image">
    <img src="{{ asset('/_images/03_01.jpg') }}" alt="JTBオンライン相談">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/stores/onlineconsul/local.asp">
    <p class="text">JTBの「ご当地相談」。旅先となる現地店舗のスタッフにオンラインで旅行相談・申込ができます。まずは京都、信州長野、北海道でスタートします。</p>
    <div class="image">
    <img src="{{ asset('/_images/03_02.jpg') }}" alt="旅先のことは旅先に相談　JTBのご当地相談">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/stores/jtbloungeplatinum/">
    <p class="text">圧倒的な手配力とホスピタリティが自慢のお店です。経験を積んで選ばれた専任コンシェルジュが旅の夢を叶えます。落ち着いたラウンジでゆったりとご相談ください。</p>
    <div class="image">
    <img src="{{ asset('/_images/03_03.jpg') }}" alt="旅にもあなた専用のコンシェルジュ　JTBプラチナム">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://shopping.jtb.co.jp/">
    <p class="text">JTBショッピングは、世界各国・日本各地の"お取り寄せ"がいっぱい！しかもトラベルポイントが使える！貯まる！</p>
    <div class="image">
    <img src="{{ asset('/_images/03_04.jpg') }}" alt="JTBトラベルポイントを使ってお取り寄せ　JTBショッピング">
    </div>
    </a>
    </div>
    <!-- /.js_recommend_carousel --></div>

    <h2 class="hdg_lv2">目的から探すおすすめ旅行</h2>

    <div class="recommend_carousel js_recommend_carousel">
    <div class="slide">
    <a href="https://www.jtb.co.jp/theme/onlinetour/">
    <p class="text">おうちで旅の雰囲気を満喫できるオンラインツアー。現地からのライブ配信やガイドとのチャットなどを楽しみながら、ひとときの旅気分を味わってください！</p>
    <div class="image">
    <img src="{{ asset('/_images/04_01.jpg') }}" alt="おうちで旅体験　JTBオンラインツアー">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/kokunai/theme/family/">
    <p class="text">赤ちゃん連れ歓迎の宿や、三世代旅行におすすめの宿、プールのある宿、部屋で食事ができる宿など、家族みんなが楽しめるプランをご紹介！</p>
    <div class="image">
    <img src="{{ asset('/_images/04_02.jpg') }}" alt="家族でいっぱい思い出づくり　家族旅行特集">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/wed/">
    <p class="text">JTBのウエディング専門店では挙式や新婚旅行のご相談・お申込みを承っています。ハッピーな結婚式、 そして一生で一番楽しい旅をJTBが叶えます！</p>
    <div class="image">
    <img src="{{ asset('/_images/04_03.jpg') }}" alt="JTBリゾートウエディング">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://furu-po.com/travel">
    <p class="text">お得に国内旅行に行くなら「JTBふるさと納税旅行クーポン」。ふるさと納税で地域を応援して日本中を旅しよう！</p>
    <div class="image">
    <img src="{{ asset('/_images/04_04.jpg') }}" alt="ふるさと納税で旅に出よう">
    </div>
    </a>
    </div>
    <!-- /.js_recommend_carousel --></div>

    <h2 class="hdg_lv2">JTBのおすすめ情報&コンテンツ</h2>

    <div class="recommend_carousel js_recommend_carousel">
    <div class="slide">
    <a href="https://www.jtb.co.jp/myjtb/stage/mypleasure/?utm_source=mypleasure_web&utm_medium=button&utm_campaign=2021_jtbtop">
    <p class="text">JTBステージ会員の方だけに贈る旅行情報WEBマガジン！「死ぬまでに行きたい！世界の絶景」プロデューサー詩歩さんのコラムも連載！国内外の豊富な旅の話題を是非お楽しみください。<br>
    ※閲覧にはMyJTBのログインが必要です</p>
    <div class="image">
    <img src="{{ asset('/_images/img_reco_210929_1.jpg') }}" alt="My pleasure WEBマガジン">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/itsukara_kaigai/index.asp">
    <p class="text">このページでは世界各国の状況や、JTB海外旅行の発売に向けての情報をお届けいたします。</p>
    <div class="image">
    <img src="{{ asset('/_images/img_reco_211011_1.jpg') }}" alt="JTB海外旅行">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://consultants.jtb.co.jp/top#articles">
    <p class="text">JTB店舗ほか全国のJTBスタッフによるおすすめの旅行&おでかけを記事でご紹介！記事を書いたトラベルコンサルタントにはオンラインで旅行相談をすることもできます。</p>
    <div class="image">
    <img src="{{ asset('/_images/05_03.jpg') }}" alt="JTBスタッフ記事">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/kokunai/brand/ace/tabinosugoshikata/">
    <p class="text">観光ガイド・グルメ・優待クーポンなど、旅先を満喫するため「旅の過ごし方」クーポン。JTBのお客様だけの嬉しい特典です。</p>
    <div class="image">
    <img src="{{ asset('/_images/05_02.jpg') }}" alt="旅の過ごし方　いつもの旅を、もっといい旅に">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://www.jtb.co.jp/kando/">
    <p class="text">その土地ならでは、特定の期間、季節にしか見られない、見られる確率が低いけど見たら感動する、そんな希少価値ある「感動」の「瞬間」を集めてご紹介しています。</p>
    <div class="image">
    <img src="{{ asset('/_images/05_01.jpg') }}" alt="JTB感動の瞬間　そのとき、その場所でなければ決して出会えない風景があります">
    </div>
    </a>
    </div>

    <div class="slide">
    <a href="https://twitter.com/JTB_jp">
    <p class="text">旅先の情報や魅力的な風景などをご紹介するJTB公式アカウント。中の人がときどき日常のこともつぶやきます。良かったらフォローお願いします！</p>
    <div class="image">
    <img src="{{ asset('/_images/05_04.jpg') }}" alt="JTB公式Twitter">
    </div>
    </a>
    </div>

    <!-- /.js_recommend_carousel --></div>
    <!-- /.recommend_area --></div>
    </div>
    </div>
    </div>
    <!-- /.str_content --></div>

    <div class="str_content -info">
    <div class="str_segment">
    <div class="str_outer">
    <div class="str_inner">
    <div class="notice_area">
    <h3 class="hdg_lv3">お知らせ</h3>

    <ul class="link_list">


    <li><a href="https://www.jtbcorp.jp/jp/200410.asp" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞新型コロナウイルス感染防止について']);">新型コロナウイルス感染防止について</a></li>
    <li><a href="/operate/information/211129.asp" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞JTBステージ会員の皆様へのご案内']);">JTBステージ会員の皆様へ（21年 JTBステージの22年12月末までの延長について）</a></li>


    <li><a href="https://www.jtb.co.jp/kokunai/goto/#stopArea" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞GoToトラベルに関するお知らせ（GoToトラベル再開時のクーポン適用について）']);">GoToトラベルに関するお知らせ（GoToトラベル再開時のクーポン適用について）</a></li>
    <li><a href="/operate/information/newnomal/index.asp" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞新型コロナウイルス感染防止のための私たちの取り組みについて']);">新型コロナウイルス感染防止のための私たちの取り組みについて</a></li>


    <li><a href="/operate/information/200207.asp" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞新型コロナウイルス感染症発生に伴う当社海外旅行の取り扱いについて']);">新型コロナウイルス感染症発生に伴う当社海外旅行の取り扱いについて</a></li>
    <li><a href="/myjtb/service/join/index.asp" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞']);">JTB会員サービス統合のご案内</a></li>

    <li><a href="https://help.jtb.co.jp/366/806/1474/2246/f6482.html" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞東京ディズニーリゾート(R)・パークチケットの販売再開について']);">東京ディズニーリゾート(R)・パークチケットの販売再開について</a></li>
    <li><a href="https://www.jtb.co.jp/information/browser/" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞推奨環境']);">推奨環境について</a></li>


    <li><a href="/operate/information/210507.asp" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞JTB国内ツアーお見舞金サービスについて']);">JTB国内ツアーお見舞金サービスについて</a></li>
    <li><a href="https://help.jtb.co.jp/366/1509/1510/f6269.html" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞ログイン画面']);">ログイン画面が表示されないお客様へ（セキュリティ強化のお知らせ）</a></li>




    <!--<li><a href="" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞Amazon Alexa']);">Amazon Alexaに旅行関連サービスの提供を開始<br>話しかけるだけでホテル等の検索ができます！</a></li>-->
    <!--<li><a href="" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞都内観光促進事業「もっと楽しもう！TokyoTokyo（略称：もっとTokyo）」のJTBでの取扱いについて']);">都内観光促進事業「もっと楽しもう！TokyoTokyo（略称：もっとTokyo）」のJTBでの取扱いについて</a></li>-->
    <!--<li><a href="" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞緊急事態宣言に伴う当社店舗対応について']);">緊急事態宣言に伴う当社店舗対応について</a></li>-->


    <!-- /.link_list -->
    </ul>

    <h3 class="hdg_lv3">ご案内</h3>

    <ul class="link_list">
    <li><a href="/operate/information/211014.asp" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','news','ご案内＞4名以上のグループ旅行で使える割引クーポン']);">4名以上のグループ旅行で使える割引クーポンについて</a></li>
    <li><a href="https://www.jtb.co.jp/kando/" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','news','お知らせ＞感動の瞬間']);">日本の絶景 JTB 感動の瞬間（とき）</a></li>
    <li><a href="https://www.jtb.co.jp/kaigai_opt/srh/prddetail/p200010859/?utm_source=tv&utm_medium=banner&utm_campaign=onlinetour&utm_id=borneo" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','news','ご案内＞ボルネオ象里親プログラム']);">テレビで紹介されました！コタキナバルより生中継！家族で楽しむボルネオ象里親プログラム</a></li>
    <!-- /.link_list --></ul>
    <!-- /.notice_area --></div>

    </div>
    </div>
    </div>

    <div class="jtbsite_linklist_wrap">
    <h3>人気の旅行先から探す</h3>

    <dl class="link_define">
    <div class="jtbsite_linklist">
    <dt><a href="https://www.jtb.co.jp/kokunai_hotel/">ホテル・旅館・宿</a></dt>
    <div class="jtbsite_linklist_inner">
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/tokyo/">東京ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/osaka/">大阪ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/kyoto/">京都ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/hokkaido/">北海道ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/0101/">札幌ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/0401/">仙台ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/1303/">上野ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/feature/hakone/">箱根ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/feature/izu/">伊豆ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/1701/">金沢ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/2301/">名古屋ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/hiroshima/">広島ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/fukuoka/">福岡ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/list/okinawa/">沖縄ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/ranking/kokunai/">全国のホテル・旅館ランキング</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/arealist/">人気エリア・スポット</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_hotel/planlist/">特集・プラン一覧</a></dd>
    <dd><a href="https://article.jtb.co.jp/">旅行・観光情報</a></dd>
    </div>
    </div>
    <div class="jtbsite_linklist">
    <dt><a href="https://www.jtb.co.jp/kokunai_tour/">国内ツアー</a></dt>
    <div class="jtbsite_linklist_inner">
    <dd><a href="https://www.jtb.co.jp/kokunai/area/hokkaido/">北海道旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai/area/tokyo/">東京旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai/area/kyoto/">京都旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai/area/osaka/">大阪旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai/area/shikoku/">四国旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai/area/kyushu/">九州旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai/area/okinawa/">沖縄旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/onsen/">温泉旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/tdr/">東京ディズニーリゾート&reg;</a></dd>
    <dd><a href="https://www.jtb.co.jp/usj/">ユニバーサル・スタジオ・ジャパン</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai/promotion/theme/legolandjapan/">レゴランド&reg;・ジャパン・リゾート</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai/promotion/theme/htb/">ハウステンボス</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_jr/">新幹線・JR＋宿・ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_air/">飛行機＋宿・ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai_tour/arealist/">人気エリア・スポット</a></dd>
    <dd><a href="https://www.jtb.co.jp/kokunai/promotion/">目的別・特集一覧</a></dd>
    </div>
    </div>
    <div class="jtbsite_linklist">
    <dt><a href="https://www.jtb.co.jp/kaigai/">海外ツアー</a></dt>
    <div class="jtbsite_linklist_inner">
    <dd><a href="https://www.jtb.co.jp/kaigai/area/hawaii/">ハワイ旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kaigai/area/korea/">韓国旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kaigai/area/guam/">グアム旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kaigai/area/thailand/">タイ旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kaigai/area/taiwan/">台湾旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kaigai/area/hongkong/">香港旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kaigai/area/singapore/">シンガポール旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kaigai/area/italy/">イタリア旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kaigai/area/usa/">アメリカ旅行</a></dd>
    <dd><a href="https://www.jtb.co.jp/kaigai/area/australia/">オーストラリア旅行</a></dd>
    </div>
    </div>
    <div class="jtbsite_linklist">
    <dt><a href="https://www.jtb.co.jp/ovs_htl/">海外ホテル</a></dt>
    <div class="jtbsite_linklist_inner">
    <dd><a href="https://www.jtb.co.jp/ovs_htl/search/search_result/01/201/?freeword=%E3%83%8F%E3%83%AF%E3%82%A4%E5%B7%9E%20%20%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB&sugItemTypeCd=1&sugItemId=213">ハワイホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_htl/search/search_result/01/201/1488/?freeword=%E3%83%9B%E3%83%8E%E3%83%AB%E3%83%AB%20%20%E3%83%8F%E3%83%AF%E3%82%A4%E5%B7%9E%20%20%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB&sugItemTypeCd=1&sugItemId=1488">ホノルルホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_htl/search/search_result/02/70/?freeword=%E3%82%B0%E3%82%A2%E3%83%A0&sugItemTypeCd=1&sugItemId=70">グアムホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_htl/search/search_result/03/201/?freeword=%E3%82%A2%E3%83%A1%E3%83%AA%E3%82%AB&sugItemTypeCd=1&sugItemId=201">アメリカホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_htl/search/search_result/05/176/?freeword=%E5%8F%B0%E6%B9%BE&sugItemTypeCd=1&sugItemId=176">台湾ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_htl/search/search_result/05/94/?freeword=%E9%9F%93%E5%9B%BD&sugItemTypeCd=1&sugItemId=94">韓国ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_htl/search/search_result/05/77/?freeword=%E9%A6%99%E6%B8%AF%E7%89%B9%E5%88%A5%E8%A1%8C%E6%94%BF%E5%8C%BA&sugItemTypeCd=1&sugItemId=77">香港ホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_htl/search/search_result/05/161/?freeword=%E3%82%B7%E3%83%B3%E3%82%AC%E3%83%9D%E3%83%BC%E3%83%AB&sugItemTypeCd=1&sugItemId=161">シンガポールホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_htl/search/search_result/05/178/?freeword=%E3%82%BF%E3%82%A4&sugItemTypeCd=1&sugItemId=178">タイホテル</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_htl/search/search_result/07/10/?freeword=%E3%82%AA%E3%83%BC%E3%82%B9%E3%83%88%E3%83%A9%E3%83%AA%E3%82%A2&sugItemTypeCd=1&sugItemId=10">オーストラリアホテル</a></dd>
    </div>
    </div>
    <div class="jtbsite_linklist">
    <dt><a href="https://www.jtb.co.jp/ovs_air/">海外航空券</a></dt>
    <div class="jtbsite_linklist_inner">
    <dd><a href="https://www.jtb.co.jp/ovs_air_static/asia/korea/seoul/">ソウル航空券</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_air_static/hawaii/honolulu/">ホノルル航空券</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_air_static/asia/thailand/bangkok/">バンコク航空券</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_air_static/oceania/australia/sydney/">シドニー航空券</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_air_static/europe/france/paris/">パリ航空券</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_air_static/north_america/usa/newyork/">ニューヨーク航空券</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_air_static/guam/guam/">グアム航空券</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_air_static/north_america/usa/losangeles/">ロサンゼルス航空券</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_air_static/asia/taiwan/taipei/">台北航空券</a></dd>
    <dd><a href="https://www.jtb.co.jp/ovs_air_static/europe/italy/roma/">ローマ航空券</a></dd>
    </div>
    </div>
    </dl>
    <!-- /.jtbsite_linklist_wrap --></div>

    <!-- /.str_content --></div>
    <!-- /.main-content --></main>

    <aside class="str_content -aside">
    <div class="str_segment">
    <div class="str_outer">
    <div class="str_inner">
    <div class="sns_area">
    <h3 class="hdg_lv3">JTB公式アカウント</h3>

    <p>JTBスタッフが、旅心を刺激する情報を、世界中から発信中♪</p>

    <ul class="sns_list_link">
    <li><a href="https://twitter.com/JTB_jp" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','sns','twitter']);"><img src="/_images/icon_sns_twitter.png" alt="twitter"></a></li>
    <li><a href="https://www.facebook.com/jtb.jp" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','sns','facebook']);"><img src="/_images/icon_sns_facebook.png" alt="facebook"></a></li>
    <li><a href="https://www.instagram.com/jtb_jp/" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','sns','instagram']);"><img src="/_images/icon_sns_instagram.gif" alt="instagram"></a></li>
    <!--li><a href="https://plus.google.com/109840353562706459890/posts" target="_blank" rel="publisher" onclick="_gaq.push(['_trackEvent','top_pc','sns','Google＋']);"><img src="/_images/icon_sns_google_plus.png" alt="google_plus"></a></li-->
    <li><a href="https://line.me/ti/p/%40jtbhd" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','sns','LINE']);"><img src="/_images/icon_sns_line.png" alt="line"></a></li>
    <li><a href="https://www.youtube.com/channel/UCjDeNR2xFC4wFh3txHql20Q" target="_blank" rel="publisher" onclick="_gaq.push(['_trackEvent','top_pc','sns','Youtube']);"><img src="/_images/icon_sns_youtube.png" alt="youtube"></a></li>
    </ul>

    <p><a href="https://www.jtb.co.jp/line/character/profile/" onclick="_gaq.push(['_trackEvent','top_pc','sns','じぇいとん']);">オリジナルキャラクターのクリエイターズスタンプ販売中！</a></p>
    <!-- /.sns_area --></div>
    <div class="banner_area">
    <!--<p class="banner_main"><a href="https://www.jtbcorp.jp/jp/tokyo2020/" onclick="_gaq.push(['_trackEvent','top_pc','mokuteki','TOKYO 2020']);" target="_blink"><img src="/_images/bnr_jtb.jpg" alt="TOKYO 2020"></a></p>-->

    <ul class="banner_sub">
    <li><a href="top_include/othersite/othersite_j01.asp" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','logo','ハッピーマンデー']);"><img src="/_images/bnr_happy_monday.png" alt="ハッピーマンデー"></a></li>
    <li><a href="top_include/othersite/othersite_j02.asp" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','logo','JATA']);"><img src="/_images/bnr_e_tbt.gif" alt="e-TBT" style="margin-right: 20px;"></a></li>
    <li><a href="top_include/othersite/othersite_j03.asp" target="_blank" onclick="_gaq.push(['_trackEvent','top_pc','logo','旅行業公正取引協議会']);"><img src="/_images/bnr_tabi_symbol.png" alt="旅行業公正取引協議会!"></a></li>
    </ul>
    <!-- /.banner_area --></div>
    </div>
    </div>
    </div>
    </aside>

@include('layouts.footer')


    <!-- PC&SP用 YTM_静的タグ　START -->
    <script type="text/javascript">
      (function () {
        var tagjs = document.createElement("script");
        var s = document.getElementsByTagName("script")[0];
        tagjs.async = true;
        tagjs.src = "//s.yjtag.jp/tag.js#site=8NiNPiw,1KEhWsY,OUYeb7k,wPIi4g7,auWTTVF,goev2Jj,YHOmPx0,NDlikgc&referrer="
        + encodeURIComponent(document.location.href) + "";
        s.parentNode.insertBefore(tagjs, s);
      }());
    </script>
    <noscript>
      <iframe src="//b.yjtag.jp/iframe?c=8NiNPiw,1KEhWsY,OUYeb7k,wPIi4g7,auWTTVF,goev2Jj,YHOmPx0,NDlikgc" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </noscript>
    <!-- End PC&SP用 YTM_静的タグ　END -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNC3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <link rel="stylesheet" href="https://www.jtb.co.jp/_common/_template2020/_assets/css/headfooter_rwd.css">
    <script src="/js/top.js"></script>




<noscript><img src="https://www.jtb.co.jp/akam/11/pixel_44fb4fc8?a=dD00Zjc3NTFmM2U4MzNiMTZhNDYyZDk4Mzk0NDg0OGY0NDFjNWQ5MzI3JmpzPW9mZg==" style="visibility: hidden; position: absolute; left: -999px; top: -999px;" /></noscript><script type="text/javascript"  src="/dPL5x5J5u/zSmV/9t3g/2TJnilMeYI/caYOXDJzOEEO/CQd7MApEZw/Dx/s7JlcOH0M"></script></body>
@endsection
