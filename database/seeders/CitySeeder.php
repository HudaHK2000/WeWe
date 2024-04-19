<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create(['country_id' => '189', 'name' => 'Aleppo']);
        City::create(['country_id' => '189', 'name' => 'Damascus']);
        City::create(['country_id' => '189', 'name' => 'Homs']);
        City::create(['country_id' => '189', 'name' => 'Hama']);
        City::create(['country_id' => '189', 'name' => 'Latakia']);
    }
}
