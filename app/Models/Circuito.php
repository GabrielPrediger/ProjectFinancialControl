<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuito extends Model
{
    protected $table = "circuitos";
    protected $fillable =  ["nome", "pais_id", "cidade_id"];


    public function pais(){
        return $this->belongsTo("App\Models\Pais"); //o piloto tem um pais
    }

    public function cidade(){
        return $this->belongsTo("App\Models\Cidade"); //o piloto tem um pais
    }
}


