@extends('layouts.app')
@section('content')
<h2 class="admin_title">管理システム</h2>
  @if ($errors->any())  {{--  エラーがあれば出力する --}}
      @foreach ($errors->all() as $error)
          <div>{{ $error }}</div>
      @endforeach
  @endif
<form class="form" method="post" action="{{ url('admin/login') }}">
  @csrf
  <dl>
    <div>
      <dt>管理者ID :</dt>
      <dd><input type="text" name="user_id" value=""/></dd>
    </div>
    <div>
      <dt>パスワード :</dt>
      <dd><input type="password" name="password" value="" /></dd>
    </div>
    <div class="admin_button">
      <input type="submit" value="ログイン" />
    </div>
  </dl>
</form>
@endsection