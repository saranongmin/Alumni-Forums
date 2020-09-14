<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // $this->call(UsersTableSeeder::class);
    	    $this->call(JobsTableSeeder::class);
        //  DB::table('users')->insert([
        //     'image'=>
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@diu.diu.bd',
        //     'password' => Hash::make('password'),
        // ]);

    }
}
