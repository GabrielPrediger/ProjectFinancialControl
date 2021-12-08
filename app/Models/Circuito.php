<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuito extends Model
{
    protected $table = "circuito";
    protected $fillable =  ["nome", "pais", "cidade"];

}


