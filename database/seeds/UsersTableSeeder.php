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
        // add some test users
        DB::table('users')->insert([
            'first' => 'Miguel',
            'last' => 'Huerta',
            'username' => 'mhuerta',
            'email' => 'guelme88@gmail.com',
            'password' => bcrypt('test'),
            'is_admin' => 1
        ]);
    }
}
