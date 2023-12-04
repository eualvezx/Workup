@extends('layouts.app')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <title>Editar</title>
</head>
        
            @foreach($vagess as $vaga1)
            <br>
            <div class="grid grid-cols-1 gap-1 content-stretch">
                <div>
            <div class=" flex items-center justify-center gap-6">


                <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform transform">
                  <div class="p-1 bg-blue-400"></div>
                <div class="pt-8 px-8">
                <div class="flex flex-row space-x-4 ">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-blue-400" xmlns="http://www.w3.org/2000/svg" ><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Alterar Vaga</h2>
                </div>
                </div>
        
                <p style="word-wrap: break-word; overflow-wrap: break-word;" class="text-gray-600">As Informações da vaga <strong style="text-transform: uppercase;">{{$vaga1->titulo}}</strong> serão alteradas</p>
        
                </div>
        
                <div class="p-4 space-y-2">
        
    
                    <form action="{{route('update.vagas', $vaga1->id_vaga)}}"  method="POST" >
                        @csrf
                    
                        @method('put')
                         <div class="flex flex-col ">
                                    <label for ="" class="text-base">Titulo</label>
                                    <input maxlength="30" type="text" class="w-full bg-gray-200 rounded-lg p-2" name="titulo" value ="{{ $vaga1 -> titulo }}" id="titulo">
                         </div>
                         <br>
        
                        <div class="flex flex-col">
                                    <label for ="" class="text-base">Descrição</label>
                                    <input maxlength="180" type="text" class="w-full bg-gray-200 rounded-lg p-2" name="descricao" value ="{{ $vaga1 -> descricao }}" id="descricao">
                        </div>
                        <br>
        
                        <div class="flex flex-col ">
                                    <label for ="" class="text-base">Salário</label>
                                    <input maxlength="15" type="text" class="w-full bg-gray-200 rounded-lg p-2" name="salario" value ="{{ $vaga1 -> salario }}" id="salario">
                        </div>
        
                        <br>
                        <a>
                        <button type="submit"  class="w-full  bg-blue-400 text-white rounded-full px-4 py-2 hover:bg-blue-800 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Alterar</button>
                         </a>
                         <br>
                        
                        </button>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
 
@endforeach
       
                
                