<?php

use Illuminate\Database\Seeder;

class mobiles_migraton extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\mobile::class, 500)->create();
    }
}
