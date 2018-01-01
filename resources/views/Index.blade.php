@extends("master")

@section('title')
    Home
@endsection

@section('slider')
    @include("layout.frontend.slider")
@endsection

@section('phone-view')
    <div class=""style="min-height: 1000px">

    <div class="row text-center text-lg-left" >
        {{--@php--}}
            {{--print_r($users);--}}

        {{--@endphp--}}

        @foreach ($users as $mobile)



            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="thumbnail" style="background-color: #ffffff;border-color: #ffffff">

                <a href="{{route('getInfo',['id'=>$mobile->id])}}" class="d-block mb-4 h-100">
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
        {{-- <div class="col-lg-3 col-md-4 col-xs-6">
             <a href="#" class="d-block mb-4 h-100">
                 <img src="{{ asset('/Image/Logo/logo.png') }}" alt="NULL" width="150px" >


                     <h3>Thumbnail label</h3>
                     <p>..ppppppppp ppppppppppp pppppppppp .</p>

             </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
             <a href="#" class="d-block mb-4 h-100">
                 <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
             </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
             <a href="#" class="d-block mb-4 h-100">
                 <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
             </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
             <a href="#" class="d-block mb-4 h-100">
                 <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
             </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
             <a href="#" class="d-block mb-4 h-100">
                 <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
             </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
             <a href="#" class="d-block mb-4 h-100">
                 <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
             </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
             <a href="#" class="d-block mb-4 h-100">
                 <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
             </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
             <a href="#" class="d-block mb-4 h-100">
                 <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
             </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
             <a href="#" class="d-block mb-4 h-100">
                 <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
             </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
             <a href="#" class="d-block mb-4 h-100">
                 <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
             </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
             <a href="#" class="d-block mb-4 h-100">
                 <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
             </a>
         </div>--}}
    </div>

    </div>



@endsection

@section('pagination')
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4" style="font-size: 15px">
           {!!$users->links()  !!}
        </div>
    </div>
    @endsection