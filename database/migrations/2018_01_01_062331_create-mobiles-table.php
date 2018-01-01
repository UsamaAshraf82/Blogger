<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiles', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name')->unique();
            $table->string('company');
            $table->string('status');
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
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobiles');

    }

}
