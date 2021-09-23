<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoAtividade extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
    ];
    use HasFactory;
}
