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
            'name' => 'Admin',
            'email' => 'admin@demo.com',
            'password' => bcrypt('admindemo'),
            'admin' => true,
            'verified' => true,
        ]);
    }
}
