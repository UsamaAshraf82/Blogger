
<div class="form-group">
    <label for="title" class="col-sm-2 control-label">name</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="name" placeholder="name"
               @if(isset($htc))
               value="{{$htc->name}}"
                @endif
        >
    </div>

    <label for="body" class="col-sm-2 control-label">new</label>
    <div class="col-sm-10">
                <textarea type="new" name="body" class="form-control" id="new" placeholder="new">
                 @if(isset($htc))
                        {{$htc->new}}
                    @endif
                </textarea>
    </div>


    <label for="body" class="col-sm-2 control-label">price</label>
    <div class="col-sm-10">
        <input type="text" name="price" class="form-control" id="price" placeholder="price"
               @if(isset($htc))
               value="{{$htc->price}}"
                @endif
        >
    </div>


    <label for="body" class="col-sm-2 control-label">Dimensions</label>
    <div class="col-sm-10">
                       <input type="text" name="Dimensions" class="form-control" id="Dimensions" placeholder="Dimensions"
                              @if(isset($htc))
                              value="{{$htc->Dimensions}}"
                               @endif
                       >
    </div>


    <label for="body" class="col-sm-2 control-label">OS</label>
    <div class="col-sm-10">
                      <input type="text" name="OS" class="form-control" id="OS" placeholder="OS"
                             @if(isset($htc))
                             value="{{$htc->OS}}"
                              @endif
                      >
    </div>

        <label for="body" class="col-sm-2 control-label">Weight</label>
    <div class="col-sm-10">
                     <input type="text" name="Weight" class="form-control" id="Weight" placeholder="Weight"
                            @if(isset($htc))
                            value="{{$htc->Weight}}"
                             @endif
                     >
    </div>

        <label for="body" class="col-sm-2 control-label">sim</label>
    <div class="col-sm-10">
                    <input type="text" name="sim" class="form-control" id="sim" placeholder="sim"
                           @if(isset($htc))
                           value="{{$htc->sim}}"
                            @endif
                    >
    </div>

        <label for="body" class="col-sm-2 control-label">colors</label>
    <div class="col-sm-10">
                   <input type="colors" name="colors" class="form-control" id="colors" placeholder="colors"
                          @if(isset($htc))
                          value="{{$htc->colors}}"
                           @endif
                   >
    </div>

        <label for="body" class="col-sm-2 control-label">2G band</label>
    <div class="col-sm-10">
                       <input type="2G band" name="title" class="form-control" id="2G band" placeholder="2G band"
                              @if(isset($htc))
                              value=""
                               @endif
                       >
    </div>

        <label for="body" class="col-sm-2 control-label">3G Band</label>
    <div class="col-sm-10">
                       <input type="text" name="3G Band" class="form-control" id="3G Band" placeholder="3G Band"
                              @if(isset($htc))
                              value=""
                               @endif
                       >
    </div>

        <label for="body" class="col-sm-2 control-label">4G Band</label>
    <div class="col-sm-10">
                       <input type="text" name="4G Band" class="4G Band" id="name" placeholder="4G Band"
                              @if(isset($htc))
                              value=""
                               @endif
                       >
    </div>

        <label for="body" class="col-sm-2 control-label">CPU</label>
    <div class="col-sm-10">
                       <input type="text" name="CPU" class="form-control" id="CPU" placeholder="CPU"
                              @if(isset($htc))
                              value="{{$htc->CPU}}"
                               @endif
                       >
    </div>

        <label for="body" class="col-sm-2 control-label">Chipset</label>
    <div class="col-sm-10">
                       <input type="text" name="Chipset" class="form-control" id="Chipset" placeholder="Chipset"
                              @if(isset($htc))
                              value="{{$htc->Chipset}}"
                               @endif
                       >
    </div>
        <label for="body" class="col-sm-2 control-label">GPU</label>
    <div class="col-sm-10">
                       <input type="text" name="GPU" class="form-control" id="GPU" placeholder="GPU"
                              @if(isset($htc))
                              value="{{$htc->GPU}}"
                               @endif
                       >
    </div>    <label for="body" class="col-sm-2 control-label">Size</label>
    <div class="col-sm-10">
                       <input type="text" name="Size" class="form-control" id="Size" placeholder="Size"
                              @if(isset($htc))
                              value="{{$htc->Size}}"
                               @endif
                       >
    </div>    <label for="body" class="col-sm-2 control-label">Protection</label>
    <div class="col-sm-10">
                       <input type="text" name="Protection" class="form-control" id="Protection" placeholder="Protection"
                              @if(isset($htc))
                              value="{{$htc->Protection}}"
                               @endif
                       >
    </div>    <label for="body" class="col-sm-2 control-label">Build-in</label>
    <div class="col-sm-10">
                       <input type="text" name="Build-in" class="form-control" id="Build-in" placeholder="Build-in"
                              @if(isset($htc))
                              value="{{$htc->Build-in}}"
                               @endif
                       >
    </div>
        <label for="body" class="col-sm-2 control-label">Card</label>
    <div class="col-sm-10">
                       <input type="text" name="Card" class="form-control" id="Card" placeholder="Card"
                              @if(isset($htc))
                              value="{{$htc->Card}}"
                               @endif
                       >
    </div>
        <label for="body" class="col-sm-2 control-label">Main camera</label>
    <div class="col-sm-10">
                       <input type="text" name="Main camera" class="form-control" id="Main camera" placeholder="Main camera"
                              @if(isset($htc))
                              value=""
                               @endif
                       >
    </div>
        <label for="body" class="col-sm-2 control-label">Features</label>
    <div class="col-sm-10">
                       <input type="text" name="Features" class="form-control" id="Features" placeholder="Features"
                              @if(isset($htc))
                              value="{{$htc->Features}}"
                               @endif
                       >
    </div>
        <label for="body" class="col-sm-2 control-label">Front Camera</label>
    <div class="col-sm-10">
                         <input type="text" name="Front" class="form-control" id="Front" placeholder="Front"
                                @if(isset($htc))
                                value="{{$htc->Front}}"
                                 @endif
                         >
    </div>
        <label for="body" class="col-sm-2 control-label">WLAN</label>
    <div class="col-sm-10">
                       <input type="text" name="WLAN" class="form-control" id="WLAN" placeholder="WLAN"
                              @if(isset($htc))
                              value="{{$htc->WLAN}}"
                               @endif
                       >

    </div>

    <label for="body" class="col-sm-2 control-label">Bluetooth</label>
    <div class="col-sm-10">
                       <input type="text" name="Bluetooth" class="form-control" id="Bluetooth" placeholder="Bluetooth"
                              @if(isset($htc))
                              value="{{$htc->Bluetooth}}"
                               @endif
                       >
    </div>

    <label for="body" class="col-sm-2 control-label">GPS</label>
    <div class="col-sm-10">
                       <input type="text" name="GPS" class="form-control" id="GPS" placeholder="GPS"
                              @if(isset($htc))
                              value="{{$htc->GPS}}"
                               @endif
                       >
    </div>

    <label for="body" class="col-sm-2 control-label">Radio</label>
    <div class="col-sm-10">
                       <input type="text" name="Radio" class="form-control" id="Radio" placeholder="Radio"
                              @if(isset($htc))
                              value="{{$htc->Radio}}"
                               @endif
                       >
    </div>

    <label for="body" class="col-sm-2 control-label">USB</label>
    <div class="col-sm-10">
                       <input type="text" name="USB" class="form-control" id="USB" placeholder="USB"
                              @if(isset($htc))
                              value="{{$htc->USB}}"
                               @endif
                       >
    </div>

    <label for="body" class="col-sm-2 control-label">NFC</label>
    <div class="col-sm-10">
                       <input type="text" name="NFC" class="form-control" id="NFC" placeholder="NFC"
                              @if(isset($htc))
                              value="{{$htc->NFC}}"
                               @endif
                       >
    </div>

    <label for="body" class="col-sm-2 control-label">Data</label>
    <div class="col-sm-10">
                       <input type="text" name="Data" class="form-control" id="Data" placeholder="Data"
                              @if(isset($htc))
                              value="{{$htc->Data}}"
                               @endif
                       >
    </div>


    <label for="body" class="col-sm-2 control-label">Sensors</label>
    <div class="col-sm-10">
                       <input type="text" name="Sensors" class="form-control" id="Sensors" placeholder="Sensors"
                              @if(isset($htc))
                              value="{{$htc->Sensors}}"
                               @endif
                       >
    </div>


    <label for="body" class="col-sm-2 control-label">Audio</label>
    <div class="col-sm-10">
                       <input type="text" name="Audio" class="form-control" id="Audio" placeholder="Audio"
                              @if(isset($htc))
                              value="{{$htc->Audio}}"
                               @endif
                       >
    </div>


    <label for="body" class="col-sm-2 control-label">Browser</label>
    <div class="col-sm-10">
                       <input type="text" name="Browser" class="form-control" id="Browser" placeholder="Browser"
                              @if(isset($htc))
                              value="{{$htc->Browser}}"
                               @endif
                       >
    </div>


    <label for="body" class="col-sm-2 control-label">Messaging</label>
    <div class="col-sm-10">
                       <input type="text" name="Messaging" class="form-control" id="Messaging" placeholder="Messaging"
                              @if(isset($htc))
                              value="{{$htc->Messaging}}"
                               @endif
                       >
    </div>


    <label for="body" class="col-sm-2 control-label">Games</label>
    <div class="col-sm-10">
                       <input type="text" name="Games" class="form-control" id="Games" placeholder="Games"
                              @if(isset($htc))
                              value="{{$htc->Games}}"
                               @endif
                       >
    </div>


    <label for="body" class="col-sm-2 control-label">Torch</label>
    <div class="col-sm-10">
                       <input type="text" name="Torch" class="form-control" id="Torch" placeholder="Torch"
                              @if(isset($htc))
                              value="{{$htc->Torch}}"
                               @endif
                       >
    </div>


    <label for="body" class="col-sm-2 control-label">Extra</label>
    <div class="col-sm-10">
                       <input type="text" name="Extra" class="form-control" id="Extra" placeholder="Extra"
                              @if(isset($htc))
                              value="{{$htc->Extra}}"
                               @endif
                       >
    </div>

    <label for="body" class="col-sm-2 control-label">Capacity</label>
    <div class="col-sm-10">
                       <input type="text" name="Capacity" class="form-control" id="Capacity" placeholder="Capacity"
                              @if(isset($htc))
                              value="{{$htc->Capacity}}"
                               @endif
                       >
    </div>


    <label for="body" class="col-sm-2 control-label">More</label>
    <div class="col-sm-10">
                       <input type="text" name="More" class="form-control" id="More" placeholder="More"
                              @if(isset($htc))
                              value="{{$htc->More}}"
                               @endif
                       >
    </div>

</div>


{{--
$table->string('name');
$table->text('new');
$table->string('price');
$table->string('OS');
$table->string('Dimensions');
$table->string('Weight');
$table->string('sim');
$table->string('colors');
$table->string('2G band');
$table->string('3G Band');
$table->string('4G Band');
$table->string('CPU');
$table->string('Chipset');
$table->string('GPU');
$table->string('Size');
$table->string('Protection');
$table->string('Built-in');
$table->string('Card');
$table->string('Main camera');
$table->string('Features');
$table->string('Front');
$table->string('WLAN');
$table->string('Bluetooth');
$table->string('GPS');
$table->string('Radio');
$table->string('USB');
$table->string('NFC');
$table->string('Data');
$table->string('Sensors');
$table->string('Audio');
$table->string('Browser');
$table->string('Messaging');
$table->string('Games');
$table->string('Torch');
$table->string('Extra');
$table->string('Capacity');
$table->string('More');
--}}
