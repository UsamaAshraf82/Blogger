<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\htc;

class adminController extends Controller
{
    public function Home()
    {

        return view('admin.index');
    }

    public function htc()
    {
        $htc = DB::table('htc')->paginate(12);
        return view('admin.htc.htc', ['htcs' => $htc]);
    }

    public function htccreate()
    {

        return view('admin.htc.create');
    }

    public function store(Request $request)
    {
        $htc = new htc();

        $htc->name = $request->name;
        $htc->new =$request->new;
        $htc->price= $request->price;
        $htc->OS=$request->OS;
        $htc->Dimensions=$request->Dimensions;
        $htc->Weight=$request->Weight;
        $htc->sim=$request->sim;
        $htc->colors=$request->colors;
//        $htc->2G band=$request->2G band;
//        $htc->3G Band=$request->3G Band;
//        $htc->4G Band=$request->4G Band;
        $htc->CPU=$request->CPU;
        $htc->Chipset=$request->Chipset;
        $htc->GPU=$request->GPU;
        $htc->Size=$request->Size;
        $htc->Protection=$request->Protection;
//        $htc->Built-in=$request->Built-in;
        $htc->Card=$request->Card;
//        $htc->Main camera=$request->Main camera;
        $htc->Features=$request->Features;
        $htc->Front=$request->Front;
        $htc->LAN=$request->LAN;
        $htc->Bluetooth=$request->Bluetooth;
        $htc->GPS=$request->GPS;
        $htc->Radio=$request->Radio;
        $htc->USB=$request->USB;
        $htc->NFC=$request->NFC;
        $htc->Data=$request->Data;
        $htc->Sensors=$request->Sensors;
        $htc->Audio=$request->Audio;
        $htc->Browser=$request->Browser;
        $htc->Messaging=$request->Messaging;
        $htc->Games=$request->Games;
        $htc->Torch=$request->Torch;
        $htc->Extra=$request->Extra;
        $htc->Capacity=$request->Capacity;
        $htc->More=$request->More;

        $htc->img = '/Image/mobile/IMG ('.random_int(1,60).').png';

        $htc.save();

        return redirect(url('/admin/htc'));
    }
}


