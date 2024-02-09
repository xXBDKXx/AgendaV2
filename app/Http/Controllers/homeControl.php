<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\homeAgendarModel;//Importar a classe que eu quero utilizar

class homeControl extends Controller
{
    public function Home() {
        $dados = homeAgendarModel::all();

        return view('paginas.home'); //Retorna para o arquivo login.blade.php
    }//Fim do Metodo

    public function store(Request $request){
        $nomeTarefa = $request->input('nome'); //Coletando dados do formulario
        $importanciaTarefa = $request->input('importancia');
        $descricaoTarefa = $request->input('descricao');
        $dataInicioTarefa = $request->input('dataInicio');
        $dataFinalTarefa = $request->input('dataFinal');

        $model = new homeAgendarModel();
        $model->nome = $nomeTarefa;
        $model->importancia = $importanciaTarefa;
        $model->descricao = $descricaoTarefa;
        $model->dataInicio = $dataInicioTarefa;
        $model->dataFinal = $dataFinalTarefa;
        $model->save(); //Armazenar no Banco
         
        $dados  = homeAgendarModel::all(); 
        return view('paginas.consultar', compact('dados'));
    }//Fim do Metodo store

    
}
