
@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class='container'>
    <h3 class='center'>Entrar</h3>
    <div class='row'>
        <form class='' action="{{route('site.login.entrar')}}" method='post' >
            <!-- cria o token de altenticacao do laravel "{{csrf_field()}}"-->
            {{csrf_field()}}

            <div class='input-field'>
                <input type='text' name='email'/>
                <label>Email</label>
            </div>

            <div class='input-field'>
                <input type='password' name='senha'/>
                <label>Email</label>
            </div>
            
            <button class="btn blue">Entrar</button>
        </form>
    </div>
</div>

@endsection