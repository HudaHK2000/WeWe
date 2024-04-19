<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create(['name' => 'Fall', 'description' => ' A fall occurs when a person loses balance and descends to the ground from various heights.']);
        Status::create(['name' => 'Fire', 'description' => 'A fire occurs when flames ignite and spread rapidly through surrounding materials. Symptoms include thick smoke, a burning smell, and heat emissions.']);
        Status::create(['name' => 'Heart Attack', 'description' => 'A heart attack occurs when a coronary artery is blocked, halting blood flow to a part of the heart muscle.']);
        Status::create(['name' => 'Stroke', 'description' => ' A stroke occurs when a blood clot forms in the blood vessels inside the brain, restricting blood flow and causing brain damage.']);
        Status::create(['name' => 'Traffic Accident', 'description' => 'A traffic accident happens when two or more vehicles collide or when a vehicle collides with a stationary object.']);
        Status::create(['name' => 'Poisoning', 'description' => 'Poisoning occurs when a person ingests or is exposed to a toxic substance.']);
        // يمكنك إضافة المزيد من الحالات إذا لزم الأمر
    }
}
