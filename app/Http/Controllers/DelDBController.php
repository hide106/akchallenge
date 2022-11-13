<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DelDBController extends Controller
{
    public function showDelDBForm(Request $request)
    {
        return view('akchg.deldb');
    }

    public function delDB(Request $request)
    {
        DB::table('akuser')->delete();
        DB::table('math')->delete();

        return redirect()->route('login');
    }
}
