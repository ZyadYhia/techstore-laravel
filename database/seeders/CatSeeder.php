<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cat::create([
            'name' => 'Labtops',
            'active' => 1,
        ]);
        Cat::create([
            'name' => 'PCs',
            'active' => 1,
        ]);
        Cat::create([
            'name' => 'Mobile',
            'active' => 1,
        ]);
    }
}
