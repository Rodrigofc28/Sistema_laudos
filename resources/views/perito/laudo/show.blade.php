@extends('layout.component')
@section('js')
{!! Html::script('js/filtrar_solicitantes.js') !!}
{!! Html::script('js/calendar.js') !!}
{!! Html::script('js/cropper.js') !!}
{!! Html::script('js/dropzone.js') !!}
{!! Html::script('js/dropzone_config.js') !!}
{!! Html::script('js/cropper_image.js') !!}
{!! Html::script('js/edicaoimagem.js') !!}
{!! Html::script('js/edicaolaudo.js') !!}

@endsection
@section('page')
{{-- <div class="col-8">
    <h4>Visão Geral do Laudo</h4>
   
   
      
</div> --}}
<hr>

<div id="showLaudo" class="col-lg-12">
        <span><strong>REP:</strong> {{$laudo->rep}}</span><br>
        
        <input type="button" class="btn btn-success" id="btn-edit" value="Editar Informações do cabeçalho">
       
      </div>
       
<div class="col-lg-12" id="editarInformacoes">
    {!! Form::open(['route' => ['laudos.update', $laudo], 'method' => 'patch']) !!}

    <input type="hidden" value="{{$laudo->id}}" id="laudo_id" name="laudo_id">
    <div class="form-group row"> 
        
        
      

         @include('perito.laudo.attributes.rep', ['rep' => '' ?? old('rep')])
        @include('perito.laudo.attributes.oficio', ['oficio' => '' ?? old('oficio')])
        
        @include('perito.laudo.attributes.tipo_inquerito', ['tipo_inquerito2' => '' ??
        old('tipo_inquerito')])
        @include('perito.laudo.attributes.inquerito', ['inquerito' => '' ?? old('inquerito')])

        @include('shared.input_calendar', ['label' => 'Data da Solicitação',
        'name' => 'data_solicitacao', 'size' => '3', 'value' => ''])

        @include('shared.input_calendar', ['label' => 'Data da Designação',
        'name' => 'data_designacao', 'size' => '3', 'value' => ''])
        @include('shared.input_calendar', ['label' => 'Data da ocorrência', 'name' => 'data_ocorrencia', 'size' => '3',
    'value' => ''])
    @include('shared.input_calendar', ['label' => 'Data do recebimento', 'name' => 'data_recebimento', 'size' => '3',
    'value' => ''])

        <input class="form-control" type="hidden" name="perito_id" autocomplete="off" value="{{ Auth::id() }}" />
        @include('shared.attributes.secao', ['secao2' => '' ?? old('secao_id')])
        @include('shared.attributes.cidades', ['id' => 'cidade_id', 'size' => '4', 'cidade2' => '$laudo->cidade_id '??
        old('cidade_id')])
        

        @include('perito.laudo.attributes.solicitante', ['solicitante2' => $laudo->solicitante_id ??
        old('solicitante_id')])
        @include('perito.laudo.attributes.boletim_ocorrencia',['boletim2'=>''??old('boletim')])
       
         
        
        
        <div class="col-lg-3 mt-auto">
            <button type="submit" id="salvar" class="btn btn-primary mt-2">
                <i class="far fa-save" aria-hidden="true"></i>
                Editar Informações
            </button>
        </div>
        {{ Form::close() }} 
    </div>
</div>

<hr>

<div class="col-lg-12">
    
    
    <div style="border:solid 1px #E0E0E0; ">
    
        <form action="{{route('embalagem')}}" method="post"  enctype="multipart/form-data">
        {{ csrf_field() }}
            
        
            <h4><strong style="padding:10px "> ADICIONAR IMAGENS DA EMBALAGEM RECEBIDA </strong> </h4>
            <input type="text" hidden name="laudo_id" value="{{$laudo->id}}">
            
            <div class="input-group mb-2">
                <button style="border:solid 0px;">FRENTE</button>
                <button type="submit" style="border:solid 0px;background:#007bff;color:white" >ENVIAR </button>
                
                <input type="file" class="form-control" id="inputGroupFile01"name="fotoEmbalagem[]" multiple="multiple"id="" accept=".jpg, .jpeg, .png">
                
            </div>
            <div class="input-group mb-2">
                <button style="border:solid 0px;">VERSO</button>
                <button type="submit" style="border:solid 0px;background:#007bff;color:white" >ENVIAR</button>
                <input type="file" class="form-control" id="inputGroupFile01"name="fotoEmbalagem[]" multiple="multiple"id="" accept=".jpg, .jpeg, .png">
                
            </div>
           
            
           
        </form>
    
        <hr>
        <div>
        
        
        @if(isset($laudo->imagens[0]->nome))
       
       
            
            @php
            
                for ($i = 0; $i < count($laudo->imagens); $i++) {
                    echo '<div style="background-color:#90EE90">    
                        <img src="' . asset('../public/storage/imagensEmbalagem/' . $laudo->imagens[$i]->nome) . '" style="width:100px;height:100px;padding:10px" alt="">
                        <strong><a href="' . route('imagemExcluir', $laudo->imagens[$i]) . '" style="color:white">EXCLUIR IMAGEM</a></strong>
                        </div>';
                }
            @endphp
        @endif
    </div>
 
    </div>
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped" id="tabela_pecas">
            <thead align="center">
                <tr>
                    <th>Material</th>
                    <th>Marca</th>
                    <th>Calibre</th>
                    <th>Quantidade</th>
                    
                    <th>Nº do Lacre</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody align="center">
                @includeWhen(count($armas) > 0, 'perito.laudo.partials.arma')
                @includeWhen(count($municoes) > 0, 'perito.laudo.partials.municao')
                @includeWhen(count($componentes) > 0, 'perito.laudo.partials.componente')
            </tbody>
        </table>
    </div>
    


    <div class="row mb-3">
        <div class="col-lg-3 mt-2">
            <a class="btn btn-secondary btn-block" href="{!! URL::previous() !!}">
                <i class="fas fa-arrow-circle-left"></i> Voltar</a>
        </div>

        <div class="col-lg-3 mt-2">
            <a class="btn btn-success btn-block" href="{{ route('laudos.materiais', $laudo )}}">
                <i class="fas fa-plus" aria-hidden="true"></i>
                Adicionar Material
            </a>
        </div>
        {{-- <div class="col-lg-3 mt-2">
            <a class="btn btn-success btn-block" href="{{ route('laudos.materiais', $laudo )}}">
        <i class="fas fa-camera" aria-hidden="true"></i>
        Adicionar Imagens
        </a>
    </div> --}}
    <div class="col-lg-3 mt-2">
        <a class="btn btn-primary btn-block" href="{{ route('laudos.docx', $laudo )}}">
            <i class="fas fa-file-download" aria-hidden="true"></i>
            Gerar Laudo (.docx)
        </a>
    </div>
</div>
</div>
@include('perito.modals.solicitante_modal')
@endsection
