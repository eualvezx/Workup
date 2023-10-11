@include('navbar')
@extends('layouts\app')
@section('content')
    <div class="container">

       

        <div class="cols-2 justify-content-center border float-left w-[800px]">


        










            
            <div class="col-md-6">
                
                <div class="col-auto w-[200px] rounded-md h-[8em] bg-white shadow-lg p-3 mb-4">

                <!-- BOTAO-->
                
                    <img src="https://th.bing.com/th/id/OIP.dqIQrDhCID7uLjanXhKwwAHaHa?pid=ImgDet&rs=1" name="logo" class="w-12  h-12 rounded-full float-left">
                
                    <div>
                      <a href="a" data-toggle="modal" data-target="#ModalCreate">
                        
                           <textarea placeholder="O que você está fazendo hoje?" class="float-left p-2 ml-[4px] text-[20px] w-96 bg-transparent touch-none resize-none rounded-md"></textarea>

                     </a>
                    </div>
            
                </div>

                    <div>
                       

                        
                        @foreach($pubs as $pub)
                        <div class="card">
                            <div class="card-header"> <p class="float-left">{{ $pub->relUsers->name}} 
                                <!-- Mostra hora-->

                                <a style="float:right ml-2"> · {{$pub->created_at->format(format:'d/m/Y h:i')}}  </a> </p>
                               
                                
                                <!-- Botão Deletar -->
                                @if(Auth::user()->id == $pub->user_id)
                                <form action="/home/{{ $pub->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                                </form>
                                @endif

                            </div>
                            
                            <div class="card-body">
                                <li>
                                        {{ $pub->descricao }}

                                        <td> 
                                
                                        <img src="/img/{{$pub->imagem}}" alt="{{$pub->id}}" class="w-200"> 
                                        

                                        </td> 
                                </li>
                            </div>
                     </div>
                     <br>
                        @endforeach
                    </div>
             </div>
            
        </div>

        <!-- PESQUISAR -->
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

<div class="" >
    @if($search)
<br>
    <h3> Busacando por: {{$search}}</h3>

    @else
    <h1> Proximos eventos</h1>
    @endif
    <div>
        @foreach($usera as $useraa)
        
        
    <a href="{{route('nomehome', ['id' => $useraa->id])}}"><p>{{$useraa->name}}</p></a>
    @endforeach
   
    </div>
</div>

    </div>
    @include('auth.feed.publicacao');
@endsection
