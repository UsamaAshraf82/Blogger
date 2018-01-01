<div id="myCarousel" class="carousel slide"> <!-- slider -->
    <div class="carousel-inner">
        <div class="active item"> <!-- item 1 -->
            <img class="d-block" src="{{ asset('/Image/Logo/abc.png') }}" alt="Second slide">
        </div> <!-- end item -->
        <div class="item"> <!-- item 2 -->
            <img class="d-block " src="{{ asset('/Image/Logo/ab.png') }}" alt="First slide">
        </div> <!-- end item -->
        <div class="item"> <!-- item 3 -->
            <img class="d-block " src="{{ asset('/Image/Logo/ab.png') }}" alt="First slide">
        </div> <!-- end item -->
    </div> <!-- end carousel inner -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
{{--
<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="width: 1000px; background: #fff;margin-left: 30px; margin-right: 30px;">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block " src="{{ asset('/Image/Logo/ab.png') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block" src="{{ asset('/Image/Logo/abc.png') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block " src="{{ asset('/Image/Logo/abc.png') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>--}}
