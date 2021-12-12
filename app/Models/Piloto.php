<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{
    protected $table = "pilotos";
    protected $fillable =  ["nome", "numero", "vitorias", "dt_nascimento", "inicio_atividades", "pais_id", "equipe_id"];

    public function pais(){
        return $this->belongsTo("App\Models\Pais"); //o piloto tem um pais
    }

    public function equipe(){
        return $this->belongsTo("App\Models\Equipe"); //o piloto tem um pais
    }
}
