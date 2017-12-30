<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(htc_seed::class);
      $this->call(lenovo_table_seeder::class);
        $this->call(vivo_table_seeder::class);
       $this->call(coming_soon_table_seeder::class);

    }
}
