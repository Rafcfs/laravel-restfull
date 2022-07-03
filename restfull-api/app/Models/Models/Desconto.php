<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desconto extends Model
{
    protected $fillable = [
        'produto_id',
        'campanha_id',
        'valor'
    ];
}
