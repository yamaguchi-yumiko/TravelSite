@extends('master')

@section('content')
<!-- breadcrumbs -->
<div id="breadcrumbs">
    <p class="fs_12"><a href="http://www.jtb.co.jp">JTBホーム</a> ＞ 会員登録</p>
  </div>
<!-- /breadcrumbs --> 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register')}}">
                        @csrf
                        <input type="hidden" class="form-control" name="id" value="{{ session('id') }}">
                        <input type="hidden" class="form-control" name="expires" value="{{ session('expires') }}">
                        <input type="hidden" class="form-control" name="signature" value="{{ session('signature') }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-4">
                                <span>{{ session('email') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_id" class="col-md-3 col-form-label text-md-right">{{ 'User ID' }}</label>

                            <div class="col-md-4">
                                <span>{{ session('user_id') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <span>******</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-4">
                                <span>{{ session('last_name') }}</span>
                            </div>

                            <div class="col-md-4">
                                <span>{{ session('first_name') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name_kana" class="col-md-3 col-form-label text-md-right">{{ 'Kana' }}</label>

                            <div class="col-md-4">
                                <span>{{ session('last_name_kana') }}</span>
                            </div>

                            <div class="col-md-4">
                                <span>{{ session('first_name_kana') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">{{ 'Gender' }}</label>

                            <div class="col-md-4">
                                <span>{{ session('gender') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-md-3 col-form-label text-md-right">{{ 'Birthday' }}</label>

                            <div class="col-md-2">
                                <span>{{ session('birthyear') }}</span>
                            </div>

                            <div class="col-md-2">
                                <span>{{ session('birthmonth') }}</span>
                            </div>

                            <div class="col-md-2">
                                <span>{{ session('birthday') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postal_code" class="col-md-3 col-form-label text-md-right">{{ 'Postal Code' }}</label>

                            <div class="col-md-2">
                                <span>{{ session('postal_code') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-3 col-form-label text-md-right">{{ 'Address' }}</label>

                            <div class="col-md-3">
                                <span>{{ $prefecture->name . session('city_name') . session('town_name') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-3 col-form-label text-md-right"></label>

                            <div class="col-md-3">
                                <span>{{ session('other_address') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel" class="col-md-3 col-form-label text-md-right">{{ 'Tel' }}</label>

                            <div class="col-md-2">
                                <span>{{ session('tel1') }}</span>
                            </div>

                            <div class="col-md-2">
                                <span>{{ session('tel2') }}</span>
                            </div>

                            <div class="col-md-2">
                                <span>{{ session('tel3') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emergency_contact" class="col-md-3 col-form-label text-md-right">{{ 'Emergency Contact' }}</label>

                            <div class="col-md-2">
                                <span>{{ session('emergency_contact1') }}</span>
                            </div>

                            <div class="col-md-2">
                                <span>{{ session('emergency_contact2') }}</span>
                            </div>

                            <div class="col-md-2">
                                <span>{{ session('emergency_contact3') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <a href="{{ route('register.form', ['id' => session('id'), 'expires' => session('expires'), 'signature' => session('signature')]) }}" class="btn btn-primary">
                                    {{ 'back' }}
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    {{ 'Register' }}
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
