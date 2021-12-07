@extends('adminlte::page')

@section('content')
    <h3>Editando Entradas</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li> 
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['entradas.update', 'id'=>$entradas->id] 'method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('valor', 'Valor:') !!}
        {!! Form::number('valor', $entradas->valor, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::text('descricao', $entradas->descricao, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dt_entrada', 'Data da Entrada:') !!}
        {!! Form::date('dt_entrada', $entradas->dt_entrada, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar Entrada', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop