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

        $db_item = DB::table('akuser')->where('mail', $mail)->first();

        if(Hash::check($password, $db_item->password))
        {
            $id = $db_item->id;
            $request->session()->put('id', $id);

            return redirect()->route('subject');
        } else {
            $msg = '※メールアドレスまたはパスワードが違います。';

            return view('akchg.index',  ['msg' => $msg]);
        }
    }
}
