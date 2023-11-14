@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class='container'>
    <h3 class='center'>Lista de cursos</h3>
    <div class='row'>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descricao</th>
                    <th>Imagem</th>
                    <th>Valor</th>
                    <th>publicar</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $r)
                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->titulo}}</td>
                    <td>{{$r->descricao}}</td>
                    <td><img width='100' height='90' src='{{asset($r->imagem)}}' alt='{{$r->imagem}}' /></td>
                    <td>{{$r->valor}}</td>
                    <td>{{$r->publicar}}</td>
                    <td>
                        <a class='btn deep-orange' href="{{route('admin.cursos.editar', $r->id)}}">Editar</a>
                    </td>
                    <td>
                        <a class='btn red' href="{{route('admin.cursos.deletar', $r->id)}}">Excluir</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <div class='row'>
        <a class='btn blue' href="{{route('admin.cursos.adicionar')}}"> Adicionar</a>
    </div>
</div>

@endsection