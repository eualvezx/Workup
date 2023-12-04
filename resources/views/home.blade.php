@include('navbar')
@extends('layouts.app')
@section('content')
 
 
<style>
    .modal-content{
    width:55%;
    margin:0 auto;
    
  
}
#lixo:hover {
  color: red;
}
</style>
 
    <div class="container">
        <div class="cols-2  justify-content-center float-left w-[800px]">
            
            <div class="col-md">
                
                <div class="col-auto w-[200px] h-[8em] shadow-[0_0_5px_5px_rgba(0,0,0,0.1)] rounded-md bg-white p-3 mb-4">
 
                <!-- BOTAO-->
                
                <img  src="{{\Illuminate\Support\Facades\Storage::disk('public')->url(Auth::user()->imagem)}}" name="logo" class="w-14  h-14 rounded-full float-left object-cover">
                
                    <div>
                      <a href="a" data-toggle="modal" data-target="#ModalCreate">
                        
                           <textarea placeholder="O que você está fazendo hoje?" class="float-left p-2 ml-[4px] text-[20px] w-96 bg-transparent touch-none resize-none rounded-md"></textarea>
 
                     </a>
 
                     <a href="a" class="no-underline w-[3em]" data-toggle="modal" data-target="#ModalCreate1" style="color: #000000">
                        
                            
            <label for="upload" class="flex flex-col items-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-white stroke-indigo-500" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <span class="float-right text-gray-600  font-medium">Upar arquivo</span>
            </label>
            <input id="upload" type="file" class="hidden" />
    
 
                  </a>
                    </div>
            
                </div>
 
                    <div>
                       
 
                        
                       @forelse($pubs as $pub)
                        
                        <div class="card bg-white">
                            <div class="card-header bg-white"> <p class="space-x-2 float-left">
                            <img src="{{\Illuminate\Support\Facades\Storage::disk('public')->url($pub->relUsers->imagem)}}" name="logo" class="w-14  h-14 rounded-full float-left object-cover">
                                    <a class="font-bold text-[16px] no-underline text-black">{{ $pub->relUsers->name}}</a>
                                <!-- Mostra hora-->
 
                                <a class="float-right no-underline text-[#989898] ml-2"> · Data: {{$pub->created_at->format(format:'d/m/Y h:i')}} </a> </p>
                               
                                
                                <!-- Botão Deleta -->
                                <div class="dropdown">
                                <div class="relative flex float-right">
                                @if(Auth::user()->id == $pub->user_id)  
                                <button onclick="myFunction()" class="dropbtn"></button>
 
                              
                                    <!--<ul id="Contpub" class="absolute bg-white text-black shadow-[0_0_5px_5px_rgba(0,0,0,0.2)] mt-6 hidden h-[10em] w-[10em] rounded-xl text-center">
                                    <div id="myDropdown" class="dropdown-content">-->
                                    <div id="myDropdown" class="dropdown-content">
                                    <a>
                                            <form action="/home/{{ $pub->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <button type="submit" class="fs-6 fw-semibold"><i class="fa-solid fa-trash fa-xl "style="hover:color: #3C1564;" id="lixo"></i></button>
                                            </form>
                    </a>
                                  </div>
                                        
                                    </ul>
                                
                                    @endif
                                </div>
                                </div>
 
                                <!-- Botão Alterar Descrição -->
 
                                
 
 
                            </div>
                            
                            <div class="card-body">
                                <li class="list-none">
                                    
                                        {{ $pub->descricao }}
 
                                        <td>
                                        @if ($pub->imagem == null)
                                        
                                        @else
                                        <img src="/img/{{$pub->imagem}}" alt="{{$pub->id}}" class="rounded-md object-cover max-h-[500px] w-full">
                                        @endif
 
                                        </td>
                                </li>
                            </div>
                     </div>
                     <br>
                     @empty
 
 
                    <div class="bg-indigo-200 border-l-4 rounded-r border-indigo-600 text-orange-700 p-4" role="alert">
                    <p class="font-bold text-gray-600">Ainda não há publicações</p>
                    </div>
                     @endforelse
                    </div>
             </div>
            
        </div>
 
        <div hidden>
        <h3>
            Listagem de usuario
            
            (<a href="{{route('homenow')}}">+</a>)
        </h3>
    </div>
    <div class="float-right space-y-6">
 
        <form action="{{route('homenow')}}" method="GET">
           
 
                <div class='flex items-center justify-center mb-4 rounded-md  '>
                    <div class="flex items-center max-w-md mx-auto bg-white rounded-lg " x-data="{ search: '' }">
                        <div class="w-full">
                            <input type="search" id="search" name="search"  class="w-full px-4 py-1 text-gray-800 rounded-full focus:outline-none"
                            placeholder="Procurar" >
                        </div>
                        <div>
                            <button type="submit" onclick="Mudarestado('minhaDiv')" class="flex items-center bg-[#3C1564] justify-center w-12 h-12 text-white rounded-r-lg" :class="(search.length > 0) ? 'bg-purple-500' : 'bg-gray-500 cursor-not-allowed'" :disabled="search.length == 0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
 
                @if($search)
 
                <div class="float-right w-full  bg-white shadow-md p-3 rounded"  id="minhaDiv"  >
    
                    
               
 
                    
                    <h3> Resultados por: {{$search}}</h3>
                    
                    @foreach($usera as $useraa)
                <a class="no-underline text-black  text-[16px]" href="{{route('nomehome', ['id' => $useraa->id])}}">
                    <div class=" flex items-center  space-x-2 p-0 m-0 ">
                            <img src="{{\Illuminate\Support\Facades\Storage::disk('public')->url($useraa->imagem)}}" name="logo" class="w-14 h-14 rounded-full border object-cover">   
                        <p class=""> {{$useraa->name}}</p>
                    </div>
                </a>

                <br>
 
                    @endforeach
 
                    </div>
 
                    @else
                    <!-- retorna sem nada  a pesquisa-->
                    <h1></h1>
                    @endif
 
                <!-- // fim da pesquisa -->
 
                    
                </div>
 
        </form>
        </div>
 
 
 
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
     @include('auth.feed.proj')
    @include('auth.feed.publicacao')
@endsection