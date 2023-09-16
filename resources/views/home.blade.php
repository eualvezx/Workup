@include('navbar')
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <!-- BOTAO-->
                <a class="btn btn-primary" href="a" data-toggle="modal" data-target="#ModalCreate">
                    <span>Publicar </span>
                </a>

            </div>
            <div class="col-md-6">
                

                    <div >
                       

                        
                        @foreach($pubs as $pub)
                        <div class="card">
                            <div class="card-header"> <p>{{ $pub->relUsers->name}} </p>
                                <!-- Mostra hora-->

                                <p style="float:right">Data: {{$pub->created_at->format(format:'d/m/Y h:i')}}</p>
                               
                                
                                <!-- Botão Deletar -->

                                <form action="/home/{{ $pub->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                                </form>


                                <!-- Botão Alterar Descrição -->

                                


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
