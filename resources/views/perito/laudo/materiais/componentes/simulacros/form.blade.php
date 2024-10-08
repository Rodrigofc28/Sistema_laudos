@if ($acao == 'Cadastrar')
    {!! Form::open(['route' => ['componentes.store', $laudo ]]) !!}
@elseif ($acao == 'Atualizar')
    {!! Form::open(['route' => ['componentes.update', $laudo, $componente], 'method' => 'patch']) !!}
@else
    {!! Form::open() !!}
@endif

<input type="hidden" name="laudo_id" id="laudo_id" value="{{ $laudo->id }}">
<input type="hidden" name="componente" id="componente" value="Espoletas">

<div class="col-lg-12" style="padding: 0 5% 0">
    <div class="row mb-3">
        

    </div>
    <div class="row justify-content-between mb-4">
        <div class="col-lg-4 mt-1">
            <a class="btn btn-secondary btn-block" href="{!! URL::previous() !!}">
                <i class="fas fa-arrow-circle-left"></i> Voltar</a>
        </div>
        <div class="col-lg-4 mt-1">
            <button type="submit" class="btn btn-success btn-block submit_arma_form"><strong>
                    <i class="fas fa-plus" aria-hidden="true"></i> {{ $acao }}</strong>
            </button>
            {{ Form::close() }}
        </div>
    </div>
</div>