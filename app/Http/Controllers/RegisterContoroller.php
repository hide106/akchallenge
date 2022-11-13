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

        // 登録したデータのIDを取得
        $db_item = DB::table('akuser')->where('mail', $request->mail)->first();
        $user_id = $db_item->id;

        $param = [
            'user_id' => $user_id,
            '1_1_1' => false,'1_1_2' => false,'1_1_3' => false,
            '1_2_1' => false,'1_2_2' => false,'1_2_3' => false,
            '1_3_1' => false,'1_3_2' => false,'1_3_3' => false,
            '1_4_1' => false,'1_4_2' => false,'1_4_3' => false,
            '1_5_1' => false,'1_5_2' => false,'1_5_3' => false,
            '2_1_1' => false,'2_1_2' => false,'2_1_3' => false,
            '2_2_1' => false,'2_2_2' => false,'2_2_3' => false,
            '2_3_1' => false,'2_3_2' => false,'2_3_3' => false,
            '2_4_1' => false,'2_4_2' => false,'2_4_3' => false,
            '2_5_1' => false,'2_5_2' => false,'2_5_3' => false,
            '3_1_1' => false,'3_1_2' => false,'3_1_3' => false,
            '3_2_1' => false,'3_2_2' => false,'3_2_3' => false,
            '3_3_1' => false,'3_3_2' => false,'3_3_3' => false,
            '3_4_1' => false,'3_4_2' => false,'3_4_3' => false,
            '3_5_1' => false,'3_5_2' => false,'3_5_3' => false,
            '3_6_1' => false,'3_6_2' => false,'3_6_3' => false,
        ];

        DB::table('math')->insert($param);

        return redirect()->route('login');
    }
}
