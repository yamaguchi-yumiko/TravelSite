<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function kokunai_hotel(Request $request)
    {
        $data = [
            'area'=>$request->area,
            'godate'=>$request->godate,
            'staynight'=>$request->staynight,
            'roomperson'=>$request->roomperson,
        ];
        return view('searchResult', $data);
    }
}
