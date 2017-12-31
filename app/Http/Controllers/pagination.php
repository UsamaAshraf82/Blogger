<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pagination extends Controller
{
    public function index()
    {
        $users = DB::table('htc')->paginate(16);


        return view('master', ['users' => $users]);
    }
}
