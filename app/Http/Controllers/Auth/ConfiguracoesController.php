<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ConfiguracoesController extends Controller
{

    public function Configuracoes()
    {
        return view('auth.configuracoes');
    }

    public function edit($id)
    {
      

        if (!$users = User::find($id)) {
            return redirect()->back();
        }

        return view ('auth.edit', compact('users'));
    }
    

    public function update(Request $request)
    {
        $data = [

            'name'=> $request->name,
            'cidade'=> $request->cidade,
            'profissao'=> $request->profissao,
            'estado'=> $request->estado,
        ];

        User::where('id',$request->id)->update($data);
        return redirect()->route('configuracoes');


    }


    

}