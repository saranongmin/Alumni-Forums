class="btn btn-sm btn-outline-danger"<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      echo "Inserting data into database";
       factory(App\User::class,10)->create();
   }
}
