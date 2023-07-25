<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin()
    {
        $statistics = DB::table('statistics_view')->first();

        return view('admin', ['statistics' => $statistics]);
    }
}


