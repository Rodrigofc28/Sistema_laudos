@extends('layout.component')
@section('page')
    <div class="col-8">
        <h4>Cadastro de Espingarda</h4>
    </div>
    <hr>
    @include('perito.laudo.materiais.armas.espingarda.form', ['acao' => 'Cadastrar'])
@endsection