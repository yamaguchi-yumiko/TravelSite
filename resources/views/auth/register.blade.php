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
                    <form method="POST" action="{{ route('register.confirm')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" name="id" value="{{ $user->id }}">
                        <input type="hidden" class="form-control" name="expires" value="{{ $expiration }}">
                        <input type="hidden" class="form-control" name="signature" value="{{ $user->email_verify_token }}">
                        <input type="hidden" class="form-control" name="email" value="{{ $user->email }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-4">
                                <span>{{ $user->email }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_id" class="col-md-3 col-form-label text-md-right">{{ 'User ID' }}</label>

                            <div class="col-md-4">
                                <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ session('user_id') }}" required autofocus>
                                <p id="userIdExistsMessage"></p>
                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4"> 
                                <button type="button" id="userIdExists" class="btn btn-primary ">利用可能な会員IDか確認する</button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-4">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ session('last_name') }}" required>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ session('first_name') }}" required>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name_kana" class="col-md-3 col-form-label text-md-right">{{ 'Kana' }}</label>

                            <div class="col-md-4">
                                <input id="last_name_kana" type="text" class="form-control @error('last_name_kana') is-invalid @enderror" name="last_name_kana" value="{{ session('last_name_kana') }}" required>

                                @error('last_name_kana')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <input id="first_name_kana" type="text" class="form-control @error('first_name_kana') is-invalid @enderror" name="first_name_kana" value="{{ session('first_name_kana') }}" required>

                                @error('first_name_kana')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-md-right">{{ 'Gender' }}</label>

                            <div class="col-md-4">
                                <input id="gender1" type="radio" class="@error('gender') is-invalid @enderror" name="gender" value="1" required checked>
                                <label for="gender1" class="col-form-label text-md-right">{{ 'Man' }}</label>
                                <input id="gender2" type="radio" class="@error('gender') is-invalid @enderror" name="gender" value="2" required>
                                <label for="gender2" class="col-form-label text-md-right">{{ 'Woman' }}</label>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthyear" class="col-md-3 col-form-label text-md-right">{{ 'Birthday' }}</label>

                            <div class="col-md-2">
                                <input id="birthyear" type="text" class="form-control @error('birthyear') is-invalid @enderror" name="birthyear" value="{{ session('birthyear') }}" required>
                                @error('birthyear')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-2">
                                <select id="birthmonth" name="birthmonth" class="form-control">
                                    <option value="">---</option>
                                    @foreach(range(1, 12) as $month)
                                    @php $month = str_pad($month, 2, 0, STR_PAD_LEFT);@endphp
                                    <option
                                        value="{{ $month }}"
                                        {{ session('birthmonth') == $month ? 'selected' : '' }}
                                    >{{ $month }}</option>
                                    @endforeach
                                </select>
                                @error('birthmonth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-2">
                                <select id="birthday" name="birthday" class="form-control">
                                    <option value="">---</option>
                                    @foreach(range(1, 31) as $day)
                                    @php $day = str_pad($day, 2, 0, STR_PAD_LEFT);@endphp
                                    <option
                                        value="{{ $day }}"
                                        {{ session('birthday') == $day ? 'selected' : '' }}
                                    >{{ $day }}</option>
                                    @endforeach
                                </select>
                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postal_code" class="col-md-3 col-form-label text-md-right">{{ 'Postal Code' }}</label>

                            <div class="col-md-2">
                                <input id="postal_code1" type="text" class="form-control zip @error('postal_code1') is-invalid @enderror" name="postal_code1" value="{{ session('postal_code1') }}" maxlength="3" required>

                                @error('postal_code1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <input id="postal_code2" type="text" class="form-control zip @error('postal_code2') is-invalid @enderror" name="postal_code2" value="{{ session('postal_code2') }}" maxlength="4" required>

                                @error('postal_code2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary ajaxzip3">
                                    {{ '簡単住所入力' }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-3 col-form-label text-md-right">{{ 'Address' }}</label>

                            <div class="col-md-3">
                                <select id="prefecture_cd" class="form-control pref" name="prefecture_cd" required>
                                    <option value="">選択してください</option>
                                    @foreach($prefecture as $val)
                                    <option
                                            value="{{ $val->prefecture_cd }}"
                                            {{ session('prefecture_cd') == $val->prefecture_cd ? 'selected' : '' }}
                                    >{{ $val->name }}</option>
                                    @endforeach
                                </select>

                                @error('prefecture_cd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-3 col-form-label text-md-right"></label>

                            <div class="col-md-3">
                                <input id="city_name" type="text" class="form-control addr1 @error('city_name') is-invalid @enderror" name="city_name" value="{{ session('city_name') }}" required>

                                @error('city_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <input id="town_name" type="text" class="form-control addr2 @error('town_name') is-invalid @enderror" name="town_name" value="{{ session('town_name') }}" required>

                                @error('town_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <input id="other_address" type="text" class="form-control addr3 @error('other_address') is-invalid @enderror" name="other_address" value="{{ session('other_address') }}" required>

                                @error('other_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel" class="col-md-3 col-form-label text-md-right">{{ 'Tel' }}</label>

                            <div class="col-md-2">
                                <input id="tel1" type="text" class="form-control @error('tel1') is-invalid @enderror" name="tel1" value="{{ session('tel1') }}" maxlength="5" required>

                                @error('tel1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-2">
                                <input id="tel2" type="text" class="form-control @error('tel2') is-invalid @enderror" name="tel2" value="{{ session('tel2') }}" maxlength="4" required>

                                @error('tel2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-2">
                                <input id="tel3" type="text" class="form-control @error('tel3') is-invalid @enderror" name="tel3" value="{{ session('tel3') }}" maxlength="4" required>

                                @error('tel3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emergency_contact" class="col-md-3 col-form-label text-md-right">{{ 'Emergency Contact' }}</label>

                            <div class="col-md-2">
                                <input id="emergency_contact1" type="text" class="form-control @error('emergency_contact1') is-invalid @enderror" name="emergency_contact1" value="{{ session('emergency_contact1') }}" maxlength="5">

                                @error('emergency_contact1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-2">
                                <input id="emergency_contact2" type="text" class="form-control @error('emergency_contact2') is-invalid @enderror" name="emergency_contact2" value="{{ session('emergency_contact2') }}" maxlength="4">

                                @error('emergency_contact2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-2">
                                <input id="emergency_contact3" type="text" class="form-control @error('emergency_contact3') is-invalid @enderror" name="emergency_contact3" value="{{ session('emergency_contact3') }}" maxlength="4">

                                @error('emergency_contact3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ 'Confirm' }}
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
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('js/register.js') }}"></script>
@stop
