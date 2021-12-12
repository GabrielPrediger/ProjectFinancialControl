@extends('layouts.default')

@section('content')
	<h1>Pais</h1>

	{!! Form::open(['name'=>'form_name', 'route'=>'pais']) !!}
		<div class="sidebar-form">
			<div class="input-group">
				<input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
				<span class="input-group-btn">
                	<button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
              	</span>
			</div>
		</div>
	{!! Form::close() !!}
	<br>

	<table class="table table-striped table-fit table-bordered table-hover">
		<thead>
			<th>Nome</th>
			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($paises as $pais)
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

	{{ $paises->links("pagination::Bootstrap-4") }}

	<a href="{{ route('pais.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"paises"
@endsection

