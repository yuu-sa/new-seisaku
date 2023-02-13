<?php

namespace App\Http\Controllers\Buth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ButhController extends Controller
{
    /**
     *  @return View
     */
    public function showtouroku()
    {
        return view('login.touroku_form');
    }

    public function touroku(Request $request)
    {
        //①バリデーション機能（入力内容のチェック）
        $request->validate([
            'nickname' => ['required'],
            'email' => ['email','unique:users'],
            'password' => ['required'],
            'password_confirmation' => ['required','same:password'],
        ]);

        //②usersテーブルへの登録処理
        $user = new User;
        $user->name = $request->nickname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        //③ログイン画面へ画面遷移
        return redirect('/');
    }
}