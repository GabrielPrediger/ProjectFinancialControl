@extends('layouts.default')

@section('content')
	<h1>Cidade</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Nome</th>
			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($cidade as $cidade)
				<tr>
					<td>{{ $cidade->nome }}</td>
					<td>
						<a href="{{ route('cidade.edit', ['id'=>$cidade->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$pais->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>	

	{{ $cidade->links() }}

	<a href="{{ route('cidade.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"cidade"
@endsection

