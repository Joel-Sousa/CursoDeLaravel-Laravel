<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;


class ContatoController extends Controller
{
    public function index(){
        $contatos = [
            (object) ['nome' => 'maria', 'telefone' => '61111111111'],
            (object) ['nome' => 'joao', 'telefone' => '61222222222'],
        ];

        $contato = new Contato();
        $nome = $contato->lista();
        // dd($nome->nome);
        // dd($contatos);
        return view('contato.index', compact('contatos'));
    }

    public function create(Request $request){
        // dd($request->all());
        return 'createController';
    }

    public function update(){
        return 'updateController';
    }
}
