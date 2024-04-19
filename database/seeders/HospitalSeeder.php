<?php

namespace Database\Seeders;

use App\Models\Hospital;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hospital::create(['name' => 'Alresaleh' ,'address' => 'Al-Razi Street, next to Al-Razi Hospital','latitude' => '36.212396092682','longitude' => '37.13942438364','status' => 'Available', 'city_id' => '1']);
        Hospital::create(['name' => 'Al-Dabait' ,'address' => 'Engineers Syndicate Street', 'latitude' => '36.214629405243','longitude' => '37.135572731495','status' => 'Available', 'city_id' => '1']);
        Hospital::create(['name' => 'Al-Razi ' ,'address' => 'Al-Razi Street', 'latitude' => '36.211068410091','longitude' => '37.139718085527','status' => 'Available', 'city_id' => '1']);
        Hospital::create(['name' => 'Al-Martini' ,'address' => 'Al-Martini Street, opposite the Mosque of the Promisers of Paradise', 'latitude' => '36.202960076417','longitude' => '37.12668389082','status' => 'Available', 'city_id' => '1']);

    }
}
