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


}
