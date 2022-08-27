<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/reserve.js') }}" defer></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header class="header">
        <p class="header_logo"><a href="#"><img src="/images/logo-jtb.png" alt=""></a></p>
    </header>
    <main class="py-4 main" id="reserve">
        @yield('content')
    </main>
    <footer class="footer">
        <img src="/images/logo-kotorikyo.png" alt="" class="logo_kotorikyo">
        <div class="footer_nav">
            <ul>
                <li>会社案内<img src="/images/ico-window.png" alt=""></li>
                <li>ニュースリリース<img src="/images/ico-window.png" alt=""></li>
                <li>標識・約款</li>
                <li>求人情報<img src="/images/ico-window.png" alt=""></li>
                <li>旅行条件書</li>
                <li>サイトマップ</li>
                <li>プライバシーポリシー<img src="/images/ico-window.png" alt=""></li>
                <li>ご利用案内</li>
                <li>システムメンテナンス</li>
            </ul>
        </div>
        <div class="footer_copyright">
            <p>Copyright&nbsp;JTB&nbsp;Corp.&nbsp;All&nbsp;rights&nbsp;reserved.</p>
        </div>
    </footer>
    <example-component></example-component>
</body>
<script>
    window.Laravel = {};
    window.Laravel.total = <?=json_encode($hotel_total_price ?? '')?>;
    window.Laravel.point = <?=json_encode($user_point ?? '')?>;
    window.Laravel.poinUse = <?=json_encode(old('point_use'))?>;

    window.Laravel.times = <?=json_encode(old('check_time'))?>;
    window.Laravel.emailOption = <?=json_encode(old('email_option'))?>;
    window.Laravel.postalFirst = <?=json_encode(old('postal_code_first'))?>;
    window.Laravel.postalSecond = <?=json_encode(old('postal_code_second'))?>;
    window.Laravel.addressPrefectures = <?=json_encode(old('address_prefectures'))?>;
    window.Laravel.addressCities = <?=json_encode(old('address_cities'))?>;
    window.Laravel.addressTown = <?=json_encode(old('address_town'))?>;
    window.Laravel.telFirst = <?=json_encode(old('tel_first'))?>;
    window.Laravel.telSecond = <?=json_encode(old('tel_second'))?>;
    window.Laravel.telThird = <?=json_encode(old('tel_third'))?>;
    window.Laravel.emergencyFirst = <?=json_encode(old('emergency_contact_first'))?>;
    window.Laravel.emergencySecond = <?=json_encode(old('emergency_contact_second'))?>;
    window.Laravel.emergencyThird = <?=json_encode(old('emergency_contact_third'))?>;
    window.Laravel.email = <?=json_encode(old('email'))?>;
    window.Laravel.emailConf = <?=json_encode(old('email_conf'))?>;
    window.Laravel.firstName = <?=json_encode(old('room_first_name'))?>;
    window.Laravel.lastName = <?=json_encode(old('room_last_name'))?>;

    window.Laravel.timeError = <?=json_encode($errors->has('check_time'))?>;
    window.Laravel.postalFirstError = <?=json_encode($errors->has('postal_code_first'))?>;
    window.Laravel.postalSecondError = <?=json_encode($errors->has('postal_code_second'))?>;
    window.Laravel.addressPrefecturesError = <?=json_encode($errors->has('address_prefectures'))?>;
    window.Laravel.addressCitiesError = <?=json_encode($errors->has('address_cities'))?>;
    window.Laravel.addressTownError = <?=json_encode($errors->has('address_town'))?>;
    window.Laravel.telFirstError = <?=json_encode($errors->has('tel_first'))?>;
    window.Laravel.telSecondError = <?=json_encode($errors->has('tel_second'))?>;
    window.Laravel.telThirdError = <?=json_encode($errors->has('tel_third'))?>;
    window.Laravel.emergencyFirstError = <?=json_encode($errors->has('emergency_contact_first'))?>;
    window.Laravel.emergencySecondError = <?=json_encode($errors->has('emergency_contact_second'))?>;
    window.Laravel.emergencyThirdError = <?=json_encode($errors->has('emergency_contact_third'))?>;
    window.Laravel.emailError = <?=json_encode($errors->has('email'))?>;

    window.Laravel.firstNameError = <?=json_encode($errors->has('room_first_name'))?>;
    window.Laravel.lastNameError = <?=json_encode($errors->has('room_last_name'))?>;
</script>

</html>
