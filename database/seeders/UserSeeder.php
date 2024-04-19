<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'user', 'email' => 'user@email.com','password' => '123456789','address' => 'aleppo','phone' => '0967777777','is_admin' => '0' ]);
        User::create(['name' => 'admin', 'email' => 'admin@email.com','password' => '123456789','address' => 'online','phone' => '0969999999','is_admin' => '1' ]);
        User::create(['name' => 'Alresaleh', 'email' => 'alresaleh@email.com','password' => '123456789','address' => 'Al-Razi Street, next to Al-Razi Hospital','phone' => '0968888881','is_admin' => '2','hospital_id' => '1']);
        User::create(['name' => 'Al-Dabait', 'email' => 'al_dabait@email.com','password' => '123456789','address' => 'Engineers Syndicate Street','phone' => '0968888882','is_admin' => '2','hospital_id' => '2']);
        User::create(['name' => 'Al-Razi ', 'email' => 'al_razi@email.com','password' => '123456789','address' => 'Al-Razi Street','phone' => '0968888883','is_admin' => '2','hospital_id' => '3']);
        User::create(['name' => 'Al-Martini ', 'email' => 'al_martini@email.com','password' => '123456789','address' => 'Al-Martini Street, opposite the Mosque of the Promisers of Paradise','phone' => '0968888884','is_admin' => '2','hospital_id' => '4']);

    }
}
