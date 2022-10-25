<?php

namespace App\Http\Controllers\Perito\Municoes;

use App\Http\Controllers\Controller;
use App\Http\Requests\MunicaoRequest;
use App\Models\Municao;

class MunicoesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MunicaoRequest $request, $laudo)
    {   
        
        Municao::create($request->all());
        return redirect()->route('laudos.show',
            ['laudo_id' => $laudo->id])
            ->with('success', __('flash.create_f', ['model' => 'Munição']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Municao $municao
     * @return \Illuminate\Http\Response
     */
    public function edit($laudo, Municao $municao)
    {
        if ($municao->municao_de == "arma longa") {
            return redirect()->route('armas_longas.edit', [$laudo, $municao]);
        } 
        if($municao->municao_de == "arma curta") {
            return redirect()->route('armas_curtas.edit', [$laudo, $municao]);
        }
        return redirect()->route('laudos.show',
            ['laudo_id' => $laudo->id])
            ->with('warning', 'Não é possível editar este material!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Municao $municao
     * @return \Illuminate\Http\Response
     */
    public function update(MunicaoRequest $request, $laudo_id, Municao $municao)
    {
        $updated_municao = $request->all();
        Municao::find($municao->id)->fill($updated_municao)->save();
        return redirect()->route('laudos.show', ['id' => $laudo_id])
            ->with('success', __('flash.update_f', ['model' => 'Munição']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $laudo
     * @param $municao
     * @return \Illuminate\Http\Response
     */
    public function destroy($laudo, $municao)
    {
        Municao::destroy($municao->id);
        return response()->json(['success' => 'done']);
    }
}
