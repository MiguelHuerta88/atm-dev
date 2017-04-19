<?php

use Illuminate\Database\Seeder;

class AccountTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert our only two types of accounts
        DB::table('account_types')->insert([
            'id' => 1,
            'type' => 'Checking'
        ]);

        DB::table('account_types')->insert([
            'id' => 2,
            'type' => 'Savings'
        ]);
    }
}
