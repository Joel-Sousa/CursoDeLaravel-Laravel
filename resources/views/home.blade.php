@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class='container'>
    <h3 class='center'>Lista de cursos</h3>
    <div class="row">
        @foreach($cursos as $c)
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img height='260' src="{{asset($c->imagem)}}">
                </div>
                <div class="card-content">
                    <h4><span class="card-title">{{$c->titulo}}</span></h4>
                    <p>{{$c->descricao}}</p>
                </div>
                <div class="card-action">
                    <a href="#">Ver mais...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection