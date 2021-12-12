<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = "paises";
    protected $fillable = ['nome'];

    public function pilotos(){
        return $this->hasMany("App\Models\Piloto"); //esse pais pode ter varios pilotos
    }
}
