<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::create(['nome' => 'Red Bull']);
        Pais::create(['nome' => 'Mercedes']);
        Pais::create(['nome' => 'Mclaren']);
        Pais::create(['nome' => 'Aston Martin']);
        Pais::create(['nome' => 'Ferrari']);
        Pais::create(['nome' => 'Alpha Tauri']);
        Pais::create(['nome' => 'Williams']);
        Pais::create(['nome' => 'Haas']);    
        Pais::create(['nome' => 'Alphine']);
        Pais::create(['nome' => 'Alfa Romeo']);

    }
}
