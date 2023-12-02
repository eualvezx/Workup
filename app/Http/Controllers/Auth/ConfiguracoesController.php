<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ConfiguracoesController extends Controller
{

    public function Configuracoes()
    {
        return view('auth.configuracoes');
    }


    public function Privacidade()
    {
        return view('auth.privacidade');
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
        if($request->foto_pub){
            $file=$request->foto_pub;
           //dd($file);
          $path= $file->store('perfil', 'public');
        }   

        if($request->foto_banner){
            $file=$request->foto_banner;
           //dd($file);
          $patha= $file->store('banner', 'public');
        }
      
       // dd($path);
        $data = [

            'name'=> $request->name,
            'cidade'=> $request->cidade,
            'profissao'=> $request->profissao,
            'estado'=> $request->estado,
            'imagem'=>$path ?? Auth::user()->imagem,
            'banner'=>$patha ?? Auth::user()->banner,
            'instagram'=> $request->instagram ?? Auth::user()->instagram,
            'x'=> $request-> x ?? Auth::user()->x,
            'facebook'=> $request->facebook ?? Auth::user()->facebook,
            'escolaridade'=> $request->escolaridade ?? Auth::user()->escolaridade,
            'descricao'=> $request->descricao ?? Auth::user()->descricao,
            'formacoes2'=> $request->formacoes2 ?? Auth::user()->formacoes2,
            
        ];

        User::where('id',$request->id)->update($data);
        return redirect()->route('configuracoes') -> with('mensagem', 'Perfil Atualizado com sucesso!');


    }

        public function destroy ($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/login');
    }

    }


    

