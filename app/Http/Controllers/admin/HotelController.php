<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    function hotelList(){
		$hotels_list = \DB::table('hotels')->orderBy("HOTEL_NUMBER", "desc")->paginate(10);
		return view("admin.hotel_list", [
			"hotels" => $hotels_list
		]);
	}

	public function __construct(){
		$this->middleware('admin.auth');
	}
}
