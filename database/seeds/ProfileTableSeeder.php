<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          echo "Inserting data into database";
       factory(App\Profile::class,10)->create();
    }
}
