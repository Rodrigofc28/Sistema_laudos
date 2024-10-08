<?php

namespace App\Http\Controllers\Perito\Componentes;

use App\Http\Controllers\Controller;
use App\Models\Componente;

class SimulacroController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($laudo)
    {
        return view('perito.laudo.materiais.componentes.simulacros.create',
            compact('laudo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $laudo
     * @param  Componente $componente
     * @return \Illuminate\Http\Response
     */
    public function edit($laudo, Componente $componente)
    {
        return view('perito.laudo.materiais.componentes.simulacros.edit',
            compact('componente', 'laudo'));
    }
}