<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class cadastrarUsuario extends Controller
{
    public function cadastrar() {
        $dados = cadastrarUsuarioModel::all();

        return view('paginas.cadastrar')->With('dados',$dados);
    }//Fim do Metodo

    public function store(Request $request){
        $nomeUsuario = $request->input('nome'); //Coletando dados do formulario
        $emailUsuario = $request->input('email');
        $senhaUsuario = $request->input('senha');

        $model = new cadastrarUsuarioModel();
        $model->nome = $nomeUsuario;
        $model->email = $emailUsuario;
        $model->senha = $senhaUsuario;
        $model->save(); //Armazenar no Banco

        return redirect('/');
    }//Fim do Metodo store
}
