<?php

namespace Database\Seeders;

use App\Models\user_domicilio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user_domicilioFactory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user_domicilio::factory()->count(100)->create();

    }
}
