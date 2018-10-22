<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	foreach (config('account') as $detail) {
        	DB::table('accounts')->insert($detail);
    	}
    }
}
