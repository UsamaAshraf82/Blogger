<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableLatestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('latest', function (Blueprint $table) {
            $table->foreign('htc_id')->references('id')->on('htc');
            $table->foreign('lenovo_id')->references('id')->on('lenovo');
            $table->foreign('vivo_id')->references('id')->on('vivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('latest', function (Blueprint $table) {
            $table->dropForeign('htc_id');
            $table->dropForeign('lenovo_id');
            $table->dropForeign('vivo_id');
        });
    }
}
