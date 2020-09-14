<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            	        
          echo "Inserting data into database";
       factory(App\Job::class,8)->create();

    }
}
