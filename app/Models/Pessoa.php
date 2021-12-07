<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = "pessoas";
    protected $fillable =  ["nome", "idade", "dt_aniversario", "entradas_id", "saidas_id"];

    public function entradas(){
        return $this->hasMany("App\Models\Entradas");
    }

    public function saidas(){
        return $this->hasMany("App\Models\saidas");
    }


}


