@section('js')
{!! Html::script('js/form_metralhadora.js') !!} 
{!! Html::script('js/cabo_material.js') !!}
{!! Html::script('js/recorte.js') !!} 
{!! Html::script('js/sessionMetralhadora.js') !!}  
@endsection


@if ($acao == 'Cadastrar')
{!! Form::open(['route' => ['metralhadoras.store', $laudo ], 'files' => true]) !!}
@elseif ($acao == 'Atualizar')
{!! Form::open(['route' => ['metralhadoras.update', $laudo, $metralhadora], 'method' => 'patch', 'files' => true]) !!}
@else
{!! Form::open() !!}
@endif


<input type="hidden" name="laudo_id" id="laudo_id" value="{{ $laudo->id }}">
<input type="hidden" name="tipo_arma" id="tipo_arma" value="Metralhadora">

<div class="col-lg-12" style="padding: 0 5% 0">
    @foreach($array_gdl_armas as $metralhadora_gdl)
            <span hidden lacre="{!!$metralhadora_gdl->lacre_entrada!!}" id="lacre_entrada_gdl" ></span>
            <span hidden estado_geral="{!!mb_strtolower($metralhadora_gdl->estado_geral)!!}" id="estado_geral_gdl" ></span>
            <span hidden marca="{!!mb_strtoupper($metralhadora_gdl->marca)!!}" id="marca_gdl" ></span>
            <span hidden status_serie="{!!mb_strtolower($metralhadora_gdl->status_serie)!!}" id="estado_serie_gdl" ></span>
            <span hidden num_serie="{!!mb_strtolower($metralhadora_gdl->num_serie)!!}" id="num_serie_gdl" ></span>
            <span hidden capacidade="{!!mb_strtolower($metralhadora_gdl->capacidade)!!}" id="capacidade_gdl" ></span>
            <span hidden acabamento="{!!mb_strtolower($metralhadora_gdl->acabamento)!!}" id="acabamento_gdl" ></span>
            <span hidden patrimonio="{!!mb_strtolower($metralhadora_gdl->patrimonio)!!}" id="patrimonio_gdl" ></span>
            <span hidden lacre_saida="{!!mb_strtolower($metralhadora_gdl->lacre_saida)!!}" id="lacre_saida_gdl" ></span>
            <span hidden fabricacao="{!!mb_strtolower($metralhadora_gdl->fabricacao)!!}" id="fabricacao_gdl" ></span>
            <span hidden modelo="{!!mb_strtolower($metralhadora_gdl->modelo)!!}" id="modelo_gdl" ></span>
            <span hidden calibreNominal="{!!mb_strtolower($metralhadora_gdl->calibre_nominal)!!}" id="calibre_gdl" ></span>
            <span hidden funcionamento="{!!mb_strtolower($metralhadora_gdl->funcionamento)!!}" id="funcionamento_gdl" ></span>
        @endforeach 
    <div class="row mb-3">
        @empty($armas)
            @else
                 @include('perito.laudo.materiais.attributes.buscar_cadastro_salvo',[$nomeArma='Metralhadora'])
        @endempty
        @include('perito.laudo.materiais.attributes.marca', ['marca2' => $metralhadora->marca->id ?? old('marca_id')])
        @include('perito.laudo.materiais.attributes.origem', ['origem2' => $metralhadora->origem->id ?? old('origem_id')])
        @include('perito.laudo.materiais.attributes.modelo', ['modelo' => $metralhadora->modelo ?? old('modelo')])
        @include('perito.laudo.materiais.attributes.serie', ['tipo_serie2' => $metralhadora->tipo_serie ??
        old('tipo_serie'), 'num_serie' => $metralhadora->num_serie ?? old('num_serie')])
        @include('perito.laudo.materiais.attributes.numero_patrimonio',['numero_patrimonio'=>$metralhadora->numero_patrimonio ?? old ('numero_patrimonio')])
        @include('perito.laudo.materiais.attributes.calibre', ['obrigatorio' => true, 'calibre2' =>
        $metralhadora->calibre->id ?? old('calibre_id')])
        @include('perito.laudo.materiais.attributes.calibre_real', ['calibre_real' => $metralhadora->calibre_real ??
        old('calibre_real')])
        @include('perito.laudo.materiais.attributes.dito_oficio')
        @include('perito.laudo.materiais.attributes.numero_canos', ['num_canos2' => $metralhadora->num_canos ??
        old('num_canos')])
        @include('perito.laudo.materiais.attributes.sistema_funcionamento', ['sistema_funcionamento2' =>
        $metralhadora->sistema_funcionamento ?? old('sistema_funcionamento')])
        @include('perito.laudo.materiais.attributes.capacidade_carregador', ['capacidade_carregador' =>
        $metralhadora->capacidade_carregador ?? old('capacidade_carregador')])
        @include('perito.laudo.materiais.attributes.sistema_percussao', ['sistema_percussao2' =>
        $metralhadora->sistema_percussao ?? old('sistema_percussao')])
        @include('perito.laudo.materiais.attributes.sistema_disparo',['sistema_disparo2'=>$metralhadora->sistema_disparo ?? old('sistema_disparo')])
        @include('perito.laudo.materiais.attributes.tipo_acabamento', ['tipo_acabamento2' =>
        $metralhadora->tipo_acabamento ?? old('tipo_acabamento')])
        @include('perito.laudo.materiais.attributes.acabamento_outra_opcao', ['tipo_acabamento2' => $metralhadora->tipo_acabamento
        ?? old('tipo_acabamento')])
        @include('perito.laudo.materiais.attributes.cabo', ['cabo2' => $metralhadora->cabo ?? old('cabo')])
        @include('perito.laudo.materiais.attributes.cabo_outra_opcao', ['cabo2' => $metralhadora->cabo ?? old('cabo')])
        @include('perito.laudo.materiais.attributes.coronha', ['coronha_fuste2' => $metralhadora->coronha_fuste ??
        old('coronha_fuste')])
        @include('perito.laudo.materiais.attributes.telha',['telha'=>$metralhadora->telha ?? old('telha')])
        @include('perito.laudo.materiais.attributes.comprimento', ['comprimento_total' => $metralhadora->comprimento_total
        ?? old('comprimento_total')])
        @include('perito.laudo.materiais.attributes.comprimento_cano', ['comprimento_cano' =>
        $metralhadora->comprimento_cano ?? old('comprimento_cano')])
        @include('perito.laudo.materiais.attributes.sentido_raias', ['sentido_raias2' => $metralhadora->sentido_raias ??
        old('sentido_raias')])
        @include('perito.laudo.materiais.attributes.quantidade_raias', ['quantidade_raias' =>
        $metralhadora->quantidade_raias ?? old('quantidade_raias')])
        @include('perito.laudo.materiais.attributes.funcionamento', ['funcionamento2' => $metralhadora->funcionamento ??
        old('funcionamento')])
        @include('perito.laudo.materiais.attributes.estado_geral', ['estado_geral2' => $metralhadora->estado_geral ??
        old('estado_geral')])
        @include('perito.laudo.attributes.material_coletado')
        @include('perito.laudo.materiais.attributes.lacresaida', ['num_lacre_saida' => $metralhadora->num_lacre_saida ?? old('num_lacre_saida')])
        @include('perito.laudo.materiais.attributes.lacre', ['num_lacre' => $metralhadora->num_lacre ?? old('num_lacre')])
        
        @include('perito.laudo.materiais.attributes.salva_modelo_cadastro')
        <div class="col-lg-3">
        <input type="checkbox" name="institutoArma" id="institutoArma" value="sim"> <strong>Munição para teste fornecida por este Instituto</strong>
        </div>
        @include('perito.laudo.materiais.attributes.imagemArmas')
    </div>
    <div class="row justify-content-between mb-4">
        <div class="col-lg-4 mt-1">
            <a class="btn btn-secondary btn-block" href="{!! URL::previous() !!}">
                <i class="fas fa-arrow-circle-left"></i> Voltar</a>
        </div>
        @if($acao == 'Atualizar')
        <div class="col-lg-4 mt-1">
            <button class="btn btn-primary btn-block ver_imagens" type="button">
                <i class="fas fa-camera"></i> Visualizar Imagens</button>
        </div>
        @endif
        <div class="col-lg-4 mt-1">
            <button type="submit" class="btn btn-success btn-block submit_arma_form"><strong>
                    <i class="fas fa-plus" aria-hidden="true"></i> {{ $acao }}</strong>
            </button>
            {{ Form::close() }}
        </div>
    </div>
</div>
@include('perito.modals.calibre_modal', ['tipo_arma' => 'metralhadora'])
@include('perito.modals.marca_modal')
@include('perito.modals.pais_modal')
@if($acao == 'Atualizar')
@include('perito.modals.visualizar_imagens_modal', ['arma_id' => $metralhadora->id])
@endif