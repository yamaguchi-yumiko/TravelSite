<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserListController extends Controller
{
    function showUserList(){
		$admin_user_list = Auth::guard('admin')->user()::orderBy("id", "desc")->paginate(10);
		return view("admin.admin_user", [
			"admin_users" => $admin_user_list
		]);
	}

	public function __construct(){
		$this->middleware('admin.auth');
	}
}
