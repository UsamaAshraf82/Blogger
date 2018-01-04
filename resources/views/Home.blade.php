@extends("master")

@section("slider")
    <div id="myCarousel" class="carousel slide"> <!-- slider -->
        <div class="carousel-inner">
            <div class="active item"> <!-- item 1 -->
                <img class="d-block" src="{{ asset('/Image/Slider/P (1).jpg ')}}" alt="Second slide"  height="550px">
            </div> <!-- end item -->
            <div class="item"> <!-- item 2 -->
                <img class="d-block " src="{{ asset('/Image/Slider/P (4).jpg') }}" alt="First slide" height="550px">
            </div> <!-- end item -->
            <div class="item"> <!-- item 3 -->
                <img class="d-block " src="{{ asset('/Image/Slider/P (3).jpg') }}" alt="First slide" height="550px">
            </div> <!-- end item -->
        </div> <!-- end carousel inner -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    @endsection

@section('home')
<div class="container-fluid">
    <h1 style="color:darkred">Mobile Prices IN Pakistan 70001-90000</h1>
</div>
@foreach ($a as $mobile)




    <div class="col-lg-3 col-md-4 col-xs-6" style="background-color: #f2dede;">
        <br><br>
        <div class="thumbnail" style="background-color: #ffffff;border-color: #ffffff">

            <a href="{{route('getInfo',['id'=>$mobile->id])}}" class="d-block mb-4 h-100">
                <img style="margin-bottom:7px"  src="{{asset($mobile->img)}}" alt="nhi lagi"width="150px" height="100px">

                <div class="caption text-center"style="line-height: 5px">
                    <p style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px;color: #2e3436;">{{$mobile->company}} {{ $mobile->name }}</p>

                    @if (($mobile->status) === 'Expired')
                        <p style="color: #216a94"><del>RS:{{$mobile->price}}</del></p>
                    @else
                        <p style="color: #216a94;">RS:{{$mobile->price}}</p>
                    @endif

                </div>
            </a>
            <hr>
        </div>
    </div>


@endforeach
<hr>
<div class="container-fluid">
    <h1 style="color:darkred">Mobile Prices IN Pakistan 50001-70000</h1>
</div>

@foreach ($b as $mobile)



    <div class="col-lg-3 col-md-4 col-xs-6" style="background-color: #f2dede;">
        <br><br>
        <div class="thumbnail" style="background-color: #ffffff;border-color: #ffffff">

            <a href="{{route('getInfo',['id'=>$mobile->id])}}" class="d-block mb-4 h-100">
                <img style="margin-bottom:7px"  src="{{asset($mobile->img)}}" alt="nhi lagi"width="150px" height="100px">

                <div class="caption text-center"style="line-height: 5px">
                    <p style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px;color: #2e3436;">{{$mobile->company}} {{ $mobile->name }}</p>

                    @if (($mobile->status) === 'Expired')
                        <p style="color: #216a94"><del>RS:{{$mobile->price}}</del></p>
                    @else
                        <p style="color: #216a94;">RS:{{$mobile->price}}</p>
                    @endif

                </div>
            </a>
            <hr>
        </div>
    </div>



@endforeach
<hr>
<div class="container-fluid">
    <h1 style="color:darkred">Mobile Prices IN Pakistan 30001-50000</h1>
</div>
@foreach ($c as $mobile)




    <div class="col-lg-3 col-md-4 col-xs-6" style="background-color: #f2dede;">
        <br><br>
        <div class="thumbnail" style="background-color: #ffffff;border-color: #ffffff">

            <a href="{{route('getInfo',['id'=>$mobile->id])}}" class="d-block mb-4 h-100">
                <img style="margin-bottom:7px"  src="{{asset($mobile->img)}}" alt="nhi lagi"width="150px" height="100px">

                <div class="caption text-center"style="line-height: 5px">
                    <p style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px;color: #2e3436;">{{$mobile->company}} {{ $mobile->name }}</p>

                    @if (($mobile->status) === 'Expired')
                        <p style="color: #216a94"><del>RS:{{$mobile->price}}</del></p>
                    @else
                        <p style="color: #216a94;">RS:{{$mobile->price}}</p>
                    @endif

                </div>
            </a>
            <hr>
        </div>
    </div>


@endforeach
<hr>
@endsection

