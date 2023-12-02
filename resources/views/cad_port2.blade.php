@extends('layouts.app') 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar portfólio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>


    <div class="container mx-auto py-8">
        <form class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
            <h1 class="text-xl font- text-black text-left">Formações</h1>
            <br>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="prof_atual">Atualmente:</label>
                <select id="prof_atual" name="prof_atual" class="block w-full px-4 py-2 border border-gray-300 rounded">
                    <option value="opcao1">Sei la</option>
                    <option value="opcao2">Sei la2</option>
                    <option value="opcao3">Sei la3</option>
                    <option value="opcao4">Sei la4</option>
                </select>
            </div>



            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cargo_recente">Cargo mais
                    recente:</label>
                <div class="relative">
                    <input id="cargo_recente" name="cargo_recente" type="text"
                        class="w-full px-4 py-2 border border-gray-300 rounded">

                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo_emprego">Tipo de emprego:</label>
                <select id="tipo_emprego" name="tipo_emprego"
                    class="block w-full px-4 py-2 border border-gray-300 rounded">
                    <option value="opcao1">Sei la</option>
                    <option value="opcao2">Sei la2</option>
                    <option value="opcao3">Sei la3</option>
                    <option value="opcao4">Sei la4</option>
                </select>
            </div>


            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="empresa_recente">Empresa mais
                    recente:</label>
                <div class="relative">
                    <input id="empresa_recente" name="empresa_recente" type="text"
                        class="w-full px-4 py-2 border border-gray-300 rounded">

                </div>
            </div>
            <div class="flex justify-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
            </div>
        </form>
    </div>






