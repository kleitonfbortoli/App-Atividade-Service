<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoOcorrencia extends Model
{
    protected $fillable = [
        'descricao',
    ];
    use HasFactory;
}
