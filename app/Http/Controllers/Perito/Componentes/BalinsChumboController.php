<?php

namespace App\Http\Controllers\Perito\Componentes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Componente;
use App\Models\Armas_Gdl;
class BalinsChumboController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$laudo)
    {
        $arma_projetil_gdl=Armas_Gdl::find($request->id);
        if ($arma_projetil_gdl) {
        
            $arma_projetil_gdl->status = "CADASTRADO"; // Muda o status para Não pendente
            // tem que criar a coluna updated_at tipo TIMESTAMP
            $arma_projetil_gdl->save(); // Savando no banco de dados
        
        }
        return view('perito.laudo.materiais.componentes.balins_chumbo.create',
            compact('laudo','arma_projetil_gdl'));
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
        return view('perito.laudo.materiais.componentes.balins_chumbo.edit',
            compact('componente', 'laudo'));
    }
}
