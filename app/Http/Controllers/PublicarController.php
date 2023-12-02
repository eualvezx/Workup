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


        $pubs = Pub::all()->sortByDesc('created_at');
       

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

    public function lista(Request $request){


      $pubs = Pub::all();
     
      
      return view('arquivos');
      
  }

    public function store(Request $request){

        //Pub::create([
            //'descricao'=>$request->descricao,
        //]);
        
        //dd($UserId);
      

        $public = new Pub();
        $public->descricao=$request->descricao;
        //$public->tipo=$request->tipo;
        $public->user_id=$request->user_id;
        $public->created_at=now();
        $id= $request->user_id;

        // Imagem
        if ($request->hasFile('foto_pub') && $request->file ('foto_pub')->isValid()){

       
        $requestImage=$request->foto_pub;
        $extension = $request->foto_pub->extension();
        $imagemName= md5($requestImage->getClientOriginalName(). strtotime("now")). "." . $extension;
        //$requestName = Pub::file('foto_pub')->getClientOriginalName();
        $requestImage->move(public_path('img/'),$imagemName);
        $public->imagem =$imagemName;
      }
        
      
      if ($request->hasFile('arquivo') && $request->file ('arquivo')->isValid()){

       
        $requestArquivo=$request->arquivo;
        $extension = $request->arquivo->extension();
        $imagemArquivo= md5($requestArquivo->getClientOriginalName(). strtotime("now")). "." . $extension;
        //$requestName = Pub::file('foto_pub')->getClientOriginalName();
        $requestArquivo->move(public_path('storage/files/'.$id.'/publico'),$imagemArquivo);
        $public->imagem =$imagemArquivo;
      }
        

        
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


        $pubs = Pub::all()->sortByDesc('created_at');

        $user = User::find($request->id);

        return view('/perfil')->with('ouser', $user)->with('pubs', $pubs);


      }


      public function edit($id) 
      {

        $edit = Pub::findOrFail($id);

        return view('edit.blade.php', ['pub' => $edit]);


      }


      public function follow ($id){

        $user = User::findOrFail($id);

        $follower = Auth()->user();

        
        $follower->followings()->attach($user->id);
        
        return back();

      }
  
  
      public function unfollow ($id){

        $user = User::findOrFail($id);
        
        $follower = Auth()->user();

        $follower->followings()->detach($user->id);
 
        return back()->with('msg', 'Você está seguindo este usuário');

      }

}
