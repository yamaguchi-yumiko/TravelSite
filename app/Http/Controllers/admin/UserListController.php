<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserListController extends Controller
{
    function showUserList(){
		$user_list = \DB::table('users')->orderBy("id", "desc")->paginate(10);
		return view("admin.user_list", [
			"users" => $user_list
		]);
	}

	public function __construct(){
		$this->middleware('admin.auth');
	}
}
