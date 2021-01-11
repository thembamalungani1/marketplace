<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name' => 'South Africa', 'acronym' => 'ZA'],
            ['name' => 'Zimbabwe', 'acronym' => 'ZW'],
            ['name' => 'Kenya', 'acronym' => 'KEN']
        ];

        foreach ($countries as $country){
            Country::create($country);
        }
    }
}
