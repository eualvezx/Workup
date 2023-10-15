<?php

namespace App\Http\Controllers;
use App\Models\Formacoes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UparprojetoController extends Controller
{

    public function uparprojeto()
    {
        return view('uparprojeto');
    }


public function create(Request $request)
    {
        $formacoes = new Formacoes();
        $formacoes->escolaridade =$request->escolaridade;
        $formacoes->descricao =$request->descricao;
        $formacoes->formacoes2 =$request->formacoes2;
        $formacoes->save();

        return redirect('home');
    }

}