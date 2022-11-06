<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 2 文字の式
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 3 方程式
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 4 変化と対応
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 5 平面・空間図形
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                ],
                // 上級
                [
                    // 1 正の数・負の数
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 2 文字の式
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 3 方程式
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 4 変化と対応
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 5 平面・空間図形
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                ],
            ],
            // 中学2年
            [
                // 初級
                [
                    // 1 式の計算
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 2 連立方程式
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 3 一次関数
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 4 図形の調べ方
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 5 図形の性質と証明
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 6 場合の数と確率
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 7 箱ひげ図とデータの活用
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                ],
                // 中級
                [
                    // 1 式の計算
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 2 連立方程式
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 3 一次関数
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 4 図形の調べ方
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 5 図形の性質と証明
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 6 場合の数と確率
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 7 箱ひげ図とデータの活用
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                ],
                // 上級
                [
                    // 1 式の計算
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 2 連立方程式
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 3 一次関数
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 4 図形の調べ方
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 5 図形の性質と証明
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 6 場合の数と確率
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 7 箱ひげ図とデータの活用
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                ],
            ],
            // 中学3年
            [
                // 初級
                [
                    // 1 式の展開と因数分解
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 2 平方根
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 3 二次方程式
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 4 関数y=ax^2
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 5 図形と相似
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 6 円の性質
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 7 三平方の定理
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 7 標本調査とデータの活用
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                ],
                // 中級
                [
                    // 1 式の展開と因数分解
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 2 平方根
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 3 二次方程式
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 4 関数y=ax^2
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 5 図形と相似
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 6 円の性質
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 7 三平方の定理
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 7 標本調査とデータの活用
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                ],
                // 上級
                [
                    // 1 式の展開と因数分解
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 2 平方根
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 3 二次方程式
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 4 関数y=ax^2
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 5 図形と相似
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 6 円の性質
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 7 三平方の定理
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                    // 7 標本調査とデータの活用
                    [[0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0]],
                ],
            ],    
        ];

        $grade = (int)$request->grade -1;
        $unit = (int)$request->unit - 1;
        $level = (int)$request->level - 1;
        $ans = (int)$request->ans_n;

        $score_total=0;
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
            $question_num = $math_ans[$grade][$unit][$level][1][$i];
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
            }
        }

        echo $score_total;
//        if ($user_ans[0] == $math_ans[$grade][$unit][$level] && !is_null($user_ans[0])){
//            return redirect('/subject');
//        } else {
//            return redirect('/login');
//        }
    }
}