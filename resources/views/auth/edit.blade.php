@extends('layouts/app')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <title>Document</title>
    @include('navbar')
</head>
<body>
    <br>
    <br>
    <br>
    <br>



<div class="container float-left px-[50px] border-2">
    <h2>Editar informações do usúario</h2>

</div>

    <div class="container mx-auto float-right">
        <div class="row justify-content-center">
            

            <!-- Inicio form -->

           

        <form action="{{route('update', Auth::user()->id )}}" method="POST">
            @csrf
            @method('put')
            <label for ="">Nome</label>
            <input type="text" name="name" value ="{{ Auth::user()->name }}" id="name">

            <label for ="">Cidade</label>
            <input type="text" name="cidade" value ="{{ Auth::user()->cidade }}">

            <label for ="">Profissão</label>
            <input type="text" name="profissao" value ="{{ Auth::user()->profissao }}">

            <label for ="">Estado</label>
            <input type="text" name="estado" value ="{{ Auth::user()->estado }}">


            <button type="submit" class="btn btn-primary">Alterar</button>
</form>
    
    <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



