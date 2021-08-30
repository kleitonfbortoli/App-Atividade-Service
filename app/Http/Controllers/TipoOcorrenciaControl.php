<?php

namespace App\Http\Controllers;

use App\Models\TipoOcorrencia;
use Illuminate\Http\Request;

class TipoOcorrenciaControl extends Controller
{
    public function index()
    {
        return TipoOcorrencia::all();
    }

    public function show(TipoOcorrencia $tipoOcorrencia)
    {
        return $tipoOcorrencia;
    }

    public function store(Request $request)
    {
        $tipoOcorrencia =  TipoOcorrencia::create($request->all());

        return response()->json($tipoOcorrencia, 201);
    }
    
    public function update(Request $request, TipoOcorrencia $tipoOcorrencia)
    {
        $tipoOcorrencia->update($request->all());

        return response()->json($tipoOcorrencia, 200);
    }

    public function delete(TipoOcorrencia $tipoOcorrencia)
    {
        $tipoOcorrencia->delete();

        return response()->json(null, 204);
    }
}
