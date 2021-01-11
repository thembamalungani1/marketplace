<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Currency;
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
        $currencies = [
            [
                'country_id' => Country::where('name', 'South Africa')->first()->id,
                'acronym' => 'ZAR'
            ],
            [
                'country_id' => Country::where('name', 'Zimbabwe')->first()->id,
                'acronym' => 'ZWL'
            ],
            [
                'country_id' => Country::where('name', 'Kenya')->first()->id,
                'acronym' => 'KES'
            ]
        ];

        foreach ($currencies as $currency){
            Currency::create($currency);
        }
    }
}
