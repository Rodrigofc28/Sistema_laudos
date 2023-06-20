<?php

/*
 * Developed by Milena Mognon
 */

namespace App\Http\Controllers\Perito\Armas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Armas\GarruchaRequest;
use App\Models\Arma;
use App\Models\Cadastroarmas;
use App\Models\Calibre;
use App\Models\Marca;
use App\Models\Origem;
use Illuminate\Support\Facades\DB;
class GarruchasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($laudo)
    {

        //Dados vindo do GDL TABELA tabela_pecas_gdl seleciona tudo quando as rep forem iguais
        $armasGdl=DB::select('select * from tabela_pecas_gdl where rep = :id  ',['id'=>$laudo->rep]);
        $array_gdl_armas=[];
        foreach($armasGdl as $armagdl){
            if($armagdl->tipo_item=="GARRUCHA(S)"){
                array_push($array_gdl_armas,$armagdl);
            }
        }
        $marcas = Marca::categoria('armas');
        
        $armas = DB::select('select modelo from cadastroarmas ');
       
        $origens = Origem::all();
        $calibres = Calibre::whereArma('Garrucha');
        return view('perito.laudo.materiais.armas.garrucha.create',
            compact('laudo', 'marcas', 'origens', 'calibres','armas','array_gdl_armas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(GarruchaRequest $request)
    {
        Arma::create($request->all());
        return redirect()->route('laudos.show',
            ['laudo_id' => $request->input('laudo_id')])
            ->with('success', __('flash.create_f', ['model' => 'Garrucha']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arma $garrucha
     * @return \Illuminate\Http\Response
     */
    public function show(Arma $garrucha)
    {
//        $marcas = Marca::marcasWithTrashed('armas', $garrucha->marca);
//        $origens = Origem::origensWithTrashed($garrucha->origem);
//        $calibres = Calibre::calibresWithTrashed('revólver', $garrucha->calibre);
        return view('perito.laudo.materiais.armas.garrucha.show',
            compact('arma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laudo $laudo
     * @param  \App\Models\Arma $garrucha
     * @return \Illuminate\Http\Response
     */
    public function edit($laudo, Arma $garrucha)
    {
        $marcas = Marca::marcasWithTrashed('armas', $garrucha->marca);
        $origens = Origem::origensWithTrashed($garrucha->origem);
        if($garrucha->calibre==null){
            $calibres =[]; 
        }else{
        $calibres = Calibre::calibresWithTrashed('Garrucha', $garrucha->calibre);
        }
        $imagens = $garrucha->imagens;
        return view('perito.laudo.materiais.armas.garrucha.edit',
            compact('garrucha', 'laudo', 'marcas', 'origens', 'calibres', 'imagens'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Arma $garrucha
     * @return \Illuminate\Http\Response
     */
    public function update(GarruchaRequest $request, $laudo_id, Arma $garrucha)
    {
        $updated_arma = $request->all();
        Arma::find($garrucha->id)->fill($updated_arma)->save();
        return redirect()->route('laudos.show', ['id' => $laudo_id])
            ->with('success', __('flash.update_f', ['model' => 'Garrucha']));
    }
}
