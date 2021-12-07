<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saidas extends Model
{
    protected $table = "saidas";
    protected $fillable =  ["valor", "descricao", "dt_entrada"];

    public function saidas(){
        return $this->belongsTo("App\Models\saidas");
    }
}
