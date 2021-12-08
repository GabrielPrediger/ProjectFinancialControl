<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $table = "equipe";
    protected $fillable =  ["nome", "piloto", "pais"];

}
