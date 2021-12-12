@extends('adminlte::page')

@section('content')
    <h3>Editando Circuito</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li> 
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['circuito.update', 'id'=>$circuito->id], 'method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', $circuito->nome, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
			{!! Form::label('pais_id', 'Pais:') !!}
			{!! Form::select('pais_id', 
							 App\Models\Pais::orderBy('nome')->pluck('nome', 'id')->toArray(),
							 null, ['class'=>'form-control', 'required']) !!}
	</div>
    <div class="form-group">
			{!! Form::label('cidade_id', 'Cidade:') !!}
			{!! Form::select('cidade_id', 
							 App\Models\Cidade::orderBy('nome')->pluck('nome', 'id')->toArray(),
							 null, ['class'=>'form-control', 'required']) !!}
	</div>
    <div class="form-group">
        {!! Form::submit('Editar Circuito', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop