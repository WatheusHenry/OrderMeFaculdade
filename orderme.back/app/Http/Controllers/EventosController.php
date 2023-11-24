<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Eventos::all();
        return response()->json(['data' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = $request->json()->all();

        $validator = Validator::make($data, [
            'Evento' => 'required|string',
            'Evento' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['erro' => $validator->errors()], 400);
        }

        $evento = new Evento();
        $evento->nome = $request->input('nome');
        $evento->data = $request->input('data');

        $evento->save();

        return response()->json(['message' => 'Evento criado com sucesso'], 201);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        var_dump($request);
        return $request->data;
        $validator = Validator::make($request->all(),[
            'Data' => 'required',
            'Evento' => 'required'
        ]);
        return $validator;

        $evento = Eventos::create($data);

        return response()->json(['message' => 'Evento criado com sucesso', 'data' => $evento], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Eventos $eventos)
    {
        return response()->json(['data' => $eventos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eventos $eventos)
    {
        $data = $request->validated();

        $eventos->update($data);

        return response()->json(['message' => 'Evento atualizado com sucesso', 'data' => $eventos]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eventos $eventos)
    {
        Eventos::findOrFail($eventos)->delete();
        return response()->json(['message' => 'Evento excluído com sucesso']);
    }
}
