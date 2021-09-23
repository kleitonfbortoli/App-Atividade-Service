<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OcorrenciaAtividade extends Model
{
    protected $fillable = [
        'ref_atividade',
        'ref_tipo_ocorrencia',
        'dt_ocorrencia',
    ];
    use HasFactory;
}
