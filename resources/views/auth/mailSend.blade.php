@extends('master')

@section('content')
<!-- 登録ページ本体 -->

<span id="_ctl0_idDspMainCtrl">


<!-- breadcrumbs -->

    <ul itemscope="" itemtype="http://schema.org/BreadcrumbList" class="jtb-nav-breadcrumb">
	    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
	    <a itemprop="item" href="http://www.jtb.co.jp/"><span itemprop="name">JTBホーム</span></a><meta itemprop="position" content="1">
	    </li>
	    <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">MyJTB（JTBトラベルメンバー）</li>
    </ul>

<!-- /breadcrumbs --> 

<!-- contents_area -->
<div id="contents_area">

    
        <!-- setp_navigation -->
        <div class="setp_navigation">
            <div class="setp_navigation-wrap stepall-05">
                <div class="setp_navigation_bar-wrap">
                    <div class="setp_navigation_bar"></div>
                    <div class="setp_navigation_bar-black setp_navigation_bar-black--step2"></div>
                    <div class="setp_navigation_circle-check setp_navigation_circle-black setp_navigation_circle-01"></div>
                    <div class="setp_navigation_circle-black setp_navigation_circle-02"></div>
                    <div class="setp_navigation_circle-grey setp_navigation_circle-03"></div>
                    <div class="setp_navigation_circle-grey setp_navigation_circle-04"></div>
                    <div class="setp_navigation_circle-grey setp_navigation_circle-05"></div>
                </div>
                <div class="setp_navigation_txt-box">
                    <p class="setp_navigation_txt">メール<span>アドレス</span>入力</p>
                    <p class="setp_navigation_txt setp_navigation_txt--current"><span>メール</span>送信完了</p>
                    <p class="setp_navigation_txt"><span>登録情報</span>入力</p>
                    <p class="setp_navigation_txt"><span>登録情報</span>確認</p>
                    <p class="setp_navigation_txt">登録完了</p>
                </div>
            </div>
        </div>
        <!-- /setp_navigation -->
    

    
        <h1>JTBトラベルメンバー会員登録<span>【メール送信完了】</span></h1>
    
    
    <div id="R003_cont">
        <div class="sect">
            
                <p class="page_txt">
                    お客様のメールアドレスにJTBトラベルメンバー登録確認メールをお送りしました。<br>
                    メールに記載の登録用URLをクリックして会員登録手続きを続けてください。
                </p>
            
            
        </div>
        <div class="sect clearfix">
            <div class="sect_l">
                <figure>
                    <img src="/myjtb/images/nayose2017/text_mail_kakunin02.gif" alt="お送りしたメール文中の[登録用URL]をクリックしてください。" width="599" height="281">
                </figure>
            </div>
            <div class="sect_r">
                <h3><span class="att">【注意】必ずお読みください</span></h3>
                <ul>
                    <li>※会員登録確認メールが迷惑フォルダに入ってしまうことがあります。</li>
<li>※入力されたメールアドレスが間違っているとメールが届きません。</li>
<li>※予約途中の場合には、20分以内に手続きを行ってください。20分以上経過すると予約手続きが行えなくなります。</li>
<li>※携帯メールアドレスを入力した方で、受信メールのドメイン制限をされている方は｢jtb.co.jp｣を解除して下さい。</li>

                </ul>
            </div>
        </div>
    </div>

    
        <!-- footmenu -->
        <p class="link_pagetop tar mb10"><a href="#" onclick="backToTop(); return false">ページトップへ戻る</a></p>

<div id="footmenu">
	<ul class="clearfix">
		<li class="fontSmaller"><a href="http://www.jtb.co.jp/myjtb/">MyJTBトップ</a></li>
		<li class="fontSmaller"><a href="https://member.jtb.co.jp/myjtb/login.aspx?pn=056&siteid=myreserved">予約内容の確認/取消</a></li>
		<li class="fontSmaller"><a href="https://member.jtb.co.jp/myjtb/login.aspx?pn=128&siteid=myprofiles">登録情報の確認/変更</a></li>
		<li class="fontSmaller"><a href="https://member.jtb.co.jp/myjtb/Member.aspx?pn=129&siteid=myphistory">ポイントの確認/利用</a></li>
		<li class="fontSmaller"><a href="http://www.jtb.co.jp/myjtb/service/">会員特典</a></li>
		<li class="fontSmaller"><a href="http://www.jtb.co.jp/myjtb/inquiry/index.asp">JTBトラベルメンバーお問合せ</a></li>
		<li class="fontSmaller"><a href="https://member.jtb.co.jp/myjtb/member.aspx?pn=034">退会手続き</a></li>
	</ul>
</div>
        <!-- /footmenu -->
    
</div>

</span>
@endsection
