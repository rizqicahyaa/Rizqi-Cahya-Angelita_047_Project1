<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    function Index()
    {
        $guru = DB::table('users')->where('role','=','guru')->get();
        return view('v_guru_dashboard', compact('guru'));
    }
}
