
    <marquee bgcolor:#D9DBDF onmouseover="this.stop();" onmouseout="this.start();" scrollamount="7" behavior="scroll" direction="left">
        @foreach ($users as $mobile)


            <label style="font-size: 1.6em ;color:"> {{  $mobile->company  }}&nbsp;  {{   $mobile->name  }}{{"    "}} &nbsp;{{" |"}}</label>


        @endforeach
    </marquee>
