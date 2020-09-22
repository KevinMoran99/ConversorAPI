<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = array(
            array('Dólar estadounidense', 'USD', '$', 1),
            array('Euro', 'EUR', '€', 1.184),
            array('Libra esterlina', 'GBP', '£', 1.2916),
            array('Peso mexicano', 'MXN', '$',  0.0473));

        foreach($currencies as $currency) {
            $array = array_values($currency);
            DB::table('currencies')->insert([
                'name' => $array[0],
                'iso' => $array[1],
                'symbol' => $array[2],
                'rate' => $array[3]
            ]);
        }
    }
}
