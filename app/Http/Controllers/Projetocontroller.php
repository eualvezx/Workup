<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use App\Models\Proj;
use App\Models\User;
use Auth;


class Projetocontroller extends Controller
{
    public function index(){

        

        
        return view('perfil_projetos')->withUser(Auth::User());
        
    }

    public function visualizar (Request $request){
       
        $arquivo=$request->id;
       // dd($arquivo);

        
        return view('arquivos')->withArquivo($arquivo);
        
    }

    public function find(Request $request) {

        // $usero = ;
        // dd($usero);


        $user = User::find($request->id);

        return view('/perfil')->with('ouser', $user);


      }

    
    public function store (Request $request){
       
      $id= $request->user_id;
      $nomees= $request->descricao;

      //$nome=$request->descricao;
      //dd($id);
    
      if ($request->hasFile('arquivo') && $request->file ('arquivo')->isValid()){

     
        $requestArquivo=$request->arquivo;
        $extension = $request->arquivo->extension();
        $imagemArquivo= md5($requestArquivo->getClientOriginalName(). strtotime("now")). "." . $extension;
        $nome= $nomees.".".$extension;
       // dd($nome);
        //$requestName = Pub::file('foto_pub')->getClientOriginalName();
        $requestArquivo->move(public_path('storage/files/'.$id.'/publico'),$nome);
       // $public->imagem =$imagemArquivo;
      }
        

        
       //$public->save();
        return redirect()->route('homenow');
      
}

}
