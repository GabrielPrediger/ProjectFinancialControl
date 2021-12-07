@extends('layouts.default')

@section('content')

    {!! Form::open(['name'=>'form_name', 'route'=>'pessoas']) !!}
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

    <table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Nome</th>
			<th>Idade</th>
			<th>Data de Nascimento</th>
			<th>Ações</th>
		</thead>
        <tbody>
            @foreach ($pessoas as $pessoas)
                <tr>
                    <td>{{ $pessoas->nome }}</td>
                    <td>{{ $pessoas->idade }}</td>
                    <td>{{ Carbon\Carbon::parse($pessoas->dt_nascimento)->format('d/m/y') }}</td>
                    <td>
						<a href="{{ route('pessoas.edit', ['id'=>$pessoas->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$entradas->id}})" class="btn-sm btn-danger">Remover</a>

					</td>
                </tr>    
            @endforeach
        </tbody>
	</table>

    {{ $entradas->links() }}
    
    <a href="{{ route('pessoas.create', []) }}" class="btn-sm btn-info">Adicionar</a>    
@stop

@section('table-delete')
"pessoas"
@endsection