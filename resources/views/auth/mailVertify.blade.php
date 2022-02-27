@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register.pre_register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email-confirm" class="col-md-4 col-form-label text-md-right">メールアドレス再入力</label>

                            <div class="col-md-6">
                                <input id="email-confirm" type="email" class="form-control" name="email_confirmation" value="{{ old('email_confirmation') }}" required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <ul class="kiyaku">
                                <li><a href="http://www.jtb.co.jp/myjtb/contract/index.asp" target="_blank" class="linkStandard">JTBトラベルメンバー会員規約</a></li>
                                <li><a href="http://www.jtbcorp.jp/jp/privacy/" target="_blank" class="linkStandard">プライバシーポリシー</a></li>
                            </ul>

                            <p class="agreeCheckTxt">
                                <input name="id_privacy" type="checkbox" id="_ctl0__ctl6_idPrivacy" required>
                                <label id="_ctl0__ctl6_idPrivacyLabel" class="form_checkbox" for="_ctl0__ctl6_idPrivacy">
                                    <strong>JTBトラベルメンバー会員規約およびプライバシーポリシーに同意します。</strong>
                                    <span class="abs">必須</span>
                                </label>
                            </p>
                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    確認メールを送信する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@stop

@section('script')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@stop
