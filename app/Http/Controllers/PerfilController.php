<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Pub;
use App\Models\User;
use Auth;

class PerfilController extends Controller
{
    public function index(){


        $pubs = Pub::all();

        

        
        return view('perfil2')->withPubs($pubs)->withUser(Auth::User());
        
    }


    public function store(){


        $pubs = Pub::all();

        

        
        return view('perfil_publicacoes')->withPubs($pubs)->withUser(Auth::User());
        
    }

    public function find(Request $request) {

    
        $pubas = $request->id;
        //dd($pubas);

        $pubs = Pub::where([
            ['user_id', 'like', '%'.$pubas.'%'] 
          ])->get();

        //dd($pubs);

        // $usera = User::where([
        //     ['id', 'like', '%'.$pubas.'%'] 
        //   ])->get();

        $usera = User::findOrFail($pubas);

       // dd($user);
        //return 'oi';

        //return $pubs;

      
        return view('perfil_publicacoes2')->withPubs($pubs)->withUsera($usera);


      }


}
