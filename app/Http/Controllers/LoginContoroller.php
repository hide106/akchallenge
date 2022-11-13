<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginContoroller extends Controller
{
    public function showLoginForm(Request $request)
    {
        return view('akchg.index');
    }

    public function login(Request $request)
    {
        $mail = $request->mail;
        $password = $request->password;

        if (is_null($mail))
        {
            $msg = '※メールアドレスを入力してください。';

            return view('akchg.index',  ['msg' => $msg]);
        }

        $db_akuser = DB::table('akuser')->where('mail', $mail)->first();

        if( !is_null( $db_akuser ) && Hash::check($password, $db_akuser->password))
        {
            $db_math = DB::table('math')->where('user_id', $db_akuser->id)->first();
            $request->session()->put('id', $db_akuser->id);
            $request->session()->put('math_table', $db_math);

            return redirect()->route('subject');
        } else {
            $msg = '※メールアドレスまたはパスワードが違います。';

            return view('akchg.index',  ['msg' => $msg]);
        }
    }
}
