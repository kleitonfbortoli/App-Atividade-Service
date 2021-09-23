<?php

namespace App\Http\Controllers;

use App\Models\GrupoAtividade;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class GrupoAtividadeControl extends Controller
{
    public function index()
    {
        return GrupoAtividade::all();
    }

    public function show(GrupoAtividade $grupo_atividade)
    {
        return $grupo_atividade;
    }

    public function store(Request $request)
    {
        $grupo_atividade =  GrupoAtividade::create($request->all());

        return response()->json($grupo_atividade, 201);
    }

    public function update(Request $request, GrupoAtividade $grupo_atividade)
    {
        $grupo_atividade->update($request->all());

        return response()->json($grupo_atividade, 200);
    }

    public function delete(GrupoAtividade $grupo_atividade)
    {
        $grupo_atividade->delete();

        return response()->json(null, 204);
    }
}
