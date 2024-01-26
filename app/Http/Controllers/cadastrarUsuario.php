<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class cadastrarUsuario extends Controller
{
    public function index(){
        $dados = cadastrarUsuarioModel::all();

        return view('paginas.cadastrar')->With('dados',$dados);
    }//fim do método

    public function store(Request $request){
        $nomeUsuario     = $request->input('nome');//Coletando os dados do formulário
        $telefoneUsuario = $request->input('telefone');
        
        $model = new cadastrarUsuarioModel();
        $model->nome = $nomeUsuario;
        $model->telefone = $telefoneUsuario;
        $model->save();//Armazenar os dados no BD

        return redirect('/cadastrar');
    }//fim do método store
}//fim da classe
