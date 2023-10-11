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

    public function visualizar(Request $request){
       
        $arquivos=$request->subject;
        //dd($arquivo);

        
        return view('arquivos')->withArquivo($arquivos);
        
    }

    public function find(Request $request) {

        // $usero = ;
        // dd($usero);


        $user = User::find($request->id);

        return view('/perfil')->with('ouser', $user);


      }

    
    public function store(Request $request){
       
        $projeto = new Proj();
        $projeto->titulo=$request->titulo;
        $projeto->descricao=$request->descricao;
        $projeto->user_id=$request->user_id;
        $projeto->created_at=now();
        $nome= $projeto->titulo;
      
       //dd($nome);
         
        //$path = public_path('public/projetos/$nome/');
         $path = public_path('projetos/'.$nome);

       // $projeto->arquivo="da uma segurada ai";

        if (file_exists('$nome')) {
           // mkdir('projetos/'.$nome, 0755, true);

               // ARQUIVO

               
         if ($request->hasFile('arquivonovo') && $request->file ('arquivonovo')->isValid()){

            $requestArquivo=$request->arquivonovo;
            $extension = $request->arquivonovo->extension();

            //dd($requestArquivo);
             $imagemName=$requestArquivo->getClientOriginalName(). strtotime("now"). "." . $extension;
            // dd($imagemName);

             $request->arquivo->storeAs('public/projeto/'.$nome,$imagemName);

             $projeto->arquivo = $imagemName;
             $requestArquivo->move($path,$imagemName);

       }

            File::makeDirectory($path, $mode = 0777, true, true);
            
            //echo 'New directory created successfully.';
       } else {
           // echo 'Directory already exists.';
       }
        
        //$file_path = $request->file('file')->move($folderpath, $actual_name);

        
        // IMAGEM
        //$extension = $request->foto_capa->extension();
      
        //$imagemName= md5($requestImage->getClientOriginalName(). strtotime("now")). "." . $extension;
        //sdd($imagemName);

       //$request->foto_capa->storeAs('public/projeto/'.$nome,'$imagemName');
       //$projeto->imagem=$imagemName;

       if ($request->hasFile('foto_capa') && $request->file ('foto_capa')->isValid()){

        $request->foto_capa->storeAs('public/projeto/'.$nome,'foi essa porra.jpg');
        $requestImage=$request->foto_capa;
      $extension = $request->foto_capa->extension();
       $imagemName= md5($requestImage->getClientOriginalName(). strtotime("now")). "." . $extension;
    $requestImage->move(public_path('projeto/'.$nome),$imagemName);
       $projeto->imagem=$imagemName;

      }

      // ARQUIVO
        
        
      // $projeto->arquivo="da uma segurada ai";
        $projeto->save();
        return redirect()->route('perfil2');
      
}

}
