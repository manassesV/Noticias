@extends('layouts.app');



@section('content')
<section class="container">
    <header>
        <a href="{{route('noticias.create')}}" class="btn btn-primary">Nova <span class="icon icon-next"></a>
    </header>
    <table class="table-bordered">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Sub_titulo</th>
                <th scope="col">Texto</th>
                <th scope="col">X</th>
            </tr>
        </thead>
        <tbody>
            @foreach($post as $posts)
            <tr>

                <td>{{$posts->titulo}}</td>
                <td>{{$posts->sub_titulo}}</td>
                <td>{{$posts->texto}}</td>
                <td><a>Inativar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
