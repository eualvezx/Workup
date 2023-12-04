<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Notificacao;
use App\Notifications\WelcomeNotification;
use App\Notifications\UserFollowNotification;


class NotificacaoController extends Controller
{
    public function index(){

        //Exibir notificações
       /* $users = User::get();

        $post = [
            'title' => 'post title',
            'slug' => 'post-slug'
        ];

        foreach($users as $user){

        $user->notify( new WelcomeNotification($post));

        }*/
     

        $notas =  Notificacao::where('user_notifica', '=', Auth::user()->id)->where(['read_at' => NULL])->get();
       // dd($notas);

        return view('notificacao')->withNotas($notas)->withUser(Auth::User());

    }

    public function notify(Request $request){
        $not_seg =  $request->id_seg;
        $not_fol = $request->id_fol;//ouser
        //dd($not_fol);

        
        $notifica = new Notificacao();
        

        $notifica->user_notifica=$not_fol;


        $seguidor = User::where([
            ['id', 'like',$not_seg] 
          ])->get('name');
     
          //dd($seguidor);
        $notifica->data= $not_seg;
       // dd( $notifica->data);

        $notifica->save();
       /* if(auth()->user()){

            $user = User::whereid($notas)->first();

            auth()->user()->notify(new UserFollowNotification($user));

        }*/

        
        return back();
    }

    public function markasread(Request $request){

      $ida= $request->id;
     // dd($ida);
      $notifica = Notificacao::findOrFail($request->id);
      $notifica->read_at = now();
      $notifica->save();
        

     // $notifica->read_at=now();

    //  // $notifica->save();
    //  $data = Now();
    //  //dd($data);
    //  //Notificacao::update('update notificacaos set read_at = ? where id= ?', ['$data,$ida']);


    //  Notificacao::where('id', '==',$ida )
    //     ->update([
    //       'read_at' => now(),
    //     ]);

       
    $notas =  Notificacao::where('user_notifica', '=', Auth::user()->id)->where(['read_at' => NULL])->get();
    // dd($notas);

     return view('notificacao')->withNotas($notas)->withUser(Auth::User());



    }
}
