
<div class="col-lg-3 p-l-0 p-r-0 collapse in" id="sidebar">

    <div class="list-group panel bg-dark">
        <a href="#menu1" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><i class="fa fa-dashboard"></i> <span class="hidden-sm-down">Item 1</span> </a>
        <div class="collapse" id="menu1">
            <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Subitem 1 </a>
            <div class="collapse" id="menu1sub1">
                <a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem 1 a</a>
                <a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem 2 b</a>
                <a href="#menu1sub1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Subitem 3 c </a>
                <div class="collapse" id="menu1sub1sub1">
                    <a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem 3 c.1</a>
                    <a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem 3 c.2</a>
                </div>
                <a href="#" class="list-group-item" data-parent="#menu1sub1">Subitem 4 d</a>
                <a href="#menu1sub1sub2" class="list-group-item" data-toggle="collapse"  aria-expanded="false">Subitem 5 e </a>
                <div class="collapse" id="menu1sub1sub2">
                    <a href="#" class="list-group-item" data-parent="#menu1sub1sub2">Subitem 5 e.1</a>
                    <a href="#" class="list-group-item" data-parent="#menu1sub1sub2">Subitem 5 e.2</a>
                </div>
            </div>
            <a href="#" class="list-group-item" data-parent="#menu1">Subitem 2</a>
            <a href="#" class="list-group-item" data-parent="#menu1">Subitem 3</a>
        </div>
        <a href="#" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-film"></i> <span class="hidden-sm-down">Item 2</span></a>
        <a href="#menu3" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><i class="fa fa-book"></i> <span class="hidden-sm-down">Item 3 </span></a>
        <div class="collapse" id="menu3">
            <a href="#" class="list-group-item" data-parent="#menu3">3.1</a>
            <a href="#menu3sub2" class="list-group-item" data-toggle="collapse" aria-expanded="false">3.2 </a>
            <div class="collapse" id="menu3sub2">
                <a href="#" class="list-group-item" data-parent="#menu3sub2">3.2 a</a>
                <a href="#" class="list-group-item" data-parent="#menu3sub2">3.2 b</a>
                <a href="#" class="list-group-item" data-parent="#menu3sub2">3.2 c</a>
            </div>
            <a href="#" class="list-group-item" data-parent="#menu3">3.3</a>
        </div>
        <a href="{{route('lenovo')}}" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-heart"></i> <span class="hidden-sm-down">Lenovo Mobiles</span></a>
        <a href="{{route('vivo')}}" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-list"></i> <span class="hidden-sm-down">Vivo Mobiles 5</span></a>
        <a href="{{route('htc')}}" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="hidden-sm-down">Htc  mobiles</span></a>
        <a href="{{route('qmobile')}}" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="hidden-sm-down">Qmobiles</span></a>
        <a href="{{route('oppo')}}" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="hidden-sm-down">OPPO Mobiles</span></a>
        <a href="{{route('range70-90')}}" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-calendar"></i> <span class="hidden-sm-down">70000-90000</span></a>
        <a href="{{route('range50-70')}}" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">50000-70000</span></a>
        <a href="{{route('range30-50')}}" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-bar-chart-o"></i> <span class="hidden-sm-down">30000-50000</span></a>
        <a href="{{route('range10-30')}}" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-star"></i> <span class="hidden-sm-down">10000-20000</span></a>
    </div>

</div>
