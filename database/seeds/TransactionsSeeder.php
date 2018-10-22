<?php

use Illuminate\Database\Seeder;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$transactions = [
    		[
    			'name' => "Kas",
    			'type' => "D"
    		],
    		[
    			'name' => "Pembelian Aktiva",
    			'type' => "K"
    		]
    	];

    	foreach ($transactions as $detail) {
        	DB::table('transactions')->insert($detail);
    	}
    }
}
