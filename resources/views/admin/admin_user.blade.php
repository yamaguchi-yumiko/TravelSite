@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
		<h3>管理者一覧</h3>
		<div class="">

			<ul>
				@foreach ($admin_users as $admin_users)
				<li>
					名前: {{ $admin_users->last_name }}
					{{ $admin_users->first_name }}
					<li>権限レベル:{{ $admin_users->admin_level }}</li>
					<li>作成日:{{ $admin_users->ins_date }}</li>
					<li>更新日:{{ $admin_users->upd_date }}</li>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection​