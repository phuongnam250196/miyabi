<?php

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
        DB::table('users')->insert([
            'name' => 'miyabi2019',
            'email' => 'a@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 1,
            'authen' => 1,
        ]);
    }
}
