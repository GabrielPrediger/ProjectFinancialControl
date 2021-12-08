@extends('layouts.default')

@section('content')
    <table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Nome</th>
			<th>Pais</th>
			<th>Equipe</th>
			<th>Ações</th>
		</thead>
        <tbody>
            @foreach ($equipe as $equipe)
                <tr>
                    <td>{{ $equipe->nome }}</td>
                    <td>{{ $equipe->pais }}</td>
                    <td>{{ $equipe->piloto }}</td>
                    <td>
						<a href="{{ route('equipe.edit', ['id'=>$equipe->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$equipe->id}})" class="btn-sm btn-danger">Remover</a>

					</td>
                </tr>    
            @endforeach
        </tbody>
	</table>

    {{ $equipe->links() }}
    
    <a href="{{ route('equipe.create', []) }}" class="btn-sm btn-info">Adicionar</a>    
@stop

@section('table-delete')
"equipe"
@endsection