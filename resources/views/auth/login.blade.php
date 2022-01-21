@extends('master')

@section('content')
<!-- breadcrumbs -->
<div id="breadcrumbs">
    <p class="fs_12"><a href="http://www.jtb.co.jp">JTBホーム</a> ＞ JTBトラベルメンバーログイン</p>
  </div>
<!-- /breadcrumbs --> 

<!-- contents -->
<div id="contentsarea"> 

    <div class="login_txt">
		<p>「るるぶトラベル会員」の会員組織も「JTBトラベルメンバー」になりました。旧るるぶトラベル会員のお客様は、るるぶトラベルサイトでご利用のID（メールアドレス）とパスワードでログインしていただけます。</p>
		
		<p class="login_link"><a href="http://www.jtb.co.jp/myjtb/service/join/index.asp" target="_blank">「JTBトラベルメンバー」「旧るるぶトラベル会員」の会員統合手続きのご案内はこちら</a></p>
	</div>

	<!--ログイン-->
	
	<div id="login_box" class="clearfix">
		<div id="login_box_r" >
			<div class="login-input" >
				<p class="txt-login-input">JTBトラベルメンバーのお客様</p>
			</div>

			<div id="bk_sen" >
				<form id="Form1" name="Form1" method="POST" action="{{ route('login') }}">
					@csrf
					<p id="login_annai">登録した会員ID、パスワードでログインして下さい。<br>                    
					<span class="red">（旧：JTB INFO CREW会員の方もこちら）</span></p>

					<div id="login_bk_ue">
						<img src="images/login_bk_top.gif" width="322" height="6">
					</div>
					<div id="login_area">
                        <div id="login_bk_sita">
							<div id="login_bk_gray">
								<div id="login_waku">
									<table id="input_box">
										<tr>
											<td class="sp_th">会員ID：</td>
											<td>
												<input id="user_id" type="user_id" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id" autofocus maxlength="100">
												<span class="help">※半角英数字</span>
                                            </td>
										</tr>
										<tr>
											<td class="sp_th">パスワード：</td>
											<td>
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" maxlength="40">
												<span class="help">※半角英数字</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="login-form-err">
                            @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
                        
						<p id="img_middle">
							<button type="submit" class="btn btn-primary">
								ログインする
							</button>
						</p>
					</div>
				</form>
				@if (Route::has('password.request'))
				<div class="id-pas-forget">
					<p class="txt-id-pas-forget">IDまたはパスワードを忘れた方</p>
				</div>
				<div class="karte-g _karte-g__2MoE_">
					<div class="karte-widget" id="karte-4314002">
						<div class="karte-widget__backdrop"></div>
						<div class="karte-widget__container">
							<div class="karte-widget__content _karte-widget__content__2MoE_">
								<div class="krt-html">
									<!-- <p class="link_area">IDを忘れた方は<a href="https://www.jtb.co.jp/myjtb/help/6.asp">こちら</a>へ</p> -->
									<p class="link_area">パスワードを忘れた方は<a href="{{ route('password.request') }}">こちら</a>へ</p>
									<p class="_cap__2MoE_">※IDとパスワードの両方が分からない方は、<br>「IDを忘れた方はこちらへ」からご確認ください。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif
                
			</div>
		</div>
		<!--/ログイン--> 

		<!--/新規会員登録--> 
         
        <div id="login_box_l">
        
        <a href="{{ route('register.vertify') }}">
			<img src="{{ asset('images/banner_new.gif') }}" alt="JTBトラベルメンバーに登録しよう（登録無料）特徴1 お得情報が届くメールマガジンをご購読いただけます！特徴2 会員なら旅行予約でポイント還元！特徴3 4つのステージにより様々な特典やサービスを受けられます！新規会員登録（無料）" width="344" height="260">
		</a>
	</div>
</div>
@endsection

@section('style')
<style>
	._karte-g__2MoE_ ._karte-widget__content__2MoE_ p a {
		color: #3498DB;
	}
	._karte-g__2MoE_ ._karte-widget__content__2MoE_ ._cap__2MoE_ {
		color: #6b6e71;
		font-size: 11px;
		text-align: left;
		margin: 0 0 10px 10px;
	}
</style>
@stop