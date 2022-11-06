<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class RegisterContoroller extends Controller
{

    public function showRegisterForm(Request $request)
    {
        return view('akchg.register');
    }

    public function register(Request $request)
    {
        /* 入力チェック */
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ];
        $messages = [
            'name.required' => 'ユーザー名を入力してください。',
            'mail.email' => 'メールアドレスを入力してください。',
            'password.required' => 'パスワードを入力してください。',
            'password.confirmed' => 'パスワードが異なります。',
        ];

        $validator = Validator::make($request->all(), $rules,  $messages);

        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }

        /* 同じメールアドレスが登録されていないかチェック */
        $db_item = DB::table('akuser')->where('mail', $request->mail)->first();

        if( !is_null($db_item) )
        {
            $msg = '※そのメールアドレスはすでに登録されています';

            return view('akchg.register',  ['msg' => $msg]);   
        }

        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'password' => Hash::make($request->password),
        ];

        DB::table('akuser')->insert($param);

        return redirect()->route('login');
    }
}
