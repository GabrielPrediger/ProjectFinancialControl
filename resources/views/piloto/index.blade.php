@extends('layouts.default')

@section('content')

    {!! Form::open(['name' => 'form_name', 'route' => 'piloto']) !!}
        <div class="sidebar-form">
            <div class="input-group">
                <input type="text" name="desc_filtro" class="form-control" style="width: 80% !important;" placeholder="Pesquisa..."/>
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
    {!! Form::close() !!}
    <table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Nome</th>
			<th>Numero</th>
			<th>Vitorias</th>
            <th>Data de Nascimento</th>
			<th>Inicio das Atividades</th>
			<th>Pais</th>
			<th>Equipe</th>
			<th>Ações</th>
		</thead>
        <tbody>
            @foreach ($pilotos as $piloto)
                <tr>
                    <td>{{ $piloto->nome }}</td>
                    <td>{{ $piloto->numero }}</td>
                    <td>{{ $piloto->vitorias }}</td>
                    <td>{{ Carbon\Carbon::parse($piloto->dt_nascimento)->format('d/m/y') }}</td>
                    <td>{{ Carbon\Carbon::parse($piloto->inicio_atividades)->format('d/m/y') }}</td>
                    <td>{{ $piloto->pais->nome }}</td>
                    <td>{{ $piloto->equipe->nome }}</td>
                    <td>
						<a href="{{ route('piloto.edit', ['id'=>$piloto->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$piloto->id}})" class="btn-sm btn-danger">Remover</a>

					</td>
                </tr>    
            @endforeach
        </tbody>
	</table>

    {{ $pilotos->links("pagination::Bootstrap-4") }}
    
    <a href="{{ route('piloto.create', []) }}" class="btn-sm btn-info">Adicionar</a>    
@stop

@section('table-delete')
"piloto"
@endsection