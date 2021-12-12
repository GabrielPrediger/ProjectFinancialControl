@extends('adminlte::page')

@section('content')
    <h3>Nova Equipe</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li> 
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'equipe.store']) !!}  
    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
			{!! Form::label('pais_id', 'Pais:') !!}
			{!! Form::select('pais_id', 
							 App\Models\Pais::orderBy('nome')->pluck('nome', 'id')->toArray(),
							 null, ['class'=>'form-control', 'required']) !!}
	</div>
    <div class="form-group">
        {!! Form::submit('Criar Equipe', ['class'=>'btn btn-primary'], ['action' => 'preventDefault']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop