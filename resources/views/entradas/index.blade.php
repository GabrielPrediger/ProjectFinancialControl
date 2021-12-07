@extends('layouts.default')

@section('content')

    {!! Form::open(['name' => 'form_name', 'route' => 'entradas']) !!}
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
			<th>Valor</th>
			<th>Descrição</th>
			<th>Data da Entrada</th>
			<th>Ações</th>
		</thead>
        <tbody>
            @foreach ($entradas as $entradas)
                <tr>
                    <td>{{ $entradas->valor }}</td>
                    <td>{{ $entradas->descricao }}</td>
                    <td>{{ Carbon\Carbon::parse($entradas->dt_entrada)->format('d/m/y') }}</td>
                    <td>
						<a href="{{ route('entradas.edit', ['id'=>$entradas->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$entradas->id}})" class="btn-sm btn-danger">Remover</a>

					</td>
                </tr>    
            @endforeach
        </tbody>
	</table>

    {{ $entradas->links() }}
    
    <a href="{{ route('entradas.create', []) }}" class="btn-sm btn-info">Adicionar</a>    
@stop

@section('table-delete')
"entradas"
@endsection