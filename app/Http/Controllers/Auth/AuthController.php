<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * ログイン画面表示
     *  @return view
     */
    public function showLogin()
    {
        return view('login.login_form');
    }

    /**
     * ログイン
     * @param Request $request
     * @return void
     */
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        // if (Auth::attempt($credentials)) {
        if (!empty($credentials['email']) || !empty($credentials['password']) ) {
            $user = User::where('email',$credentials['email'])->first();
            if (isset($user) && $user->password == $credentials['password']){
                //sessionに保存する
                $request->session()->put('user', $user);

                //return redirect('/home')->with('login_success','ログイン成功しました!');
            return view('home.home', compact('user'));
            }
        }

        return back()->with([
            'Login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }

    /**
     * ログアウト
     * @param Request $request
     * @return void
     */
    public function destroy(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

}
