<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $fillable = [
        'nome',
        'descricao'
    ];
}
