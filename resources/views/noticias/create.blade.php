@extends('layouts.app');

@section('content')
<div class="container-fluid">
    {!! Form::open(['route' => 'noticias.store', 'class' => 'form-horizontal','files' => true]) !!}
    <!-- Titulo -->
    <div class="form-group">
        {!! Form::label('tit', 'Título:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::text('titulo', $value = null, ['class' => 'form-control', 'placeholder' => 'titulo']) !!}
        </div>
    </div>

    <!-- Sub_titulo -->
    <div class="form-group">
        {!! Form::label('sub', 'Sub-Título:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::text('sub_titulo', $value = null, ['class' => 'form-control', 'placeholder' => 'Sub_titulo']) !!}
        </div>
    </div>

    <!--Texto-->
    <div class="form-group">
        {!! Form::label('desc', 'Descrição:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::textarea('descricao', $value = null , ['class' => 'form-control', 'placeholder' => 'Descrição das Noticias', 'rows' => 5]) !!}
            <span class="help-block">Descreva as noticias com Português claro e conciso.</span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('img','Imagem:',['class' => 'col-lg-2 control-label'])!!}
        <div class="col-lg-10">
            {!!   Form::file('image', ['class' => 'col-lg-8 control-label']); !!}
        </div>
    </div>
    <!-- Submit Button -->
    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            {!! Form::submit('Enviar', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
        </div>
    </div>
    <div class="form-group">
        @if ( count( $errors ) > 0 )
        @foreach ($errors->all() as $error)
        <div class="text-warning">{{ $error }}</div>
        @endforeach
        @endif
    </div>

    {!! Form::close()  !!}



</div>

</div>
@endsection