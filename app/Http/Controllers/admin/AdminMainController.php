<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMainController extends Controller
{
    function show()
    {
        return view("admin.toppage");
    }
}
