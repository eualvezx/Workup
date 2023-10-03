<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Pub;
use App\Models\User;
use Auth;


class PublicarController extends Controller
{

    public function index(){


        $pubs = Pub::all();

        //foreach (Pub::all() as $pubs) {
         //   echo $pubs->descricao;
       // }
        //dd($pubs);
        //$pub->$this->$objPublica->all();

        //Usuario logado
        //Auth::User();
        // $todosusu = User::all();

      //dd($todosusu);
        return view('home')->with('pubs', $pubs)->withUser(Auth::User());
        ;
    }

    public function store(Request $request){

        //Pub::create([
            //'descricao'=>$request->descricao,
        //]);
        
        //dd($UserId);

        $public = new Pub();
        $public->descricao=$request->descricao;
        $public->user_id=$request->user_id;
        $public->created_at=now();

        // Imagem

        if ($request->hasFile('foto_pub') && $request->file ('foto_pub')->isValid()){

       
        $requestImage=$request->foto_pub;
        $extension = $request->foto_pub->extension();
        $imagemName= md5($requestImage->getClientOriginalName(). strtotime("now")). "." . $extension;
        //$requestName = Pub::file('foto_pub')->getClientOriginalName();
        $requestImage->move(public_path('img/'),$imagemName);
        $public->imagem =$imagemName;
      }
        
        
        //$request->imagem = $request->foto_pub->storeAs('users', now() . "{$extension}");

        //$public->imagem=$request->foto_pub->store('users');

        //dd($request->foto_pub);
        $public->save();
        return redirect()->route('homenow');
}

//função excluir

public function destroy($id) 
      {

        Pub::findOrFail($id)->delete();

        return redirect('/home')->with('msg' , 'Excluido com sucesso!');


      }

      public function edit($id) 
      {

        $edit = Pub::findOrFail($id);

        return view('edit.blade.php', ['pub' => $edit]);


      }


}
