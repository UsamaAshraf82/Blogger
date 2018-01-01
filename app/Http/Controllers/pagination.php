<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class pagination extends Controller
{
    public function index90()
    {
        $users = DB::table('mobiles')->whereBetween('price', [70000, 90000])->orderBy('price', 'desc')->paginate(20);




        return view('index',['users' => $users]);
    }

    public function index70()
    {
        $users = DB::table('mobiles')->whereBetween('price', [50000, 70000])->orderBy('price', 'desc')->paginate(20);




        return view('index',['users' => $users]);
    }
    public function search(Request $request)
    {

        $users = DB::table('mobiles')->get();




        return view('index',['users' => $users]);
    }
    public function index50()
    {
        $users = DB::table('mobiles')->whereBetween('price', [30000, 50000])->orderBy('price', 'desc')->paginate(20);




        return view('index',['users' => $users]);
    }
    public function index30()
    {
        $users = DB::table('mobiles')->whereBetween('price', [10000, 30000])->orderBy('price', 'desc')->paginate(20);




        return view('index',['users' => $users]);
    }
    public function htc()
    {
        $htc= DB::table('mobiles')->where('company','=','HTC')->orderBy('price', 'desc')->paginate(20);
        return view('index', ['users' => $htc]);
    }
    public function lenovo()
    {
        $users = DB::table('mobiles')->where('company','=','LENOVO')->orderBy('price', 'desc')->paginate(20);


        return view('index', ['users' => $users]);
    }
    public function vivo()
    {
        $users = DB::table('mobiles')->where('company','=','VIVO')->orderBy('price', 'desc')->paginate(20);


        return view('index', ['users' => $users]);
    }
    public function qmobile()
    {
        $users = DB::table('mobiles')->where('company','=','QMOBILE')->orderBy('price', 'desc')->paginate(20);


        return view('index', ['users' => $users]);
    }
    public function oppo()
    {
        $users = DB::table('mobiles')->where('company','=','OPPO')->orderBy('price', 'desc')->paginate(20);


        return view('index', ['users' => $users]);
    }
}
