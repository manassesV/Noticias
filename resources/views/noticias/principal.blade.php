@extends('layouts.app');


@section('content')
<section class="container">
    <header class="form-group">
        <a href="{{route('noticias.create')}}" class="btn btn-primary">Nova<span class="icon icon-next"></span></a>
    </header>
    <table class="table-bordered" id="example">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Sub_titulo</th>
                <th>Texto</th>
                <th>Imagem</th>
                <th>X</th>
            </tr>
        </thead>
        <tbody>
            @foreach($post as $posts)
            <tr>

                <td>{{$posts->titulo}}</td>
                <td>{{$posts->sub_titulo}}</td>
                <td>{{$posts->descricao}}</td>
                <td><img src="{{ asset('uploads/noticias/'.$posts->imagens) }}" style="width:100px;height:100px;"></td>
                <td>{{ Form::open(['route' => ['noticias.destroy', $posts->id], 'method' => 'delete']) }}
                    <button type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
