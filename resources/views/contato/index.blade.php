
@extends('layout.site')
        
@section('titulo', 'Contatos')

@section('conteudo')
        <h3>index contato</h3>

        @foreach($contatos as $c)
            <p>Nome: {{$c->nome}}, Telefone: {{$c->telefone}}</p>
        @endforeach
@endsection