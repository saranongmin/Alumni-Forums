<?php

use Illuminate\Database\Seeder;

class GarosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Inserting data into database";
       factory(App\Garo::class,10)->create();
    }
}
