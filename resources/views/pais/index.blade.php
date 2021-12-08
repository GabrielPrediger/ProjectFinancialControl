@extends('layouts.default')

@section('content')
	<h1>Pais</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Nome</th>
			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($pais as $pais)
				<tr>
					<td>{{ $pais->nome }}</td>
					<td>
						<a href="{{ route('pais.edit', ['id'=>$pais->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$pais->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>	

	{{ $pais->links() }}

	<a href="{{ route('pais.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"pais"
@endsection

