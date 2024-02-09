<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\homeAgendarModel;//Importar a classe que eu quero utilizar

class consultarControl extends Controller
{
    public function consultar() {
        $dados = homeAgendarModel::all();

        return view('paginas.consultar', compact('dados')); //Retorna para o arquivo login.blade.php
    }//Fim do Metodo

    public function editar($id)
    {
        $dado = homeAgendarModel::findOrFail($id);

        return view('paginas.editar', compact('dado'));
    }//fim do método

    public function atualizar(Request $request, $id)
    {
        homeAgendarModel::where('id',$id)->update($request->except(["_token"]));

        return redirect('consultar');
    }//fim do atualizar

    public function excluir(Request $request, $id)
    {
        homeAgendarModel::where('id',$id)->delete($request->all());

        return redirect('consultar');
    }//fim do excluir
}
