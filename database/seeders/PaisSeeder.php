<?php

namespace Database\Seeders;
use App\Models\Pais;

use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::create(['nome' => 'Brasil']);
        Pais::create(['nome' => 'Alemanha']);
        Pais::create(['nome' => 'EUA']);
        Pais::create(['nome' => 'Inglaterra']);
        Pais::create(['nome' => 'Italia']);
        Pais::create(['nome' => 'Japão']);
        Pais::create(['nome' => 'China']);
        Pais::create(['nome' => 'França']);
        Pais::create(['nome' => 'Monaco']);
        Pais::create(['nome' => 'Canada']);
        Pais::create(['nome' => 'Mexico']);
        Pais::create(['nome' => 'Finlandia']);
        Pais::create(['nome' => 'Holanda']);
        Pais::create(['nome' => 'Australia']);
        Pais::create(['nome' => 'Russia']);
        Pais::create(['nome' => 'Espanha']);

    }
}
