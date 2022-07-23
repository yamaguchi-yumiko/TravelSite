@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
		<h3>顧客一覧</h3>
		<div class="">

			<ul>
				@foreach ($users as $user_list)
				<li>
					名前: {{ $user_list->last_name }}
					{{ $user_list->first_name }}
					<li>メールアドレス:{{ $user_list->email }}</li>
					<li>作成日:{{ $user_list->ins_date }}</li>
					<li>更新日:{{ $user_list->upd_date }}</li>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection​