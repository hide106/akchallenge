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

        return redirect('/login');
    }
}
