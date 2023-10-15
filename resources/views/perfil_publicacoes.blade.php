
<!--ORIGINAL-->

@extends('layouts.app')

@foreach($pubs as $pub)
   @if($pub->user_id == $user->id)
      @if($pubs==[])
        
           <p>Não há publicações</p>";
         @else

       
   




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
               <img src="/img/{{$pub->imagem}}" alt="{{$pub->id}}" class="w-140">
               <div class="mt-4 flex items-center">

               
                  <div class="flex= text-gray-700 text-sm mr-3">
                     <svg fill="none" viewBox="0 0 24 24"  class="w-4 h-4 mr-1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                     </svg>
                     <span>122222aaa</span>
                  </div>
                  
                                             
                  <div class="flex mr-2 text-gray-700 text-sm mr-8">
                     <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                     </svg>
                     <span>8</span>
                  </div>
                  
                  <div class="flex mr-2 text-gray-700 text-sm mr-4">
                     <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                     </svg>
                     <span>share</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <br>

   @endif

   
   @endif

@endforeach

