@extends('adminlte::page')

@section('content')
    <h3>Nova Entrada</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li> 
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'entradas.store']) !!}  
    <div class="form-group">
        {!! Form::label('valor', 'Valor:') !!}
        {!! Form::number('valor', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::text('descricao', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dt_entrada', 'Data da Entrada:') !!}
        {!! Form::date('dt_entrada', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Criar Entrada', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop