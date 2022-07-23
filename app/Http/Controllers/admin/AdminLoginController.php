<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    function showForm()
    {
        return view('admin.login');
    }

    function login(Request $request)
    {
        $credentials = $request->validate([ // 入力内容のチェック
            'user_id' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) { // ログイン試行
            if ($request->user('admin')?->admin_level > 0) { // 管理権限レベルが0でないか
                
                $request->session()->regenerate(); // セッション更新
                $request->session()->put("auth_admin", true);
                return redirect('/admin');
            } else {
                Auth::guard('admin')->logout(); // if文でログインしてしまっているので、ログアウトさせる

                $request->session()->regenerate(); // セッション更新

                return back()->withErrors([ // 権限レベルが0の場合
                    'error' => '権限がありません',
                ]);
            }
        }

        return back()->withErrors([ // ログインに失敗した場合
            'error' => 'IDかパスワードが間違えています。',
        ]);
    }
}
