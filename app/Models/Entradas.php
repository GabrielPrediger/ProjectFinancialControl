<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
    protected $table = "entradas";
    protected $fillable =  ["valor", "descricao", "dt_entrada"];

    public function entradas(){
        return $this->belongsTo("App\Models\Entradas");
    }
}
