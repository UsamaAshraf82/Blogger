@extends("master")
@section('phone-view')
@foreach ($users as $mobile)



    <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="thumbnail" style="background-color: #ffffff;border-color: #ffffff">
            <a href="#" class="d-block mb-4 h-100">
                <img style="margin-bottom:7px"  src="{{asset($mobile->img)}}" alt="nhi lagi"width="150px" height="100px">

                <div class="caption text-center"style="line-height: 5px">
                    <p style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px;color: #2e3436;">{{$mobile->company}} {{ $mobile->name }}</p>
                    @if (($mobile->status) === 'Released')
                    <p style="color: #216a94;">RS:{{$mobile->price}}</p>
                    @elseif (($mobile->status) === 'Expired')
                    <p style="color: #216a94"><del>RS:{{$mobile->price}}</del></p>
                    @else
                        <p style="color: #216a94">Coming Soon</p>
                    @endif

                </div>
            </a>
            <hr>
        </div>
    </div>

@endforeach
    @endsection