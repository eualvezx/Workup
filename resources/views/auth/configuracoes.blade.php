@extends('layouts.app')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <title>Document</title>
    @include('navbar')
</head>
<body class="bg-white">





<div class="pt-8 float-left w-[30rem]  h-full border-r-2 text-center space-y-5">
    <h2 class="text-[30px] font-bold mb-2">Configurações</h2>
    <button href="/configuracoes"  class="rounded-[10px] w-[12em] h-[2em] mb-[1rem]  items-center text-center bg-[#3C1564] text-white font-medium text-[20px]"><i class="fa-sharp fa-solid fa-circle-user">    
</i> Editar Perfil</button>

<button href="/privacidade"  class="w-[12em] h-[2em] mb-[1rem] items-center text-center font-medium text-[20px]">
    <i class="fa-sharp fa-solid fa-lock"></i> Privacidade</button>

</div>



    <div class="container mx-auto float-right">
        <div class="row justify-content-center">
            

            <!-- Inicio form -->

           

        <form action="configuracoes" class="space-y-2"  method = "POST">
            @csrf
        <li class="list-none">
            <label for ="">ID</label>
            <input type="text" name="id" class="border-1 px-2 rounded-full border-[#938989]" value ="{{ Auth::user()->id }}" id="id">
        </li>

        <li class="list-none">
            <label for ="">Nome</label>
            <input type="text" name="name" class="border-1 px-2 rounded-full border-[#938989]" value ="{{ Auth::user()->name }}" id="name">
        </li>

        <li class="list-none">
            <label for ="">Cidade</label>
            <input type="text" name="cidade" class="border-1 px-2 rounded-full border-[#938989]" value ="{{ Auth::user()->cidade }}">
        </li>

        <li class="list-none">
            <label for ="">Profissão</label>
            <input type="text" name="profissao" class="border-1 px-2 rounded-full border-[#938989]" value ="{{ Auth::user()->profissao }}">
        </li>

        <li class="list-none">
            <label for ="">Estado</label>
            <input type="text" name="estado" class="border-1 px-2 rounded-full border-[#938989]" value ="{{ Auth::user()->estado }}">
        </li>
     

         

            <p>

            <a href="{{route ('edit', Auth::user()->id )}}">Editar</a>

            </p>
            
</form>

    <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



