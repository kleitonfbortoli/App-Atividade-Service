<?php

namespace App\Http\Controllers;

use App\Models\OcorrenciaAtividade;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class OcorrenciaAtividadeControl extends Controller
{
    public function index()
    {
        return OcorrenciaAtividade::all();
    }

    public function show(OcorrenciaAtividade $ocorrenciaAtividade)
    {
        return $ocorrenciaAtividade;
    }

    public function store(HttpFoundationRequest $request)
    {
        $ocorrenciaAtividade =  OcorrenciaAtividade::create($request->all());

        return response()->json($ocorrenciaAtividade, 201);
    }

    public function update(Request $request, OcorrenciaAtividade $ocorrenciaAtividade)
    {
        $ocorrenciaAtividade->update($request->all());

        return response()->json($ocorrenciaAtividade, 200);
    }

    public function delete(OcorrenciaAtividade $ocorrenciaAtividade)
    {
        $ocorrenciaAtividade->delete();

        return response()->json(null, 204);
    }
}
