<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{
    protected $table = "piloto";
    protected $fillable =  ["nome", "numero", "vitorias", "dt_nascimento", "inicio_atividades", "pais", "equipe"];

}
