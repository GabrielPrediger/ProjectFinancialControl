@extends('layouts.default')

@section('content')
    <table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Valor</th>
			<th>Descrição</th>
			<th>Data da Saida</th>
			<th>Ações</th>
		</thead>
        <tbody>
            @foreach ($saidas as $saidas)
                <tr>
                    <td>{{ $saidas->valor }}</td>
                    <td>{{ $saidas->descricao }}</td>
                    <td>{{ Carbon\Carbon::parse($saidas->dt_entrada)->format('d/m/y') }}</td>
                    <td>
						<a href="{{ route('saidas.edit', ['id'=>$saidas->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$saidas->id}})" class="btn-sm btn-danger">Remover</a>

					</td>
                </tr>    
            @endforeach
        </tbody>
	</table>

    {{ $saidas->links() }}
    
    <a href="{{ route('saidas.create', []) }}" class="btn-sm btn-info">Adicionar</a>    
@stop

@section('table-delete')
"saidas"
@endsection