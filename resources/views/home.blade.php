@include('navbar')
@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="cols-2 justify-content-center float-left w-[800px]">
            
            <div class="col-md">
                
                <div class="col-auto w-[200px] h-[8em] shadow-[0_0_5px_5px_rgba(0,0,0,0.1)] rounded-md bg-white p-3 mb-4">

                <!-- BOTAO-->
                
                <img  src="{{\Illuminate\Support\Facades\Storage::disk('public')->url(Auth::user()->imagem)}}" name="logo" class="w-14  h-14 rounded-full float-left object-cover">
                
                    <div>
                      <a href="a" data-toggle="modal" data-target="#ModalCreate">
                        
                           <textarea placeholder="O que você está fazendo hoje?" class="float-left p-2 ml-[4px] text-[20px] w-96 bg-transparent touch-none resize-none rounded-md"></textarea>

                     </a>
                    </div>
            
                </div>

                    <div>
                       

                        
                        @foreach($pubs as $pub)
                        <div class="card bg-white">
                            <div class="card-header bg-white"> <p class="space-x-2 float-left">
                            <img src="{{\Illuminate\Support\Facades\Storage::disk('public')->url($pub->relUsers->imagem)}}" name="logo" class="w-14  h-14 rounded-full float-left object-cover">
                                    <a class="font-bold text-[16px] no-underline text-black">{{ $pub->relUsers->name}}</a> 
                                <!-- Mostra hora-->

                                <a class="float-right no-underline text-[#989898] ml-2"> · Data: {{$pub->created_at->format(format:'d/m/Y h:i')}} </a> </p>
                               
                                
                                <!-- Botão Deleta -->

                                <div class="relative flex float-right">
                                @if(Auth::user()->id == $pub->user_id)  
                                <i id="Menupub"class="cursor-pointer fa-solid fa-lg fa-ellipsis mt-2" style="color: #989898;"></i>

                                    <ul id="Contpub" class="absolute bg-white text-black shadow-[0_0_5px_5px_rgba(0,0,0,0.2)] mt-6 hidden h-[10em] w-[10em] rounded-xl text-center">
                                     
                                    <li>
                                            <form action="/home/{{ $pub->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <button type="submit" class="fs-6 fw-semibold"><i class="fa-solid fa-xmark" style="color: #000000;"></i> Deletar</button>
                                            </form>
                                        </li>
                                        
                                    </ul>
                                    @endif
                                </div>

                                <!-- Botão Alterar Descrição -->

                                


                            </div>
                            
                            <div class="card-body">
                                <li class="list-none">
                                    
                                        {{ $pub->descricao }}

                                        <td> 
                                
                                        <img src="/img/{{$pub->imagem}}" alt="{{$pub->id}}" class="rounded-md object-cover max-h-[500px] w-full"> 
                                        

                                        </td> 
                                </li>
                            </div>
                     </div>
                     <br>
                        @endforeach
                    </div>
             </div>
            
        </div>

        <div hidden>
        <h3>
            Listagem de usuario
            
            (<a href="{{route('homenow')}}">+</a>)
        </h3>
    </div>


        <form action="{{route('homenow')}}" method="GET">
            <div class="float-right space-y-6">

                <div class='flex items-center justify-center mb-4 rounded-md border '>
                    <div class="flex items-center max-w-md mx-auto bg-white rounded-lg " x-data="{ search: '' }">
                        <div class="w-full">
                            <input type="search" id="search" name="search"class="w-full px-4 py-1 text-gray-800 rounded-full focus:outline-none"
                            placeholder="search" >
                        </div>
                        <div>
                            <button type="submit" class="flex items-center bg-[#3C1564] justify-center w-12 h-12 text-white rounded-r-lg" :class="(search.length > 0) ? 'bg-purple-500' : 'bg-gray-500 cursor-not-allowed'" :disabled="search.length == 0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
        
               
        
            </div>

        </form>

<div>
    @if($search)
<br>
    <h3> Buscando por: {{$search}}</h3>

    @else
    <h1> Resultados:</h1>
    @endif


    <div >
        @foreach($usera as $useraa)
        
        
    <a href="{{route('nomehome', ['id' => $useraa->id])}}"><p>{{$useraa->name}}</p></a>
    @endforeach
   
    </div>
</div>

    </div>
    @include('auth.feed.publicacao');
    </div>

</div>

    <script>
        const pubButton = document.querySelector('#Menupub');
        const dropdownpub = document.querySelector('#Contpub');

        pubButton.addEventListener('click', function() {
  // Toggle (alternar) a classe "hidden" no dropdown para exibi-lo ou ocultá-lo
  dropdownpub.classList.toggle('hidden');
});

window.addEventListener('click', function(event) {
  if (!pubButton.contains(event.target) && !dropdownpub.contains(event.target)) {
    dropdownpub.classList.add('hidden');
  }
});
    </script>
    @include('auth.feed.publicacao');
@endsection
