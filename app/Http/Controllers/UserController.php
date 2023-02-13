<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * ホーム画面表示
     *
     * @param Request $request
     * @return view
     */
    public function index(Request $request)
    {
        //サイドバーにログイン情報表示
        $user = $request->session()->get('user');

        return view('home.home', compact('user'));
    }

}