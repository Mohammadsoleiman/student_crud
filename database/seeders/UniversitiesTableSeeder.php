<?php

namespace Database\Seeders;
use App\Models\University;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

University::create(['name' => 'University of Example']);
University::create(['name' => 'State College']);
University::create(['name' => 'Global Institute']);
    }
}
