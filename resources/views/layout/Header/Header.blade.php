<nav class="navbar navbar-expand-lg " style=" height: 2cm; background-color: #259d6d ; font-size: 2em;">
    <div class="container-fluid">
        <div class="navbar-header">

            <a class="" href="{{route('Home')}}">
                <img  height="150" width="200" src="{{asset('/Image/Logo/logo.png')}}" alt="TechDetails">
            </a>
        </div>
        <div id="navbar6" class="navbar-collapse collapse  ">
            <ul class="nav navbar-nav nav ml-auto">
                <li  class=""><a style="color:white;background-color: transparent"  href="{{route('Home')}}"><b>Home</b></a></li>
                <li><a style="color:white;background-color: transparent"href="#"><b>About</b></a></li>
                <li><a style="color:white;background-color: transparent" href="#"><b>Contact</b></a></li>

            </ul>
            <br>
            <div style="margin-left: 1cm" >
                <form method="post" action='{{route('search')}}'>
                    {{csrf_field()}}
                    <input  style="" type="search" name="search" placeholder="Search here">
                    <button class="btn btn-default" style="height: 35px;font-size: 1em"><strong>Search</strong></button>
                </form>
                </div>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>