<?php

namespace App\Http\Controllers\admin;

use App\mobile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function mobile()
    {
        $mobiles = DB::table('mobiles')->paginate(10);
        return view('admin.mobiles.mobile', ['mobiles' => $mobiles]);
    }
    public function update(Request $request,$id)
    {
        $mobiles=mobile::find($id);

        $mobiles->company=$request->company;
        $mobiles->status=$request->status;
        $mobiles->name = $request->name;
        $mobiles->new =$request->new;
        $mobiles->price= $request->price;
        $mobiles->OS=$request->OS;
        $mobiles->Dimensions=$request->Dimensions;
        $mobiles->Weight=$request->Weight;
        $mobiles->sim=$request->sim;
        $mobiles->colors=$request->colors;
        $mobiles->G2band=$request->G2Band;
        $mobiles->G3Band=$request->G3Band;
        $mobiles->G4Band=$request->G4Band;
        $mobiles->CPU=$request->CPU;
        $mobiles->Chipset=$request->Chipset;
        $mobiles->GPU=$request->GPU;
        $mobiles->Size=$request->Size;
        $mobiles->Protection=$request->Protection;
        $mobiles->Built_in=$request->Buildin;
        $mobiles->Card=$request->Card;
        $mobiles->Maincamera=$request->Maincamera;
        $mobiles->Features=$request->Features;
        $mobiles->Front=$request->Front;
        $mobiles->WLAN=$request->WLAN;
        $mobiles->Bluetooth=$request->Bluetooth;
        $mobiles->GPS=$request->GPS;
        $mobiles->Radio=$request->Radio;
        $mobiles->USB=$request->USB;
        $mobiles->NFC=$request->NFC;
        $mobiles->Data=$request->Data;
        $mobiles->Sensors=$request->Sensors;
        $mobiles->Audio=$request->Audio;
        $mobiles->Browser=$request->Browser;
        $mobiles->Messaging=$request->Messaging;
        $mobiles->Games=$request->Games;
        $mobiles->Torch=$request->Torch;
        $mobiles->Extra=$request->Extra;
        $mobiles->Capacity=$request->Capacity;
        $mobiles->More=$request->More;

        $mobiles->img = '/Image/mobile/IMG ('.random_int(1,60).').png';

        $mobiles->save();

        return redirect(url('/admin'));
    }
    public function edit(Request $request,$id)
    {
        $id=mobile::find($id);
        return view('admin.mobiles.edit',['mobiles'=> $id]);
    }

    public function create()
    {
        return view('admin.mobiles.create');
    }

    public function store(Request $request)
    {
        $mobiles =new mobile;
        $mobiles->company=$request->company;
        $mobiles->status=$request->status;
        $mobiles->name = $request->name;
        $mobiles->new =$request->new;
        $mobiles->price= $request->price;
        $mobiles->OS=$request->OS;
        $mobiles->Dimensions=$request->Dimensions;
        $mobiles->Weight=$request->Weight;
        $mobiles->sim=$request->sim;
        $mobiles->colors=$request->colors;
        $mobiles->G2band=$request->G2Band;
        $mobiles->G3Band=$request->G3Band;
        $mobiles->G4Band=$request->G4Band;
        $mobiles->CPU=$request->CPU;
        $mobiles->Chipset=$request->Chipset;
        $mobiles->GPU=$request->GPU;
        $mobiles->Size=$request->Size;
        $mobiles->Protection=$request->Protection;
        $mobiles->Built_in=$request->Buildin;
        $mobiles->Card=$request->Card;
        $mobiles->Maincamera=$request->Maincamera;
        $mobiles->Features=$request->Features;
        $mobiles->Front=$request->Front;
        $mobiles->WLAN=$request->WLAN;
        $mobiles->Bluetooth=$request->Bluetooth;
        $mobiles->GPS=$request->GPS;
        $mobiles->Radio=$request->Radio;
        $mobiles->USB=$request->USB;
        $mobiles->NFC=$request->NFC;
        $mobiles->Data=$request->Data;
        $mobiles->Sensors=$request->Sensors;
        $mobiles->Audio=$request->Audio;
        $mobiles->Browser=$request->Browser;
        $mobiles->Messaging=$request->Messaging;
        $mobiles->Games=$request->Games;
        $mobiles->Torch=$request->Torch;
        $mobiles->Extra=$request->Extra;
        $mobiles->Capacity=$request->Capacity;
        $mobiles->More=$request->More;

        $mobiles->img = '/Image/mobile/IMG ('.random_int(1,60).').png';

        $mobiles->save();

        return redirect(url('/admin'));
    }



    public function delete(Request $request,$id)
    {
        $mobile = mobile::find($id);

        $mobile->delete();
        $request->session()->flash('alert-danger', 'Article was deleted!');

        return redirect(url('/admin'));
    }
}
