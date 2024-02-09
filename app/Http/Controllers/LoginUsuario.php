<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class LoginUsuario extends Controller
{
    public function Login() {
        $dados = cadastrarUsuarioModel::all();

        return view('paginas.login')->With('dados',$dados); //Retorna para o arquivo login.blade.php
    }//Fim do Metodo

    public function validar(Request $request) {
       $nomeUsuario = $request->input('nome'); //Coletando dados do formulario
       $senhaUsuario = $request->input('senha');

        if ($nomeUsuario == "admin" && $senhaUsuario == "123") {    
            return view('paginas.home'); 
        }else{
            return view('paginas.validacao');
        }
    }//fim do Metodo

}//fim da classe
