<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Pub;
use App\Models\User;
use Auth;


class PublicarController extends Controller
{

    public function index(Request $request){


        $pubs = Pub::all();
       

        $search = request('search');

        if($search){

          $usera = User::where([
            ['name', 'like', '%'.$search.'%'] 
          ])->get();

        }else{

          $usera = User::all();
        }
        
        return view('home')->with('pubs', $pubs)->withUser(Auth::User())->with(['usera'=>$usera, 'search'=>$search]);
        
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

      public function find(Request $request) {

        // $usero = ;
        // dd($usero);


        $user = User::find($request->id);

        return view('/perfil')->with('ouser', $user);


      }


      public function edit($id) 
      {

        $edit = Pub::findOrFail($id);

        return view('edit.blade.php', ['pub' => $edit]);


      }


}
