@extends('layouts.default')

@section('content')
    <table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Nome</th>
			<th>Pais</th>
			<th>Ações</th>
		</thead>
        <tbody>
            @foreach ($equipes as $equipe)
                <tr>
                    <td>{{ $equipe->nome }}</td>
                    <td>{{ $equipe->pais->nome }}</td>

                    <td>
						<a href="{{ route('equipe.edit', ['id'=>$equipe->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$equipe->id}})" class="btn-sm btn-danger">Remover</a>

					</td>
                </tr>    
            @endforeach
        </tbody>
	</table>

    {{ $equipes->links("pagination::Bootstrap-4") }}
    
    <a href="{{ route('equipe.create', []) }}" class="btn-sm btn-info">Adicionar</a>    
@stop

@section('table-delete')
"equipe"
@endsection