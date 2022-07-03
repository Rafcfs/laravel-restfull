<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'id_campanha'
    ];
}
