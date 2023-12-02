@extends('layouts.app')

@section('content')



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar portfólio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

<div class="flex flex-row text-5xl ml-24 mb-8 font-sans font-semibold text-purple-600">
        Work Up
    </div> 

    <div class="event-create-container">
        <div class="flex flex-row justify-content-center">

            <!-- Inicio form -->

    <div class="w-full max-w-sm p-4 bg-white border-gray-700 rounded-lg shadow sm:p-6 md:p-8  ">
        <form action="uparprojeto" method="POST" class="space-y-6">
        @csrf
        <h1 class="text-xl font- text-black text-center">Sua formação</h1>
        <div class="container mx-auto ">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="escolaridade">Escolaridade:</label>
                <select id="escolaridade" name="escolaridade" id="escolaridade" class="block w-full px-4 py-2 border border-gray-300 rounded">
                    <option value="fundamental">Ensino Fundamental</option>
                    <option value="medio">Ensino Médio</option>
                    <option value="tecnico">Ensino Técnico</option>
                    <option value="superior">Ensino Superior</option>
                </select>

                <br>

                <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="descricao">Formações:</label>
                <div class="relative">
                    <input id="descricao" name="descricao" type="text"
                        class="w-full px-4 py-2 border border-gray-300 rounded">
                </div>
            </div>


            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="formacoes2">Descricão:</label>
                <div class="relative">
                    <input id="formacoes2" name="formacoes2" type="text"
                        class="w-full px-4 py-2 border border-gray-300 rounded">
                </div>
            </div>

            <div class="flex flex-col">
                <button type="submit" class="text-white bg-purple-900 font-medium rounded-full text-sm px-10 py-1.5 text-center">
                Finalizar
                </button>
            </div>
        </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </body>

</html>
    <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection