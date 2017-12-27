<?php

use Illuminate\Database\Seeder;

class lenovo_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\lenovo::class, 50)->create();
    }
}
