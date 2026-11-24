<?php

namespace Database\Seeders;

use App\Models\departement;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        departement::create(['name' =>'sistem informasi']);
        departement::create(['name' =>'teknk informatika']);
        departement::create(['name' =>'teknologi informasi']);
        departement::create(['name' =>'pendidikan teknologi informasi']);
        departement::create(['name' =>'bisnis digital']);
    }
}
