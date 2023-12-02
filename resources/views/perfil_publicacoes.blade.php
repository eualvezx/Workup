
<!--ORIGINAL-->

@extends('layouts.app')

@forelse($pubs as $pub)
   @if($pub->user_id == $user->id)
     
      <div class="flex bg-white shadow-lg rounded-lg  md:mx-auto  max-w-md md:max-w-2xl "><!--horizantil margin is just for display-->
         <div class="flex items-start px-4 py-6">
         <img src="
          {{\Illuminate\Support\Facades\Storage::disk('public')->url(Auth::user()->imagem)}}" name="logo" class="w-14 h-14 mr-2 object-cover rounded-full">
            <div class="">
               <div class="flex items-center justify-between">
                  <h2 class="text-lg font-semibold text-gray-900 -mt-1">{{ $pub->relUsers->name}}</h2>
                  <small class="text-sm text-gray-700">{{$pub->created_at->format(format:'d/m/Y h:i')}}</small>
               </div>
               
               <p class="mt-3 text-gray-700 text-sm">
               {{ $pub->descricao }}
               </p>
               @if($pub->imagem == null)
               @else
               <img src="/img/{{$pub->imagem}}" alt="{{$pub->id}}" class="w-140">
               @endif
               <div class="mt-4 flex items-center">

               
                  
                  
                                             
                  
                  
                 
               </div>
            </div>
         </div>
      </div>

      <br>

   
   @endif

   @empty
   <div class="bg-indigo-200 m-[3em] border-l-4 rounded-r border-indigo-600 text-orange-700 p-4" role="alert">
        <p class="font-bold text-gray-600">Ainda não há publicações</p>
    </div>
@endforelse

