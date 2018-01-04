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
        factory(App\mobile::class, 100)->create();
        DB::statement("UPDATE mobiles SET `price`=0 WHERE `status`='Coming soon'");

    }
}
