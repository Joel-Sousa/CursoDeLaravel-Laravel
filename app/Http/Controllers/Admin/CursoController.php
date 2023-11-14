<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $registros = Curso::all();

        // dd($registros->all('titulo'));
        return view('admin.cursos.index', compact('registros'));
    }

    public function adicionar(){
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $request){
        
        $dados = $request->all();

        // dd($dados);
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $numero = rand(1111, 9999);
            $diretorio = 'img/cursos';
            $extensao = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$numero.'.'.$extensao;
            $imagem->move($diretorio, $nomeImagem);
            $dados['imagem'] = $diretorio.'/'.$nomeImagem;
        }

        $dados['publicar'] = isset($dados['publicar']) ? 'sim' : 'nao';
        
        Curso::create($dados);

        return redirect()->route('admin.cursos');

    }

    public function editar($id){
        $r = Curso::find($id);
        return view('admin.cursos.editar', compact('r'));
    }

    public function atualizar(Request $request, $id){
        
        $dados = $request->all();

        // dd($dados);
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $numero = rand(1111, 9999);
            $diretorio = 'img/cursos';
            $extensao = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$numero.'.'.$extensao;
            $imagem->move($diretorio, $nomeImagem);
            $dados['imagem'] = $diretorio.'/'.$nomeImagem;
        }

        $dados['publicar'] = isset($dados['publicar']) ? 'sim' : 'nao';
        
        Curso::find($id)->update($dados);

        return redirect()->route('admin.cursos');
    }

    public function deletar($id){
        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }
}
