<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\WelcomeNotification;
use App\Notifications\UserFollowNotification;


class NotificacaoController extends Controller
{
    public function index(){

        $users = User::get();

        $post = [
            'title' => 'post title',
            'slug' => 'post-slug'
        ];

        foreach($users as $user){

        $user->notify( new WelcomeNotification($post));

        }

        return view('notificacao');

    }

    public function notify(){

        if(auth()->user()){

            $user = User::whereid(2)->first();

            auth()->user()->notify(new UserFollowNotification($user));

        }

        dd('done');
    }

    public function markasread($id){

        if($id){
            auth()->user()->unreadNotifications->where('id',$id)->markAsRead();
        }

        return back();

    }
}
