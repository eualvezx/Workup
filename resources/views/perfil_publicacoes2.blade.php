@extends('layouts.app')




 @forelse($pubs as $pub)
   

   
 <div class="cols-1 justify-content-center card bg-white shadow-lg rounded-lg w-[55em] mx-[10em]  "><!--horizantil margin is just for display-->
        <div class="  bg-white card-header ">
            <p class="space-x-2 float-left">   
                <img src="
                {{\Illuminate\Support\Facades\Storage::disk('public')->url(Auth::user()->imagem)}}" name="logo" class="w-14  h-14 rounded-full float-left object-cover">
                
                    <div class="flex items-center justify-between">
                        <h2 class="font-bold text-[16px] no-underline text-black">{{ $pub->relUsers->name}}</h2>
                        <a class="float-right no-underline text-[#989898] ml-2">{{$pub->created_at->format(format:'d/m/Y h:i')}}</a>
                    </div>
            </p>
        </div>  
            
            <div class="card-body">
                <div class="list-none">
                    <p class="mt-3 text-gray-700 text-sm">
                    {{ $pub->descricao }}
                    </p>
                    @if($pub->imagem == null)
                    @else
                    <img src="/img/{{$pub->imagem}}" alt="{{$pub->id}}" class="rounded-md object-cover max-h-[500px] w-full">
                    @endif
                    
                </div>
            </div>   
    </div>
 
      <br>

   
@empty
<div class="bg-indigo-200 m-[3em] border-l-4 rounded-r border-indigo-600 text-orange-700 p-4" role="alert">
        <p class="font-bold text-gray-600">Ainda não há publicações</p>
</div>
@endforelse



</html>