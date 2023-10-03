@include('navbar')
@extends('layouts\app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
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

                                <form action="/home/{{ $pub->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                                </form>


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
    </div>
    @include('auth.feed.publicacao');
@endsection
