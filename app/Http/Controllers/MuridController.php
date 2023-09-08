<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MuridController extends Controller
{
    function Index()
    {
        $murid = DB::table('users')->where('role','=','murid')->get();
        return view('v_murid_dashboard', compact('murid'));
        
    }
}
