
<div class="form-group">
    <label for="title" class="col-sm-2 control-label">Company</label>
    <div class="col-sm-10">
        <input type="text" name="company" class="form-control" id="company" placeholder="Company"
               @if(isset($mobiles))
               value="{{$mobiles->company}}"
                @endif
        >
    </div>


    <label for="name" class="col-sm-2 control-label">name</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="name" placeholder="name"
               @if(isset($mobiles))
               value="{{$mobiles->name}}"
                @endif
        >
    </div>

    <label for="new" class="col-sm-2 control-label">new</label>
    <div class="col-sm-10">
                <textarea type="text" name="new" class="form-control" id="new" placeholder="new">
                 @if(isset($mobiles))
                        {{$mobiles->new}}
                    @endif
                </textarea>
    </div>


    <label for="price" class="col-sm-2 control-label">price</label>
    <div class="col-sm-10">
        <input type="text" name="price" class="form-control" id="price" placeholder="price"
               @if(isset($mobiles))
               value="{{$mobiles->price}}"
                @endif
        >
    </div>

        <label for="status" class="col-sm-2 control-label">status</label>
    <div class="col-sm-10">
        <input type="text" name="status" class="form-control" id="status" placeholder="status"
               @if(isset($mobiles))
               value="{{$mobiles->status}}"
                @endif
        >
    </div>


    <label for="Dimensions" class="col-sm-2 control-label">Dimensions</label>
    <div class="col-sm-10">
                       <input type="text" name="Dimensions" class="form-control" id="Dimensions" placeholder="Dimensions"
                              @if(isset($mobiles))
                              value="{{$mobiles->Dimensions}}"
                               @endif
                       >
    </div>


    <label for="OS" class="col-sm-2 control-label">OS</label>
    <div class="col-sm-10">
                      <input type="text" name="OS" class="form-control" id="OS" placeholder="OS"
                             @if(isset($mobiles))
                             value="{{$mobiles->OS}}"
                              @endif
                      >
    </div>

        <label for="Weight" class="col-sm-2 control-label">Weight</label>
    <div class="col-sm-10">
                     <input type="text" name="Weight" class="form-control" id="Weight" placeholder="Weight"
                            @if(isset($mobiles))
                            value="{{$mobiles->Weight}}"
                             @endif
                     >
    </div>

        <label for="sim" class="col-sm-2 control-label">sim</label>
    <div class="col-sm-10">
                    <input type="text" name="sim" class="form-control" id="sim" placeholder="sim"
                           @if(isset($mobiles))
                           value="{{$mobiles->sim}}"
                            @endif
                    >
    </div>

        <label for="colors" class="col-sm-2 control-label">colors</label>
    <div class="col-sm-10">
                   <input type="text" name="colors" class="form-control" id="colors" placeholder="colors"
                          @if(isset($mobiles))
                          value="{{$mobiles->colors}}"
                           @endif
                   >
    </div>

        <label for="G2Band" class="col-sm-2 control-label">2G Band</label>
    <div class="col-sm-10">
                       <input type="text" name="G2Band" class="form-control" id="G2Band" placeholder="2GBand"
                              @if(isset($mobiles))
                              value="{{$mobiles->G2band}}"
                               @endif
                       >
    </div>

        <label for="G3Band" class="col-sm-2 control-label">3G Band</label>
    <div class="col-sm-10">
                       <input type="text" name="G3Band" class="form-control" id="G3Band" placeholder="3G Band"
                              @if(isset($mobiles))
                              value="{{$mobiles->G3Band}}"
                               @endif
                       >
    </div>

        <label for="G4Band" class="col-sm-2 control-label">4G Band</label>
    <div class="col-sm-10">
                       <input type="text" name="G4Band" class="form-control" id="G4Band" placeholder="4G Band"
                              @if(isset($mobiles))
                              value="{{$mobiles->G4Band}}"
                               @endif
                       >
    </div>

        <label for="CPU" class="col-sm-2 control-label">CPU</label>
    <div class="col-sm-10">
                       <input type="text" name="CPU" class="form-control" id="CPU" placeholder="CPU"
                              @if(isset($mobiles))
                              value="{{$mobiles->CPU}}"
                               @endif
                       >
    </div>

        <label for="Chipset" class="col-sm-2 control-label">Chipset</label>
    <div class="col-sm-10">
                       <input type="text" name="Chipset" class="form-control" id="Chipset" placeholder="Chipset"
                              @if(isset($mobiles))
                              value="{{$mobiles->Chipset}}"
                               @endif
                       >
    </div>
        <label for="GPU" class="col-sm-2 control-label">GPU</label>
    <div class="col-sm-10">
                       <input type="text" name="GPU" class="form-control" id="GPU" placeholder="GPU"
                              @if(isset($mobiles))
                              value="{{$mobiles->GPU}}"
                               @endif
                       >
    </div>

    <label for="Size" class="col-sm-2 control-label">Size</label>
    <div class="col-sm-10">
                       <input type="text" name="Size" class="form-control" id="Size" placeholder="Size"
                              @if(isset($mobiles))
                              value="{{$mobiles->Size}}"
                               @endif
                       >
    </div>

    <label for="Protection" class="col-sm-2 control-label">Protection</label>
    <div class="col-sm-10">
                       <input type="text" name="Protection" class="form-control" id="Protection" placeholder="Protection"
                              @if(isset($mobiles))
                              value="{{$mobiles->Protection}}"
                               @endif
                       >
    </div>
    <label for="Buildin" class="col-sm-2 control-label">Build-in</label>
    <div class="col-sm-10">
                       <input type="text" name="Buildin" class="form-control" id="Buildin" placeholder="Build-in"
                              @if(isset($mobiles))
                              value="{{$mobiles->Built_in}}"
                               @endif
                       >
    </div>
        <label for="Card" class="col-sm-2 control-label">Card</label>
    <div class="col-sm-10">
                       <input type="text" name="Card" class="form-control" id="Card" placeholder="Card"
                              @if(isset($mobiles))
                              value="{{$mobiles->Card}}"
                               @endif
                       >
    </div>
        <label for="Maincamera" class="col-sm-2 control-label">Main camera</label>
    <div class="col-sm-10">
                       <input type="text" name="Maincamera" class="form-control" id="Maincamera" placeholder="Main camera"
                              @if(isset($mobiles))
                              value="{{$mobiles->Maincamera}}"
                               @endif
                       >
    </div>
        <label for="Features" class="col-sm-2 control-label">Features</label>
    <div class="col-sm-10">
                       <input type="text" name="Features" class="form-control" id="Features" placeholder="Features"
                              @if(isset($mobiles))
                              value="{{$mobiles->Features}}"
                               @endif
                       >
    </div>
        <label for="Front" class="col-sm-2 control-label">Front Camera</label>
    <div class="col-sm-10">
                         <input type="text" name="Front" class="form-control" id="Front" placeholder="Front Camera"
                                @if(isset($mobiles))
                                value="{{$mobiles->Front}}"
                                 @endif
                         >
    </div>
        <label for="WLAN" class="col-sm-2 control-label">WLAN</label>
    <div class="col-sm-10">
                       <input type="text" name="WLAN" class="form-control" id="WLAN" placeholder="WLAN"
                              @if(isset($mobiles))
                              value="{{$mobiles->WLAN}}"
                               @endif
                       >

    </div>

    <label for="Bluetooth" class="col-sm-2 control-label">Bluetooth</label>
    <div class="col-sm-10">
                       <input type="text" name="Bluetooth" class="form-control" id="Bluetooth" placeholder="Bluetooth"
                              @if(isset($mobiles))
                              value="{{$mobiles->Bluetooth}}"
                               @endif
                       >
    </div>

    <label for="GPS" class="col-sm-2 control-label">GPS</label>
    <div class="col-sm-10">
                       <input type="text" name="GPS" class="form-control" id="GPS" placeholder="GPS"
                              @if(isset($mobiles))
                              value="{{$mobiles->GPS}}"
                               @endif
                       >
    </div>

    <label for="Radio" class="col-sm-2 control-label">Radio</label>
    <div class="col-sm-10">
                       <input type="text" name="Radio" class="form-control" id="Radio" placeholder="Radio"
                              @if(isset($mobiles))
                              value="{{$mobiles->Radio}}"
                               @endif
                       >
    </div>

    <label for="USB" class="col-sm-2 control-label">USB</label>
    <div class="col-sm-10">
                       <input type="text" name="USB" class="form-control" id="USB" placeholder="USB"
                              @if(isset($mobiles))
                              value="{{$mobiles->USB}}"
                               @endif
                       >
    </div>

    <label for="NFC" class="col-sm-2 control-label">NFC</label>
    <div class="col-sm-10">
                       <input type="text" name="NFC" class="form-control" id="NFC" placeholder="NFC"
                              @if(isset($mobiles))
                              value="{{$mobiles->NFC}}"
                               @endif
                       >
    </div>

    <label for="Data" class="col-sm-2 control-label">Data</label>
    <div class="col-sm-10">
                       <input type="text" name="Data" class="form-control" id="Data" placeholder="Data"
                              @if(isset($mobiles))
                              value="{{$mobiles->Data}}"
                               @endif
                       >
    </div>


    <label for="Sensors" class="col-sm-2 control-label">Sensors</label>
    <div class="col-sm-10">
                       <input type="text" name="Sensors" class="form-control" id="Sensors" placeholder="Sensors"
                              @if(isset($mobiles))
                              value="{{$mobiles->Sensors}}"
                               @endif

                       >
    </div>


    <label for="Audio" class="col-sm-2 control-label">Audio</label>
    <div class="col-sm-10">
                       <input type="text" name="Audio" class="form-control" id="Audio" placeholder="Audio"
                              @if(isset($mobiles))
                              value="{{$mobiles->Audio}}"
                               @endif
                       >
    </div>


    <label for="Browser" class="col-sm-2 control-label">Browser</label>
    <div class="col-sm-10">
                       <input type="text" name="Browser" class="form-control" id="Browser" placeholder="Browser"
                              @if(isset($mobiles))
                              value="{{$mobiles->Browser}}"
                               @endif
                       >
    </div>


    <label for="Messaging" class="col-sm-2 control-label">Messaging</label>
    <div class="col-sm-10">
                       <input type="text" name="Messaging" class="form-control" id="Messaging" placeholder="Messaging"
                              @if(isset($mobiles))
                              value="{{$mobiles->Messaging}}"
                               @endif
                       >
    </div>


    <label for="Games" class="col-sm-2 control-label">Games</label>
    <div class="col-sm-10">
                       <input type="text" name="Games" class="form-control" id="Games" placeholder="Games"
                              @if(isset($mobiles))
                              value="{{$mobiles->Games}}"
                               @endif
                       >
    </div>


    <label for="Torch" class="col-sm-2 control-label">Torch</label>
    <div class="col-sm-10">
                       <input type="text" name="Torch" class="form-control" id="Torch" placeholder="Torch"
                              @if(isset($mobiles))
                              value="{{$mobiles->Torch}}"
                               @endif
                       >
    </div>


    <label for="Extra" class="col-sm-2 control-label">Extra</label>
    <div class="col-sm-10">
                       <input type="text" name="Extra" class="form-control" id="Extra" placeholder="Extra"
                              @if(isset($mobiles))
                              value="{{$mobiles->Extra}}"
                               @endif
                       >
    </div>

    <label for="Capacity" class="col-sm-2 control-label">Capacity</label>
    <div class="col-sm-10">
                       <input type="text" name="Capacity" class="form-control" id="Capacity" placeholder="Capacity"
                              @if(isset($mobiles))
                              value="{{$mobiles->Capacity}}"
                               @endif
                       >
    </div>


    <label for="More" class="col-sm-2 control-label">More</label>
    <div class="col-sm-10">
                       <input type="text" name="More" class="form-control" id="More" placeholder="More"
                              @if(isset($mobiles))
                              value="{{$mobiles->More}}"
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
$table->string('G2Band');
$table->string('G2Band');
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
