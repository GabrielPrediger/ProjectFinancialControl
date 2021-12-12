@extends('adminlte::page')

@section('content')
    <h3>Novo Piloto</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li> 
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'piloto.store']) !!}  
    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('numero', 'Numero:') !!}
        {!! Form::number('numero', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('vitorias', 'Vitorias:') !!}
        {!! Form::number('vitorias', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dt_nascimento', 'Data de Nascimento:') !!}
        {!! Form::date('dt_nascimento', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('inicio_atividades', 'Inicio das atividades:') !!}
        {!! Form::date('inicio_atividades', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
			{!! Form::label('pais_id', 'Pais:') !!}
			{!! Form::select('pais_id', 
							 App\Models\Pais::orderBy('nome')->pluck('nome', 'id')->toArray(),
							 null, ['class'=>'form-control', 'required']) !!}
	</div>
    <div class="form-group">
			{!! Form::label('equipe_id', 'Equipe:') !!}
			{!! Form::select('equipe_id', 
                             App\Models\Equipe::orderBy('nome')->pluck('nome', 'id')->toArray(),
							 null, ['class'=>'form-control', 'required']) !!}
	</div>
    <div class="form-group">
        {!! Form::submit('Criar Piloto', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop