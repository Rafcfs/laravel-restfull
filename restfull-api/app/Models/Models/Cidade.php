<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = [
        'nome',
        'habitantes',
        'id_grupo'
    ];
}
