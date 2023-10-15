<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cpf'=>['required', 'string', 'max:11', 'unique:users'],
            'dt'=>['required', 'date', 'max:12'],
            'estado'=>['required', 'string', 'max:2'],
            'cidade'=>['required', 'string', 'max:64'],
            'profissao'=>['required', 'string', 'max:32'],
            'typecont'=>['nullable', 'string', 'max:2'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cpf'=> $data['cpf'],
            'dt'=> $data['dt'],
            'estado'=> $data['estado'],
            'cidade'=> $data['cidade'],
            'profissao'=> $data['profissao'],
            'typecont'=> $data['typecont'],
           
        ]);
        dd($data);
        //Criar uma pasta unica pra cada usuario assim que logar
        //Storage::makeDirectory($data['name']);
    }

    

 /*
    public function edit($id)
    {
        $users = User::where('id',$id)->first();
        if(!empty($users))
        {
            return view('configuracoes', ['users'=>$users]);
        }
        
        else
        {
            return redirect()->route('home');
        }
      
        
    }
*/
}