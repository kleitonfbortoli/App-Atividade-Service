<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class AtividadeControl extends Controller
{
    public function index()
    {
        return Atividade::all();
    }

    public function show(Atividade $atividade)
    {
        return $atividade;
    }

    public function store(HttpFoundationRequest $request)
    {
        $atividade =  Atividade::create($request->all());

        return response()->json($atividade, 201);
    }

    public function update(Request $request, Atividade $atividade)
    {
        $atividade->update($request->all());

        return response()->json($atividade, 200);
    }

    public function delete(Atividade $atividade)
    {
        $atividade->delete();

        return response()->json(null, 204);
    }
}
