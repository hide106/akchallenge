<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('checklogin');
    }

    public function showSubjectPage(Request $request)
    {
        return view('akchg.subject');
    }

    public function showMathGradePage(Request $request)
    {
        return view('akchg.mathgrade');
    }

    public function showMath1stGradePage(Request $request)
    {
        $math_table = $request->session()->get('math_table');
        return view('akchg.math1st', ['math_table' => $math_table]);
    }

    public function showMath2ndGradePage(Request $request)
    {
        $math_table = $request->session()->get('math_table');
        return view('akchg.math2nd', ['math_table' => $math_table]);
    }

    public function showMath3rdGradePage(Request $request)
    {
        $math_table = $request->session()->get('math_table');
        return view('akchg.math3rd', ['math_table' => $math_table]);
    }
}
