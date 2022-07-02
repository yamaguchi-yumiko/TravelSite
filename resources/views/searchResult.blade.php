@extends('layouts.header')


<link rel="stylesheet" href="/css/kokunai.css">
<link rel="stylesheet" href="/css/dom-common-pc.92e91aa.css">
<link rel="stylesheet" href="/css/jtb-common-pc.92e91aa.css">
<link rel="stylesheet" href="/css/domhotel-pc.92e91aa.css">
@section('content')
<body>
    <img class="product-image-size" src="{{ asset ('storage/images/86210021000187174.jpg') }}" alt="商品写真">
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jtb-common-pc.92e91aa.js"></script>
    <script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/js/jquery.slick.min.js"></script>
    <script type="text/javascript" src="/js/jquery.darktooltip.js"></script>
    <script type="text/javascript" src="/js/dom-common-pc.92e91aa.js"></script>
    <script type="text/javascript" src="/js/spk_dom-common-pc.92e91aa.js"></script>
    <script type="text/javascript" src="/js/domhotel-pc.92e91aa.js"></script>
    <aside class="dom-section-01 domhotel-section-search">
        <h2 class="dom-section-heading-01">基本条件を変更して、再検索する</h2>
        <!-- 見た目が悪いので対応完了まで条件チェックを一時的に削除 otomura
        <!--
        <div class="dom-warnings-01">必要な条件が不足しています。人数を再度検索してください。</div>
        -->
        <div class="dom-search domhotel-search">
        <div class="dom-search__column domhotel-search__place js-dom-pulldown spk_js-stayplace-suggest">
        <div class="dom-search__input dom-search__input--place spk_js_dom-pulldown__input">
        <input type="text" maxlength="50" name="" value="{{$area}}" placeholder="目的地・キーワードを入力" class="spk_js_suggest-input" data-key="suggestkeyword" data-request="stayplace" data-type="stayplace" data-clear="hotel,landmark,area,planinfokeyword,tycodesuggested,stationcode,stationcodesuggested,bookid,bookidsuggested,distance,HotelListMapData,mapInitialFitBoundsFinished" required="">
        </div>
        <div class="dom-search__panel js-dom-pulldown__panel">
        <ul class="dom-suggest-list spk_js_suggest-list" data-type="stayplace">
        </ul>
        </div>
        </div>
        <div class="dom-search__column domhotel-search__date js-dom-pulldown">
        <div class="dom-search__input dom-search__input--date js-dom-pulldown__input js-dom-pulldown__calendar-outward spk_js_calendar-input">
        <input type="text" name="" value="{{$godate}}" placeholder="日付未定" readonly="">
        </div>
        <div class="dom-search__panel dom-search__panel--calendar dom-calendar js-dom-pulldown__panel js-dom-pulldown__panel--calendar spk_js_calendar-panel">

        <div class="dom-search__panel-btn-close spk_js_calendar-close"></div>

        <div class="domhotel-date-undecided">
        <div class="domhotel-date-undecided__btn js-domhotel-date-undecided__btn spk_js_calendar-undecided">日付未定</div>
        </div>

        <div class="dom-calendar__in">

        <div class="dom-calendar__slide">

        <div class="dom-calendar__column spk_js_calendar-month" data-index="0">
        <div class="dom-calendar__header">2022年 2月</div>
        <table class="dom-calendar__tbl ">
        <thead>
        <tr>
        <th class="dom-sunday">日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th class="dom-saturday">土</th>
        </tr>
        </thead>
        <tbody>

        <tr>

        <td class="dom-calendar__date dom-calendar__date--disabled dom-sunday  spk_js_calendar-date" data-date="20220130"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220131"></td>

        <td class="dom-calendar__date   dom-calendar__date--today spk_js_calendar-date" data-date="20220201"><a href="javascript:void(0)" data-date="20220201">1</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220202"><a href="javascript:void(0)" data-date="20220202">2</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220203"><a href="javascript:void(0)" data-date="20220203">3</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220204"><a href="javascript:void(0)" data-date="20220204">4</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220205"><a href="javascript:void(0)" data-date="20220205">5</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220206"><a href="javascript:void(0)" data-date="20220206">6</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220207"><a href="javascript:void(0)" data-date="20220207">7</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220208"><a href="javascript:void(0)" data-date="20220208">8</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220209"><a href="javascript:void(0)" data-date="20220209">9</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220210"><a href="javascript:void(0)" data-date="20220210">10</a></td>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220211"><a href="javascript:void(0)" data-date="20220211">11</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220212"><a href="javascript:void(0)" data-date="20220212">12</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220213"><a href="javascript:void(0)" data-date="20220213">13</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220214"><a href="javascript:void(0)" data-date="20220214">14</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220215"><a href="javascript:void(0)" data-date="20220215">15</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220216"><a href="javascript:void(0)" data-date="20220216">16</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220217"><a href="javascript:void(0)" data-date="20220217">17</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220218"><a href="javascript:void(0)" data-date="20220218">18</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220219"><a href="javascript:void(0)" data-date="20220219">19</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220220"><a href="javascript:void(0)" data-date="20220220">20</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220221"><a href="javascript:void(0)" data-date="20220221">21</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220222"><a href="javascript:void(0)" data-date="20220222">22</a></td>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220223"><a href="javascript:void(0)" data-date="20220223">23</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220224"><a href="javascript:void(0)" data-date="20220224">24</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220225"><a href="javascript:void(0)" data-date="20220225">25</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220226"><a href="javascript:void(0)" data-date="20220226">26</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220227"><a href="javascript:void(0)" data-date="20220227">27</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220228"><a href="javascript:void(0)" data-date="20220228">28</a></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220301"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220302"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220303"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220304"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled dom-saturday  spk_js_calendar-date" data-date="20220305"></td>
        </tr>


        </tbody>
        </table>
        </div>

        <div class="dom-calendar__column spk_js_calendar-month" data-index="1">
        <div class="dom-calendar__header">2022年 3月</div>
        <table class="dom-calendar__tbl ">
        <thead>
        <tr>
        <th class="dom-sunday">日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th class="dom-saturday">土</th>
        </tr>
        </thead>
        <tbody>

        <tr>

        <td class="dom-calendar__date dom-calendar__date--disabled dom-sunday  spk_js_calendar-date" data-date="20220227"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220228"></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220301"><a href="javascript:void(0)" data-date="20220301">1</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220302"><a href="javascript:void(0)" data-date="20220302">2</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220303"><a href="javascript:void(0)" data-date="20220303">3</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220304"><a href="javascript:void(0)" data-date="20220304">4</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220305"><a href="javascript:void(0)" data-date="20220305">5</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220306"><a href="javascript:void(0)" data-date="20220306">6</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220307"><a href="javascript:void(0)" data-date="20220307">7</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220308"><a href="javascript:void(0)" data-date="20220308">8</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220309"><a href="javascript:void(0)" data-date="20220309">9</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220310"><a href="javascript:void(0)" data-date="20220310">10</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220311"><a href="javascript:void(0)" data-date="20220311">11</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220312"><a href="javascript:void(0)" data-date="20220312">12</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220313"><a href="javascript:void(0)" data-date="20220313">13</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220314"><a href="javascript:void(0)" data-date="20220314">14</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220315"><a href="javascript:void(0)" data-date="20220315">15</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220316"><a href="javascript:void(0)" data-date="20220316">16</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220317"><a href="javascript:void(0)" data-date="20220317">17</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220318"><a href="javascript:void(0)" data-date="20220318">18</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220319"><a href="javascript:void(0)" data-date="20220319">19</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220320"><a href="javascript:void(0)" data-date="20220320">20</a></td>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220321"><a href="javascript:void(0)" data-date="20220321">21</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220322"><a href="javascript:void(0)" data-date="20220322">22</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220323"><a href="javascript:void(0)" data-date="20220323">23</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220324"><a href="javascript:void(0)" data-date="20220324">24</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220325"><a href="javascript:void(0)" data-date="20220325">25</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220326"><a href="javascript:void(0)" data-date="20220326">26</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220327"><a href="javascript:void(0)" data-date="20220327">27</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220328"><a href="javascript:void(0)" data-date="20220328">28</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220329"><a href="javascript:void(0)" data-date="20220329">29</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220330"><a href="javascript:void(0)" data-date="20220330">30</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220331"><a href="javascript:void(0)" data-date="20220331">31</a></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220401"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled dom-saturday  spk_js_calendar-date" data-date="20220402"></td>
        </tr>


        </tbody>
        </table>
        </div>

        <div class="dom-calendar__column spk_js_calendar-month" data-index="2">
        <div class="dom-calendar__header">2022年 4月</div>
        <table class="dom-calendar__tbl ">
        <thead>
        <tr>
        <th class="dom-sunday">日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th class="dom-saturday">土</th>
        </tr>
        </thead>
        <tbody>

        <tr>

        <td class="dom-calendar__date dom-calendar__date--disabled dom-sunday  spk_js_calendar-date" data-date="20220327"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220328"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220329"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220330"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220331"></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220401"><a href="javascript:void(0)" data-date="20220401">1</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220402"><a href="javascript:void(0)" data-date="20220402">2</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220403"><a href="javascript:void(0)" data-date="20220403">3</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220404"><a href="javascript:void(0)" data-date="20220404">4</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220405"><a href="javascript:void(0)" data-date="20220405">5</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220406"><a href="javascript:void(0)" data-date="20220406">6</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220407"><a href="javascript:void(0)" data-date="20220407">7</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220408"><a href="javascript:void(0)" data-date="20220408">8</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220409"><a href="javascript:void(0)" data-date="20220409">9</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220410"><a href="javascript:void(0)" data-date="20220410">10</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220411"><a href="javascript:void(0)" data-date="20220411">11</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220412"><a href="javascript:void(0)" data-date="20220412">12</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220413"><a href="javascript:void(0)" data-date="20220413">13</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220414"><a href="javascript:void(0)" data-date="20220414">14</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220415"><a href="javascript:void(0)" data-date="20220415">15</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220416"><a href="javascript:void(0)" data-date="20220416">16</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220417"><a href="javascript:void(0)" data-date="20220417">17</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220418"><a href="javascript:void(0)" data-date="20220418">18</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220419"><a href="javascript:void(0)" data-date="20220419">19</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220420"><a href="javascript:void(0)" data-date="20220420">20</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220421"><a href="javascript:void(0)" data-date="20220421">21</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220422"><a href="javascript:void(0)" data-date="20220422">22</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220423"><a href="javascript:void(0)" data-date="20220423">23</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220424"><a href="javascript:void(0)" data-date="20220424">24</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220425"><a href="javascript:void(0)" data-date="20220425">25</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220426"><a href="javascript:void(0)" data-date="20220426">26</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220427"><a href="javascript:void(0)" data-date="20220427">27</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220428"><a href="javascript:void(0)" data-date="20220428">28</a></td>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220429"><a href="javascript:void(0)" data-date="20220429">29</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220430"><a href="javascript:void(0)" data-date="20220430">30</a></td>
        </tr>


        </tbody>
        </table>
        </div>

        <div class="dom-calendar__column spk_js_calendar-month" style="display:none;" data-index="3">
        <div class="dom-calendar__header">2022年 5月</div>
        <table class="dom-calendar__tbl ">
        <thead>
        <tr>
        <th class="dom-sunday">日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th class="dom-saturday">土</th>
        </tr>
        </thead>
        <tbody>

        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220501"><a href="javascript:void(0)" data-date="20220501">1</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220502"><a href="javascript:void(0)" data-date="20220502">2</a></td>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220503"><a href="javascript:void(0)" data-date="20220503">3</a></td>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220504"><a href="javascript:void(0)" data-date="20220504">4</a></td>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220505"><a href="javascript:void(0)" data-date="20220505">5</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220506"><a href="javascript:void(0)" data-date="20220506">6</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220507"><a href="javascript:void(0)" data-date="20220507">7</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220508"><a href="javascript:void(0)" data-date="20220508">8</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220509"><a href="javascript:void(0)" data-date="20220509">9</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220510"><a href="javascript:void(0)" data-date="20220510">10</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220511"><a href="javascript:void(0)" data-date="20220511">11</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220512"><a href="javascript:void(0)" data-date="20220512">12</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220513"><a href="javascript:void(0)" data-date="20220513">13</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220514"><a href="javascript:void(0)" data-date="20220514">14</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220515"><a href="javascript:void(0)" data-date="20220515">15</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220516"><a href="javascript:void(0)" data-date="20220516">16</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220517"><a href="javascript:void(0)" data-date="20220517">17</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220518"><a href="javascript:void(0)" data-date="20220518">18</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220519"><a href="javascript:void(0)" data-date="20220519">19</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220520"><a href="javascript:void(0)" data-date="20220520">20</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220521"><a href="javascript:void(0)" data-date="20220521">21</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220522"><a href="javascript:void(0)" data-date="20220522">22</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220523"><a href="javascript:void(0)" data-date="20220523">23</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220524"><a href="javascript:void(0)" data-date="20220524">24</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220525"><a href="javascript:void(0)" data-date="20220525">25</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220526"><a href="javascript:void(0)" data-date="20220526">26</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220527"><a href="javascript:void(0)" data-date="20220527">27</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220528"><a href="javascript:void(0)" data-date="20220528">28</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220529"><a href="javascript:void(0)" data-date="20220529">29</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220530"><a href="javascript:void(0)" data-date="20220530">30</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220531"><a href="javascript:void(0)" data-date="20220531">31</a></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220601"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220602"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220603"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled dom-saturday  spk_js_calendar-date" data-date="20220604"></td>
        </tr>


        </tbody>
        </table>
        </div>

        <div class="dom-calendar__column spk_js_calendar-month" style="display:none;" data-index="4">
        <div class="dom-calendar__header">2022年 6月</div>
        <table class="dom-calendar__tbl ">
        <thead>
        <tr>
        <th class="dom-sunday">日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th class="dom-saturday">土</th>
        </tr>
        </thead>
        <tbody>

        <tr>

        <td class="dom-calendar__date dom-calendar__date--disabled dom-sunday  spk_js_calendar-date" data-date="20220529"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220530"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220531"></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220601"><a href="javascript:void(0)" data-date="20220601">1</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220602"><a href="javascript:void(0)" data-date="20220602">2</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220603"><a href="javascript:void(0)" data-date="20220603">3</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220604"><a href="javascript:void(0)" data-date="20220604">4</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220605"><a href="javascript:void(0)" data-date="20220605">5</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220606"><a href="javascript:void(0)" data-date="20220606">6</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220607"><a href="javascript:void(0)" data-date="20220607">7</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220608"><a href="javascript:void(0)" data-date="20220608">8</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220609"><a href="javascript:void(0)" data-date="20220609">9</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220610"><a href="javascript:void(0)" data-date="20220610">10</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220611"><a href="javascript:void(0)" data-date="20220611">11</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220612"><a href="javascript:void(0)" data-date="20220612">12</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220613"><a href="javascript:void(0)" data-date="20220613">13</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220614"><a href="javascript:void(0)" data-date="20220614">14</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220615"><a href="javascript:void(0)" data-date="20220615">15</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220616"><a href="javascript:void(0)" data-date="20220616">16</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220617"><a href="javascript:void(0)" data-date="20220617">17</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220618"><a href="javascript:void(0)" data-date="20220618">18</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220619"><a href="javascript:void(0)" data-date="20220619">19</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220620"><a href="javascript:void(0)" data-date="20220620">20</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220621"><a href="javascript:void(0)" data-date="20220621">21</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220622"><a href="javascript:void(0)" data-date="20220622">22</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220623"><a href="javascript:void(0)" data-date="20220623">23</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220624"><a href="javascript:void(0)" data-date="20220624">24</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220625"><a href="javascript:void(0)" data-date="20220625">25</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220626"><a href="javascript:void(0)" data-date="20220626">26</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220627"><a href="javascript:void(0)" data-date="20220627">27</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220628"><a href="javascript:void(0)" data-date="20220628">28</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220629"><a href="javascript:void(0)" data-date="20220629">29</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220630"><a href="javascript:void(0)" data-date="20220630">30</a></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220701"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled dom-saturday  spk_js_calendar-date" data-date="20220702"></td>
        </tr>


        </tbody>
        </table>
        </div>

        <div class="dom-calendar__column spk_js_calendar-month" style="display:none;" data-index="5">
        <div class="dom-calendar__header">2022年 7月</div>
        <table class="dom-calendar__tbl ">
        <thead>
        <tr>
        <th class="dom-sunday">日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th class="dom-saturday">土</th>
        </tr>
        </thead>
        <tbody>

        <tr>

        <td class="dom-calendar__date dom-calendar__date--disabled dom-sunday  spk_js_calendar-date" data-date="20220626"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220627"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220628"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220629"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220630"></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220701"><a href="javascript:void(0)" data-date="20220701">1</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220702"><a href="javascript:void(0)" data-date="20220702">2</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220703"><a href="javascript:void(0)" data-date="20220703">3</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220704"><a href="javascript:void(0)" data-date="20220704">4</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220705"><a href="javascript:void(0)" data-date="20220705">5</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220706"><a href="javascript:void(0)" data-date="20220706">6</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220707"><a href="javascript:void(0)" data-date="20220707">7</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220708"><a href="javascript:void(0)" data-date="20220708">8</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220709"><a href="javascript:void(0)" data-date="20220709">9</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220710"><a href="javascript:void(0)" data-date="20220710">10</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220711"><a href="javascript:void(0)" data-date="20220711">11</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220712"><a href="javascript:void(0)" data-date="20220712">12</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220713"><a href="javascript:void(0)" data-date="20220713">13</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220714"><a href="javascript:void(0)" data-date="20220714">14</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220715"><a href="javascript:void(0)" data-date="20220715">15</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220716"><a href="javascript:void(0)" data-date="20220716">16</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220717"><a href="javascript:void(0)" data-date="20220717">17</a></td>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220718"><a href="javascript:void(0)" data-date="20220718">18</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220719"><a href="javascript:void(0)" data-date="20220719">19</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220720"><a href="javascript:void(0)" data-date="20220720">20</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220721"><a href="javascript:void(0)" data-date="20220721">21</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220722"><a href="javascript:void(0)" data-date="20220722">22</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220723"><a href="javascript:void(0)" data-date="20220723">23</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220724"><a href="javascript:void(0)" data-date="20220724">24</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220725"><a href="javascript:void(0)" data-date="20220725">25</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220726"><a href="javascript:void(0)" data-date="20220726">26</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220727"><a href="javascript:void(0)" data-date="20220727">27</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220728"><a href="javascript:void(0)" data-date="20220728">28</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220729"><a href="javascript:void(0)" data-date="20220729">29</a></td>

        <td class="dom-calendar__date  dom-saturday  spk_js_calendar-date" data-date="20220730"><a href="javascript:void(0)" data-date="20220730">30</a></td>
        </tr>


        <tr>

        <td class="dom-calendar__date  dom-sunday  spk_js_calendar-date" data-date="20220731"><a href="javascript:void(0)" data-date="20220731">31</a></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220801"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220802"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220803"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220804"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220805"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled dom-saturday  spk_js_calendar-date" data-date="20220806"></td>
        </tr>

        </tbody>
        </table>
        </div>

        <div class="dom-calendar__column spk_js_calendar-month" style="display:none;" data-index="6">
        <div class="dom-calendar__header">2022年 8月</div>
        <table class="dom-calendar__tbl ">
        <thead>
        <tr>
        <th class="dom-sunday">日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th class="dom-saturday">土</th>
        </tr>
        </thead>
        <tbody>

        <tr>

        <td class="dom-calendar__date dom-calendar__date--disabled dom-sunday  spk_js_calendar-date" data-date="20220731"></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220801"><a href="javascript:void(0)" data-date="20220801">1</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220802"><a href="javascript:void(0)" data-date="20220802">2</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220803"><a href="javascript:void(0)" data-date="20220803">3</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220804"><a href="javascript:void(0)" data-date="20220804">4</a></td>

        <td class="dom-calendar__date    spk_js_calendar-date" data-date="20220805"><a href="javascript:void(0)" data-date="20220805">5</a></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220806">6</td>
        </tr>


        <tr>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220807">7</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220808">8</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220809">9</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220810">10</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220811">11</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220812">12</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220813">13</td>
        </tr>


        <tr>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220814">14</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220815">15</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220816">16</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220817">17</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220818">18</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220819">19</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220820">20</td>
        </tr>


        <tr>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220821">21</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220822">22</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220823">23</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220824">24</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220825">25</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220826">26</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220827">27</td>
        </tr>


        <tr>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220828">28</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220829">29</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220830">30</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220831">31</td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220901"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled   spk_js_calendar-date" data-date="20220902"></td>

        <td class="dom-calendar__date dom-calendar__date--disabled dom-saturday  spk_js_calendar-date" data-date="20220903"></td>
        </tr>


        </tbody>
        </table>
        </div>
        </div>
        <div class="dom-calendar__arr dom-calendar__arr--prev spk_js_calendar-month-change" data-add="-1" data-displaymonthnum="3" style="display:none;">前の月</div>

        <div class="dom-calendar__arr dom-calendar__arr--next spk_js_calendar-month-change" data-add="1" data-displaymonthnum="3">次の月</div>
        </div></div>
        </div>
        <div class="dom-search__column domhotel-search__night js-dom-pulldown">
        <div class="dom-search__input dom-search__input--night spk_js-dom-pulldown__input">
        <input type="text" class="spk_js_staynight-input" name="" value="{{$staynight}}" placeholder="1泊" readonly="" disabled="">
        </div>
        <div class="dom-search__panel js-dom-pulldown__panel spk_js_staynight">
        <ul class="dom-pulldown-list">
        <li data-val="1">1泊</li><li data-val="2">2泊</li><li data-val="3">3泊</li><li data-val="4">4泊</li><li data-val="5">5泊</li><li data-val="6">6泊</li>
        </ul>
        </div>
        </div>

        <div class="dom-search__column domhotel-search__people js-dom-pulldown">
        <p class="domhotel-people-warning dom-warnings-link-01">一部屋あたりのご利用人数を入力してください</p>
        <div class="dom-search__input dom-search__input--people js-dom-pulldown__input">
        <input type="text" class="spk_js_room-assign-pulldown-input spk_js_total-member-number-input" data-name="" value="{{$roomperson}}" placeholder="人数指定なし" readonly="">
        </div>

        <div class="dom-search__panel dom-search__panel--people js-dom-pulldown__panel spk_js_room-assign-pulldown-panel" style="display: none;">
        <div class="dom-spinbox dom-spinbox--room">
        <dl class="dom-spinbox__list">
        <dt class="dom-spinbox__label dom-spinbox__label--room">部屋数</dt>
        <dd class="dom-spinbox__set spk_js_change-with-room">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--minus dom-spinbox__btn--disabled" data-key="room" data-add="-1"></button>
        <input type="number" name="" value="{{$roomperson}}" readonly="" class="dom-spinbox__input spk_js-room-imput" data-key="room">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--plus" data-key="room" data-add="1"></button>
        </dd>
        </dl>
        </div>
        <div class="dom-spinbox spk_js_room-assign-change-capacity">
        <dl class="dom-spinbox__list">
        <dt class="dom-spinbox__label dom-spinbox__label--men">おとな男性</dt>
        <dd class="dom-spinbox__set">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--minus dom-spinbox__btn--disabled" data-key="male" data-add="-1"></button>
        <input type="number" name="" value="0" class="dom-spinbox__input" readonly="" data-key="male">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--plus" data-key="male" data-add="1"></button>
        </dd>
        </dl>
        <dl class="dom-spinbox__list">
        <dt class="dom-spinbox__label dom-spinbox__label--women">おとな女性</dt>
        <dd class="dom-spinbox__set">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--minus dom-spinbox__btn--disabled" data-key="female" data-add="-1"></button>
        <input type="number" name="" value="0" class="dom-spinbox__input" readonly="" data-key="female">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--plus" data-key="female" data-add="1"></button>
        </dd>
        </dl>
        <div class="domhotel-room-child js-dom-accordion">
        <div class="domhotel-room-child__trigger js-dom-accordion-btn"><span>こどもを追加する</span></div>
        <div class="domhotel-room-child__content js-dom-accordion-content">
        <dl class="dom-spinbox__list">
        <dt class="dom-spinbox__label">こどもA<small>（寝具、大人に準じた食事）</small></dt>
        <dd class="dom-spinbox__set">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--minus dom-spinbox__btn--disabled" data-key="childA" data-add="-1"></button>
        <input type="number" name="" value="0" class="dom-spinbox__input" readonly="" data-key="childA">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--plus" data-key="childA" data-add="1"></button>
        </dd>
        </dl>
        <dl class="dom-spinbox__list">
        <dt class="dom-spinbox__label">こどもB<small>（寝具、お子様用の食事）</small></dt>
        <dd class="dom-spinbox__set">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--minus dom-spinbox__btn--disabled" data-key="childB" data-add="-1"></button>
        <input type="number" name="" value="0" class="dom-spinbox__input" readonly="" data-key="childB">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--plus" data-key="childB" data-add="1"></button>
        </dd>
        </dl>
        <dl class="dom-spinbox__list">
        <dt class="dom-spinbox__label">こどもC<small>（寝具のみ）</small></dt>
        <dd class="dom-spinbox__set">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--minus dom-spinbox__btn--disabled" data-key="childC" data-add="-1"></button>
        <input type="number" name="" value="0" class="dom-spinbox__input" readonly="" data-key="childC">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--plus" data-key="childC" data-add="1"></button>
        </dd>
        </dl>
        <dl class="dom-spinbox__list">
        <dt class="dom-spinbox__label">こどもD<small>（寝具・食事なし）</small></dt>
        <dd class="dom-spinbox__set">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--minus dom-spinbox__btn--disabled" data-key="childD" data-add="-1"></button>
        <input type="number" name="" value="0" class="dom-spinbox__input" readonly="" data-key="childD">
        <button type="button" name="" value="" class="dom-spinbox__btn dom-spinbox__btn--plus" data-key="childD" data-add="1"></button>
        </dd>
        </dl>
        <p class="domhotel-room-child-link"><a href="http://help.jtb.co.jp/366/1520/1521/1609/f4905.html" target="_blank">お子様を含むご予約について</a></p>
        </div>
        </div>
        <!--/domhotel-room-child-->
        </div>
        <div class="domhotel-room-total__content">大人<em class="spk_js_adult-number">0</em>名　こども<em class="spk_js_child-number">0</em>名　×　<em class="spk_js_room-number">1</em>部屋<span class="domhotel-room-total-count">（合計<em class="spk_js_total-member-number">0</em>名）</span></div>
        <button class="dom__btn-select-02 dom-search__panel-people-btn spk_js_decide-room-assign-button"><span>決定する</span> </button>
        <div class="spk_js_room-assign-error spk_css_room-assign-error" style="display:none;"></div>
        </div>
        </div>

        <button type="submit" class="dom__btn-submit-01 domhotel-search__btn-submit spk_js_search-button js-dom-search-modal-submit-btn"><span>検索する</span></button>
        </div>
        <section class="spk_js_search-panel-cross-link">

            <div id="panel01">
                <h3 class="dom-section-heading-03">詳細エリアに絞り込む</h3>
                <ul class="dom-note-list-type-02">
                    <li><a href="/kokunai_hotel/list/hokkaido/" class="spk_js-data-href-param" data-href-param="{&quot;hotellistsort&quot;:&quot;recommend&quot;,&quot;staynight&quot;:&quot;1&quot;,&quot;room&quot;:&quot;1&quot;,&quot;roomassign&quot;:&quot;m0f0a0b0c0d0&quot;,&quot;mapdisp&quot;:&quot;0&quot;,&quot;planinfokeywordon&quot;:&quot;1&quot;,&quot;tyfilteron&quot;:&quot;1&quot;,&quot;planinfokeyword&quot;:&quot;あ&quot;,&quot;area&quot;:&quot;A01&quot;}">北海道(707)</a></li><li><a href="/kokunai_hotel/list/tohoku/" class="spk_js-data-href-param" data-href-param="{&quot;hotellistsort&quot;:&quot;recommend&quot;,&quot;staynight&quot;:&quot;1&quot;,&quot;room&quot;:&quot;1&quot;,&quot;roomassign&quot;:&quot;m0f0a0b0c0d0&quot;,&quot;mapdisp&quot;:&quot;0&quot;,&quot;planinfokeywordon&quot;:&quot;1&quot;,&quot;tyfilteron&quot;:&quot;1&quot;,&quot;planinfokeyword&quot;:&quot;あ&quot;,&quot;area&quot;:&quot;A02&quot;}">東北(1180)</a></li><li><a href="/kokunai_hotel/list/kitakanto/" class="spk_js-data-href-param" data-href-param="{&quot;hotellistsort&quot;:&quot;recommend&quot;,&quot;staynight&quot;:&quot;1&quot;,&quot;room&quot;:&quot;1&quot;,&quot;roomassign&quot;:&quot;m0f0a0b0c0d0&quot;,&quot;mapdisp&quot;:&quot;0&quot;,&quot;planinfokeywordon&quot;:&quot;1&quot;,&quot;tyfilteron&quot;:&quot;1&quot;,&quot;planinfokeyword&quot;:&quot;あ&quot;,&quot;area&quot;:&quot;A03&quot;}">北関東(752)</a></li><li><a href="/kokunai_hotel/list/shutoken/" class="spk_js-data-href-param" data-href-param="{&quot;hotellistsort&quot;:&quot;recommend&quot;,&quot;staynight&quot;:&quot;1&quot;,&quot;room&quot;:&quot;1&quot;,&quot;roomassign&quot;:&quot;m0f0a0b0c0d0&quot;,&quot;mapdisp&quot;:&quot;0&quot;,&quot;planinfokeywordon&quot;:&quot;1&quot;,&quot;tyfilteron&quot;:&quot;1&quot;,&quot;planinfokeyword&quot;:&quot;あ&quot;,&quot;area&quot;:&quot;A04&quot;}">首都圏(1914)</a></li><li><a href="/kokunai_hotel/list/koshinetsu/" class="spk_js-data-href-param" data-href-param="{&quot;hotellistsort&quot;:&quot;recommend&quot;,&quot;staynight&quot;:&quot;1&quot;,&quot;room&quot;:&quot;1&quot;,&quot;roomassign&quot;:&quot;m0f0a0b0c0d0&quot;,&quot;mapdisp&quot;:&quot;0&quot;,&quot;planinfokeywordon&quot;:&quot;1&quot;,&quot;tyfilteron&quot;:&quot;1&quot;,&quot;planinfokeyword&quot;:&quot;あ&quot;,&quot;area&quot;:&quot;A05&quot;}">甲信越(1299)</a></li><li><a href="/kokunai_hotel/list/tokai/" class="spk_js-data-href-param" data-href-param="{&quot;hotellistsort&quot;:&quot;recommend&quot;,&quot;staynight&quot;:&quot;1&quot;,&quot;room&quot;:&quot;1&quot;,&quot;roomassign&quot;:&quot;m0f0a0b0c0d0&quot;,&quot;mapdisp&quot;:&quot;0&quot;,&quot;planinfokeywordon&quot;:&quot;1&quot;,&quot;tyfilteron&quot;:&quot;1&quot;,&quot;planinfokeyword&quot;:&quot;あ&quot;,&quot;area&quot;:&quot;A06&quot;}">東海(1559)</a></li><li><a href="/kokunai_hotel/list/hokuriku/" class="spk_js-data-href-param" data-href-param="{&quot;hotellistsort&quot;:&quot;recommend&quot;,&quot;staynight&quot;:&quot;1&quot;,&quot;room&quot;:&quot;1&quot;,&quot;roomassign&quot;:&quot;m0f0a0b0c0d0&quot;,&quot;mapdisp&quot;:&quot;0&quot;,&quot;planinfokeywordon&quot;:&quot;1&quot;,&quot;tyfilteron&quot;:&quot;1&quot;,&quot;planinfokeyword&quot;:&quot;あ&quot;,&quot;area&quot;:&quot;A07&quot;}">北陸(496)</a></li><li><a href="/kokunai_hotel/list/kinki/" class="spk_js-data-href-param" data-href-param="{&quot;hotellistsort&quot;:&quot;recommend&quot;,&quot;staynight&quot;:&quot;1&quot;,&quot;room&quot;:&quot;1&quot;,&quot;roomassign&quot;:&quot;m0f0a0b0c0d0&quot;,&quot;mapdisp&quot;:&quot;0&quot;,&quot;planinfokeywordon&quot;:&quot;1&quot;,&quot;tyfilteron&quot;:&quot;1&quot;,&quot;planinfokeyword&quot;:&quot;あ&quot;,&quot;area&quot;:&quot;A08&quot;}">近畿(2001)</a></li><li><a href="/kokunai_hotel/list/chugoku/" class="spk_js-data-href-param" data-href-param="{&quot;hotellistsort&quot;:&quot;recommend&quot;,&quot;staynight&quot;:&quot;1&quot;,&quot;room&quot;:&quot;1&quot;,&quot;roomassign&quot;:&quot;m0f0a0b0c0d0&quot;,&quot;mapdisp&quot;:&quot;0&quot;,&quot;planinfokeywordon&quot;:&quot;1&quot;,&quot;tyfilteron&quot;:&quot;1&quot;,&quot;planinfokeyword&quot;:&quot;あ&quot;,&quot;area&quot;:&quot;A09&quot;}">中国(792)</a></li><li><a href="/kokunai_hotel/list/shikoku/" class="spk_js-data-href-param" data-href-param="{&quot;hotellistsort&quot;:&quot;recommend&quot;,&quot;staynight&quot;:&quot;1&quot;,&quot;room&quot;:&quot;1&quot;,&quot;roomassign&quot;:&quot;m0f0a0b0c0d0&quot;,&quot;mapdisp&quot;:&quot;0&quot;,&quot;planinfokeywordon&quot;:&quot;1&quot;,&quot;tyfilteron&quot;:&quot;1&quot;,&quot;planinfokeyword&quot;:&quot;あ&quot;,&quot;area&quot;:&quot;A10&quot;}">四国(408)</a></li><li><a href="/kokunai_hotel/list/kyushu/" class="spk_js-data-href-param" data-href-param="{&quot;hotellistsort&quot;:&quot;recommend&quot;,&quot;staynight&quot;:&quot;1&quot;,&quot;room&quot;:&quot;1&quot;,&quot;roomassign&quot;:&quot;m0f0a0b0c0d0&quot;,&quot;mapdisp&quot;:&quot;0&quot;,&quot;planinfokeywordon&quot;:&quot;1&quot;,&quot;tyfilteron&quot;:&quot;1&quot;,&quot;planinfokeyword&quot;:&quot;あ&quot;,&quot;area&quot;:&quot;A11&quot;}">九州(1558)</a></li><li><a href="/kokunai_hotel/list/okinawa/" class="spk_js-data-href-param" data-href-param="{&quot;hotellistsort&quot;:&quot;recommend&quot;,&quot;staynight&quot;:&quot;1&quot;,&quot;room&quot;:&quot;1&quot;,&quot;roomassign&quot;:&quot;m0f0a0b0c0d0&quot;,&quot;mapdisp&quot;:&quot;0&quot;,&quot;planinfokeywordon&quot;:&quot;1&quot;,&quot;tyfilteron&quot;:&quot;1&quot;,&quot;planinfokeyword&quot;:&quot;あ&quot;,&quot;area&quot;:&quot;A12&quot;}">沖縄(575)</a></li>
                </ul>
            </div>

        </section>
    </aside>

@include('layouts.footer')
<script src="https://maps.googleapis.com/maps/api/js?v=3&client=gme-jtbcorporation&channel=ijtb_dom_hr&language=ja&region=JP"></script>
<script type="text/javascript" src="/js/main.92e91aa.js"></script>
<script type="text/javascript" src="/js/tag.js" defer></script>



@endsection
