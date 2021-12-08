@extends('layouts.default')

@section('content')

    {!! Form::open(['name'=>'form_name', 'route'=>'circuito']) !!}
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
			<th>Pais</th>
			<th>Cidade</th>
			<th>Ações</th>
		</thead>
        <tbody>
            @foreach ($circuito as $circuito)
                <tr>
                    <td>{{ $circuito->nome }}</td>
                    <td>{{ $circuito->pais }}</td>
                    <td>{{ $circuito->cidade }}</td>
                    <td>
						<a href="{{ route('circuito.edit', ['id'=>$circuito->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$circuito->id}})" class="btn-sm btn-danger">Remover</a>

					</td>
                </tr>    
            @endforeach
        </tbody>
	</table>

    {{ $circuito->links() }}
    
    <a href="{{ route('circuito.create', []) }}" class="btn-sm btn-info">Adicionar</a>    
@stop

@section('table-delete')
"circuito"
@endsection