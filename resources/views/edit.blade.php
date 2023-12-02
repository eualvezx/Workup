@extends('layouts.app')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
        
            @foreach($vagess as $vaga1)
            <form action="{{route('update.vagas', $vaga1->id_vaga)}}"  method="POST" >
                @csrf
                <div class="modal fade text-left" id="ModalCreate2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content px-4">
                            <div class="modal-header">
                            <h2 class="text-center text-2xl text-gray-600 font-bold font-sans">Criar publicação</h2>
                            
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                                <i class="fa-solid fa-xmark fa-2x"></i>
                            </button>
                            </div>
            
                    <div class="modal-body  ">
                @method('put')
                 <div class="flex flex-col ">
                            <label for ="" class="text-base">Titulo</label>
                            <input maxlength="30" type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="titulo" value ="{{ $vaga1 -> titulo }}" id="titulo">
                 </div>

                <div class="flex flex-col">
                            <label for ="" class="text-base">Descrição</label>
                            <input maxlength="180" type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="descricao" value ="{{ $vaga1 -> descricao }}" id="descricao">
                </div>

                <div class="flex flex-col ">
                            <label for ="" class="text-base">Salário</label>
                            <input maxlength="15" type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="salario" value ="{{ $vaga1 -> salario }}" id="salario">
                </div>

                <br>
                <button type="submit" class="bg-[#3C1564] text-white rounded-md h-8 w-[5em]">Alterar</button>

                </button>
                </div>
            </div>
        </div>
    </div>

                </form>
       
       @endforeach
                
                