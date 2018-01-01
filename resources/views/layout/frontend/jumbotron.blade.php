<div class="col-lg-9">


@include("layout.frontend.slider")
    <div class="jumbotron">
        <div class="row text-center text-lg-left" >

            @foreach ($users as $user)
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img style="margin-bottom:7px"  src="{{asset($user->img)}}" alt="nhi lagi"width="100px" height="100px">

                        <div class="caption "style="line-height: 5px">
                            <p style="font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 15px;
        color: #2e3436;">{{ $user->name }}</p>
                            <p style="font-size: 20px">{{$user->price}}</p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="thumbnail">
                    <img src="{{ asset('/Image/Logo/logo.png') }}" alt="NULL" width="150px" >

                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
