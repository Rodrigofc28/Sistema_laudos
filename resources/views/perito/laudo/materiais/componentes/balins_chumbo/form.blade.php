
@section('js')
{!! Html::script('js/selectProjeteis.js') !!} 
{!! Html::script('js/projetil.js') !!}
@if($acao == 'Cadastrar')
{!! Html::script('js/sessionProjet.js') !!}
@endif
@endsection


@if ($acao == 'Cadastrar')
{!! Form::open(['route' => ['componentes.store', $laudo ]]) !!}
@elseif ($acao == 'Atualizar')
{!! Form::open(['route' => ['componentes.update', $laudo, $componente], 'method' => 'patch']) !!}
@else
{!! Form::open() !!}
@endif


<input type="hidden" name="laudo_id" id="laudo_id" value="{{ $laudo->id }}">
<input type="hidden" name="componente" id="componente" value="Projetil">

<div class="col-lg-12" style="padding: 0 5% 0">
    <div class="row mb-3">
        @empty($arma_projetil_gdl)
        
        @else
            @include('perito.laudo.materiais.attributes.atributes_arma_gdl',['name_arma_gdl'=>$arma_projetil_gdl])
        @endempty
        @include('perito.laudo.materiais.attributes.tipo_raiamento', ['tipo_raiamento2' =>
        $componente->tipo_raiamento ?? old('tipo_raiamento')])
        @include('perito.laudo.materiais.attributes.tipo_projetil', ['tipo_projetil2' =>
        $componente->tipo_projetil ?? old('tipo_projetil')])
       
        @include('perito.laudo.materiais.attributes.massa', ['massa' =>(isset($componente))? $componente->massa:'','calibreReal'=>(isset($componente))?$componente->calibreReal:'','calibreNominal'=>(isset($componente))?$componente->calibreNominal:''
         ?? old('massa'), old('calibreReal'),old('calibreNominal') ])
       
         @include('perito.laudo.materiais.attributes.altura_projetil', ['altura' =>  $componente->altura_projetil ?? old('altura')])
         @include('perito.laudo.materiais.attributes.constituicao_formato',['constituicao_formato2' => $componente->constituicao_formato ?? old('constituicao_formato2')])
         @include('perito.laudo.materiais.attributes.aderencia',['aderencia2'=> $componente->aderencia ?? old('aderencia2')])
         
         @include('perito.laudo.materiais.attributes.sentido_raias', ['sentido_raias2' => $componente->sentido_raias ??
        old('sentido_raias')])
        @include('perito.laudo.materiais.attributes.quantidade_raias_projetil', ['quantidade_raias' => $componente->quantidade_raias
        ?? old('quantidade_raias')])
        @include('perito.laudo.materiais.attributes.quantidadeProjetil',['quantidadeProjetil'=>$componente->quantidade_frascos??old('quantidadeProjetil')])
        @include('perito.laudo.materiais.attributes.cavados',['cavados'=>$componente->cavados??old('cavados')])
        @include('perito.laudo.materiais.attributes.ressaltos',['ressaltos'=>$componente->ressaltos??old('ressaltos')])
        @include('perito.laudo.materiais.attributes.projetil_observacao')
        
         
         @include('perito.laudo.materiais.attributes.lacrecartucho', [$name = 'lacrecartucho', $label ="Nº lacre de entrada",'lacre'=>empty($componente->lacrecartucho)?session('lacre_projetil_entrada'):$componente->lacrecartucho ??
        old('lacre')])
        @include('perito.laudo.materiais.attributes.lacrecartucho', [$name = 'lacreSaida', $label ="N° lacre de saida",'lacre'=>empty($componente->lacreSaida)?session('lacre_projetil_saida'):$componente->lacreSaida ??
        old('lacre')])
        @include('perito.laudo.materiais.attributes.material_coletado_projetil',['origem'=>empty($componente->origemcoletadaPerito)?session('origem'):$componente->origem_coletaPerito,'rep'=>empty($componente->rep_materialColetado)?session('rep_coleta'):$componente->rep_materialColetado??old('origem'),old('rep')])
        
        
       
        
        @include('perito.laudo.materiais.attributes.detalharlocalidade',['detalharlocalidade'=>empty($componente->detalharLocalizacao)?session('detalhe_localizacao'):$componente->detalharLocalizacao??old('detalharlocalidade')])
        @include('perito.laudo.materiais.attributes.deformacaoAcidental',['deformacoes2'=>$componente->deformacaoAcidental??old('deformacoes2')])
        

    </div>
    @if($acao == 'Atualizar')
    <!-- <div>
        <hr>
       <strong>• Imagem salva •</strong><br>
       @if(isset($componente->imagensProjetil[0]->nome))
        <img src="{{asset('../storage/imagensProjetil/'.$componente->imagensProjetil[0]->nome)}}" style="width:100px;height:100px"alt="">
        <a href="{{route('imagemProjetilExcluir',$componente->imagensProjetil[0])}}" style="color:red">Excluir Imagem</a>
        @else
        <p>• Sem Imagem •</p>
        @endif
        @if(isset($componente->imagensProjetil[1]->nome))
        <img src="{{asset('../storage/imagensProjetil/'.$componente->imagensProjetil[1]->nome)}}" style="width:100px;height:100px"alt="">
        <a href="{{route('imagemProjetilExcluir',$componente->imagensProjetil[0])}}"style="color:red">Excluir Imagem</a>
        @endif  
       
    </div> -->
     @endif

    <div class="row justify-content-between mb-4">
        <div class="col-lg-4 mt-1">
            <a class="btn btn-secondary btn-block" href="{!! URL::previous() !!}">
                <i class="fas fa-arrow-circle-left"></i> Voltar</a>
        </div>
        
        <div class="col-lg-4 mt-1">
            <button type="submit" class="btn btn-success btn-block"><strong>
                    <i class="fas fa-plus" aria-hidden="true"></i> {{ $acao }}</strong>
            </button>
            {{ Form::close() }}
        </div>
        <div class="col-lg-4 mt-1">
            <a class="btn btn-secondary btn-block" href="{{route('laudos.show', ['id' => $laudo->id])}}">
                <i class="fas fa-arrow-circle-left"></i> Voltar para Visão Geral do Laudo</a>
        </div>
    </div>
</div>
