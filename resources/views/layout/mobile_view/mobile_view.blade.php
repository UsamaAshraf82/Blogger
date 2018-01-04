@extends("master")
@section('phone-view')
@foreach ($users as $mobile)



    <div style="width: 400px; height: 500px;background-color: #e9f6fb; margin-left: 4cm; margin-top: 2cm; ">
        <p style="text-align: center;">Price in RS :{{$mobile->price}}</p>
        <img style="margin-bottom:7px"  src="{{asset($mobile->img)}}" alt="nhi lagi"width="400px" height="400px">
    </div>
    <br>
    <div style="background-color: #e9f6fb;">
        <h4 style="text-align: center">Description </h4>
        <p>{{$mobile->new}}</p>
    </div>

    <div class="Heading1" style="text-align:left;  margin-top:12px;">
        <h2 class="Heading1" style="padding:0px; margin:0px; display:inline;"></h2>

        <table class="table table-bordered" width="604" border="0" cellpadding="0" cellspacing="0">
            <colgroup span="3"></colgroup>
            <tbody>


            <!--Main Category-->
            <tr class="RowBG2">
                <th rowspan="1" colspan="2"  scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Price in Pakistan</th>
                <!-- For Price -->
                <td colspan="2" class="fasla RowBG1 specs-value bottom-border-section">Rs. <strong>{{$mobile->price}}</strong>                                                    &nbsp;</td>
            </tr>

            <!--Main Category-->
            <tr class="RowBG2">
                <th rowspan="5"  scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Build</th>
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">OS</th>
                <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$mobile->OS}}                                                   &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Dimensions</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    {{$mobile->Dimensions}}                                               &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Weight</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    {{$mobile->Weight}}                                                &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">SIM</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    {{$mobile->sim}}                                                &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Colors</th>
                <td colspan="2" class="fasla specs-value bottom-border-section">
                    <span itemprop="color">{{$mobile->colors}}</span>                                                &nbsp;</td>
            </tr>

            <!--Main Category-->
            <tr class="RowBG2">
                <th rowspan="3"  scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Frequency</th>
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">2G Band</th>
                <td colspan="2" class="fasla RowBG1 specs-value bottom-border"><b>SIM1:4G</b> <br><b>SIM2:</b> 4G                                                    &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">3G Band</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    Yes                                               &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">4G Band</th>
                <td colspan="2" class="fasla specs-value bottom-border-section">
                   Yes                                              &nbsp;</td>
            </tr>

            <!--Main Category-->
            <tr class="RowBG2">
                <th rowspan="3"  scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Processor</th>
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">CPU</th>
                <td colspan="2" class="fasla RowBG1 specs-value bottom-border">{{$mobile->CPU}}                                                   &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                c<th sope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Chipset</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    {{$mobile->Chipset}}                                              &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">GPU</th>
                <td colspan="2" class="fasla specs-value bottom-border-section">
                    {{$mobile->GPU}}                                             &nbsp;</td>
            </tr>

            <!--Main Category-->
            <tr class="RowBG2">
                <th rowspan="4"  scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Display</th>
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Technology</th>
                <td colspan="2" class="fasla RowBG1 specs-value bottom-border">                                               &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Size</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    {{$mobile->Size}}                                                &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Resolution</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    {{$mobile->Dimensions}}                                           &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Protection</th>
                <td colspan="2" class="fasla specs-value bottom-border-section">
                    {{$mobile->Protection}}                                               &nbsp;</td>
            </tr>

            <!--Main Category-->
            <tr class="RowBG2">
                <th rowspan="2"  scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Memory</th>
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Built-in</th>
                <td colspan="2" class="fasla RowBG1 specs-value bottom-border">                                                    &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Card</th>
                <td colspan="2" class="fasla specs-value bottom-border-section">
                    <?php ?>                                                &nbsp;</td>
            </tr>

            <!--Main Category-->
            <tr class="RowBG2">
                <th rowspan="3"  scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Camera</th>
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Main</th>
                <td colspan="2" class="fasla RowBG1 specs-value bottom-border"><?php ?>                                                    &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Features</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    <?php ?>                                                &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Front</th>
                <td colspan="2" class="fasla specs-value bottom-border-section">
                    <?php ?>                                               &nbsp;</td>
            </tr>

            <!--Main Category-->
            <tr class="RowBG2">
                <th rowspan="7"  scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Connectivity</th>
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">WLAN</th>
                <td colspan="2" class="fasla RowBG1 specs-value bottom-border"><?php ?>                                                    &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Bluetooth</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    <?php ?>                                               &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">GPS</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    <?php ?>                                               &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Radio</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    <?php ?>                                                &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">USB</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    <?php ?>                                              &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">NFC</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    <?php ?>                                               &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Data</th>
                <td colspan="2" class="fasla specs-value bottom-border-section">
                    <font color='#000077'><b>GPRS</b></font>, <font color='#000077'><b>EDGE</b></font><?php ?>                                                &nbsp;</td>
            </tr>

            <!--Main Category-->
            <tr class="RowBG2">
                <th rowspan="7"  scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Features</th>
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Sensors</th>
                <td colspan="2" class="fasla RowBG1 specs-value bottom-border"><?php ?>                                                    &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Audio</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    <?php ?>                                                &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Browser</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    <?php ?>                                             &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Messaging</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    <?php ?>                                               &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Games</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    <?php ?>                                               &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Torch</th>
                <td colspan="2" class="fasla specs-value bottom-border">
                    <?php ?>                                              &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section">Extra</th>
                <td colspan="2" class="fasla specs-value bottom-border-section">
                    <?php ?>                                                &nbsp;</td>
            </tr>

            <!--Main Category-->
            <tr class="RowBG2">
                <th rowspan="2"  scope="rowgroup" style="text-align: left;vertical-align: top;" class="hdngArial specs-mainHeading bottom-border-section">Battery</th>
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border">Capacity</th>
                <td colspan="2" class="fasla RowBG1 specs-value bottom-border"><?php ?>                                                   &nbsp;</td>
            </tr>


            <tr class="RowBG1">
                <!-- For Price -->
                <th scope="row" align="left" class="hdngArial specs-subHeading RowBG1 bottom-border-section"></th>
                <td colspan="2" class="fasla specs-value bottom-border-section">
                    - <?php ?>
                    &nbsp;</td>
            </tr>
            <tr class="RowBG2">
                <th rowspan="1" scope="rowgroup" align="left" class="hdngArial bottom-border-section specs-mainHeading"><h2 class="hdngArial" style="padding:0px; margin:0px; display:inline;">Price</h2></th>
                <td colspan="2" class="fasla RowBG1 bottom-border-section right-border specs-subHeading">Price in Rs: <strong><?php ?></strong> &nbsp;&nbsp;&nbsp;Price in USD: <strong><?php ?></strong>
                    &nbsp;</td>
            </tr>
            <tr class="RowBG2">
                <th rowspan="1" scope="rowgroup" align="left" class="hdngArial bottom-border-section specs-mainHeading">Ratings </th>
                <td colspan="2" class="fasla RowBG1 bottom-border-section right-border specs-subHeading">Average Rating is <strong><?php ?></strong> <?php ?> <strong><?php ?></strong> <?php ?>.</span>
                    &nbsp;</td>
            </tr>
            </tbody>
        </table>
    </div>


@endforeach
    @endsection