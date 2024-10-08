@extends('shared.tabela_marcas', ['card_name' => 'Listar Marcas',
'model_name_plural' => 'Marcas',
'model_name_singular' => 'Marca',
'habilitar_pesquisa' => false,
'route_create_name' => 'marcas.create',
'pesquisar' => 'Digite o nome da marca',
'route_search_name' => 'marcas',
'dados' => $marcas,
'ths' => ['Nome', 'Categoria','País','Fabricação']])

@section('table-content')
@if (count($marcas) > 0)
@foreach ($marcas as $marca)
<tr>
    <td> {{ $marca->nome }}</td>
    <td> {{ ucfirst($marca->categoria) }}</td>
    <td>{{$marca->pais_origem}}</td>
    <td>{{$marca->fabricacao}}</td>
    
    <td>
        <a class="btn btn-primary" href="{{ route('marcas.edit', $marca) }}">
            <i class="fa fa-fw fa-edit"></i> Editar</a>

        <button value="{{ route('marcas.destroy', $marca) }}" class="btn btn-danger delete">
            <i class="fa fa-fw fa-trash"></i>
            Deletar
        </button>
    </td>
</tr>
@endforeach
@endif
@endsection