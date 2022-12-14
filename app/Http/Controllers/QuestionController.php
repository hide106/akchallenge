<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{   
    public function showProblem(Request $request)
    {
        $data =  [
            'grade' => $request->grade,
            'unit' => $request->unit,
            'level' => $request->level,
            'ans' => $request->ans
        ];
        return view('akchg.mathprob', $data);
    }

    public function gradeProblem(Request $request)
    {
        $math_ans =[
            // 中学1年
            [
                // 初級
                [
                    // 1 正の数・負の数　 [解答, 各設問の問題数]
                    [[-0.8,120,-36,-14,4,3,5,8,12,8,-1,2,3],[1,1,1,1,2,2,1,1,1,2]],
                    // 2 文字の式
                    [[100,30,10,5,-15,6,5,4,24,9,2,3,5,8,2,4,7,500,50],[2,2,1,2,2,2,2,2,2,2]],
                    // 3 方程式
                    [[8,5,1,-2,3,9,-6,35,-9,-4],[1,1,1,1,1,1,1,1,1,1]],
                    // 4 変化と対応
                    [[3,4,12,12,-3,36,20,100,4,6,3],[2,1,1,1,1,1,1,1,1,1]],
                    // 5 平面・空間図形
                    [[2,8,54,168,110,144,36,144,104,168,128,144,48,48],[2,1,1,1,1,1,2,1,2,2]],
                ],
                // 中級
                [
                    // 1 正の数・負の数
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 2 文字の式
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 3 方程式
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 4 変化と対応
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 5 平面・空間図形
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                ],
                // 上級
                [
                    // 1 正の数・負の数
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 2 文字の式
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 3 方程式
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 4 変化と対応
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 5 平面・空間図形
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                ],
            ],
            // 中学2年
            [
                // 初級
                [
                    // 1 式の計算
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 2 連立方程式
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 3 一次関数
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 4 図形の性質
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 5 場合の数と確率
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                ],
                // 中級
                [
                    // 1 式の計算
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 2 連立方程式
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 3 一次関数
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 4 図形の性質
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 5 場合の数と確率
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                ],
                // 上級
                [
                    // 1 式の計算
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 2 連立方程式
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 3 一次関数
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 4 図形の性質
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 5 場合の数と確率
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                ],
            ],
            // 中学3年
            [
                // 初級
                [
                    // 1 式の展開と因数分解
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 2 平方根
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 3 二次方程式
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 4 関数y=ax^2
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 5 図形と相似
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 6 円の性質と三平方の定理
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                ],
                // 中級
                [
                    // 1 式の展開と因数分解
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 2 平方根
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 3 二次方程式
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 4 関数y=ax^2
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 5 図形と相似
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 6 円の性質と三平方の定理
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                ],
                // 上級
                [
                    // 1 式の展開と因数分解
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 2 平方根
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 3 二次方程式
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 4 関数y=ax^2
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 5 図形と相似
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                    // 6 円の性質と三平方の定理
                    [[0,0,0,0,0,0,0,0,0,0],[1,1,1,1,1,1,1,1,1,1]],
                ],
            ],    
        ];

        $grade = (int)$request->grade -1;
        $unit = (int)$request->unit - 1;
        $level = (int)$request->level - 1;
        $ans = (int)$request->ans_n;

        $correct_question = [0,0,0,0,0,0,0,0,0,0];

        $score_total=0;
        $perfect_score=0;
        $current_p = 0; // 解答の現在位置
        $question_num = 0; // 各設問の問題数

        // ユーザーの解答を取得
        $user_ans = array();
        for ($i=0; $i < $ans; $i++){
            $user_ans[$i] = $request->input("ans.".strval($i));
        }


        // ユーザーの解答チェック
        for ($i=0; $i<10; $i++)
        {
            $question_num = $math_ans[$grade][$level][$unit][1][$i];
            $scoring = 1;

            for ($j=0; $j< $question_num; $j++)
            {
                if (($user_ans[$current_p] != $math_ans[$grade][$level][$unit][0][$current_p]) || is_null($user_ans[$current_p]))
                {
                    $scoring = 0;
                }
                $current_p++;
            }
            if ($scoring == 1)
            {
                $score_total++;
                $correct_question[$i] = 1;
            }
        }

        // 合否処理
        if ( $score_total >= 7 )
        {
            $user_id = $request->session()->get('id');
            $update_param = $grade+1 . "_" . $unit+1 . "_" . $level+1;

            // mathデーブルを合格に更新
            DB::table('math')->where('user_id', $user_id)->update([$update_param => True]);

            // sessionのmathテーブルを更新
            $db_math = DB::table('math')->where('user_id', $user_id)->first();
            $request->session()->put('math_table', $db_math);

            $msg = "合格";
            if ($score_total == 10)
            {
                $perfect_score = 1;
            }

            
        }
        else {
            $msg = "不合格";
        }

        return view('akchg.result')->with([
            "msg" => $msg,
            "correct_question" => $correct_question,
            "perfect_score" => $perfect_score,
            "grade" => $grade+1
        ]);
    }
}
