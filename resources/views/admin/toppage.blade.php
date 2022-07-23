@extends('layouts.app')

@section('content')


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>管理画面</title>
    </head>
    <body class="antialiased">
        <h2>管理画面</h2>
        ログイン中：{{ Auth::guard('admin')->user('admin')->last_name ?? 'undefined' }}
        {{ Auth::guard('admin')->user('admin')->first_name ?? 'undefined' }}
        <ul>
            <li>
                <a href="{{ url('admin/admin_user_list') }}" class="">管理者一覧</a>
            </li>
            <li>
                <a href="{{ url('admin/user_list') }}" class="">顧客一覧</a>
            </li>
            <li>
                <a href="{{ url('admin/hotel_list') }}" class="">ホテル一覧</a>
            </li>
        </ul>
        <form method="post" action="{{ url('admin/logout') }}">
            @csrf
            <input type="submit" value="ログアウト" />
        </form>
    </body>
</html>


@endsection
