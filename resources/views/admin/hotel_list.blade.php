@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
		<h3>ホテル一覧</h3>
		<div class="">

			<ul>
				@foreach ($hotels as $hotels_list)
				<li>
					ホテル名: {{ $hotels_list->HOTEL_NAME }}
					<li>削除フラグ:{{ $hotels_list->HOTEL_DEL }}</li>
					<li>作成日:{{ $hotels_list->HOTEL_SIGNUP_DATE }}</li>
					<li>更新日:{{ $hotels_list->HOTEL_UPDATE_DATE }}</li>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection​