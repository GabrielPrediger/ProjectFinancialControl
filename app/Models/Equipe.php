<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $table = "equipes";
    protected $fillable =  ["nome", "pais_id"];

    public function equipes(){
        return $this->hasMany("App\Models\Equipe"); //esse pais pode ter varios pilotos
    }

    public function pais(){
        return $this->belongsTo("App\Models\Pais"); //o piloto tem um pais
    }
}
