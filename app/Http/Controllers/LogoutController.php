<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $request->session()->forget('id');

        return redirect('/login');
    }
}
