<?php

use Illuminate\Database\Seeder;

class vivo_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\vivo::class, 50)->create();
    }
}
