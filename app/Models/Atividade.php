<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = [
        'descricao',
        'nome',
        'ref_grupo_atividade',
        'ref_pessoa',
    ];
    use HasFactory;
}
