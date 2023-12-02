@extends('layouts.app')
aa

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
        <div class="grid grid-cols-3 gap-2 content-stretch">
            <div>
                <!-- border-r-2   para criar a divisão ao lado-->
        <div class="float-left w-[24rem] border h-full text-center space-y-5">



        @if(Auth::user()->typecont > 1)
        <a href="a" class="no-underline text-white" data-toggle="modal" data-target="#ModalCreateVaga">
        <button id="vagabutton" class="rounded-full mt-8 w-[12em] h-[2em] mb-[1rem]  items-center text-center bg-[#3C1564] text-white font-medium text-[20px]"> <i class="fa-sharp fa-solid fa-plus" style="color: #ffffff;"></i> Criar vaga</button></a>
        @else
        <h1>Vagas disponíveis</h1>
        @endif


        @foreach($vagess as $vaga)


        <div>


        <a class="cursor-pointer no-underline text-black  " id="mostrarCards-{{$vaga->id_vaga}}" onClick="mostraCard({{$vaga->id_vaga}})">
        <div class=" bg-gray-200 border h-[115px] rounded  p-2 mx-2 ">

        <div class="flex flex-row">
        <img class="bg-[#3C1564] w-[100px] h-full rounded-lg object-cover " src="{{\Illuminate\Support\Facades\Storage::disk('public')->url( $vaga->relVagas->imagem)}}" alt="#">

        <div class="w-full">

        <div class=" font-bold text-lg mb-2">{{ $vaga -> titulo }}</div>
        <div class="mb-2">
        <div>
        
            <span class="text-gray-800">{{ $vaga->relVagas->name }}</span>
        </div>
        </div>
        <div class="mb-2">
        <div class="">
        <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
            <span class="text-gray-800"> {{  $vaga->relVagas->cidade }}  - {{  $vaga->relVagas->estado }}</span>
        </div>
        </div>

        </div>
        <div class="flex items-center float-right">
        <i class="fa-solid fa-arrow-right fa-xl"></i>
        </div>
        </div>

        </div>
        </a>
        </div>
        @endforeach




        </div>
    </div>

        <!-- Lado Direito -->

        <div class="">  
            <div class="">

        @forelse($vagess as $vaga1)

        <div id="vaga-{{$vaga1->id_vaga}}" class="pt-8 w-2/3 w-full max-w-[1100px] " style="display:none;">

         <div class="container  flex flex-row space-x-4 ">

             <div class=" ml-[10px] w-[600px] bg-purple rounded-lg shadow-lg  transform rounded">
             <div class="p-1 bg-purple-400">
        </div>

        <div class=" bg-white p-4">
        <!--<img src="https://blog.fecap.br/wp-content/uploads/Fecap-programador.jpg" alt="Imagem do Card" class="w-full h-32 object-cover rounded-t-lg">-->
        <div class="w-full ">



        <h1 class=" text-black font-bold"> {{ $vaga1 -> titulo }}</h1>
        <p class="space-x-1">{{  $vaga1->relVagas->name }} ,
        {{ $vaga1->relVagas->cidade }} - {{  $vaga1->relVagas->estado }} </p>

        <h1 class="font-medium text-[30px]">Sobre a Vaga:</h1>
        </label>
        <div style="word-wrap: break-word; overflow-wrap: break-word;">
            {{ $vaga1 -> descricao }}
        </div>
        </label>

        <p>
            <i class="fa-solid fa-dollar-sign"></i>
            {{ $vaga1 -> salario }}
        </p>

        <p>
        <i class="fa-solid fa-business-time"></i>
        {{ $vaga1 -> carga_hr }}
        </p>


            <div class="space-x-4  float-right">

                    <button id="vagabutton" class="rounded-full  w-[12em] h-[2em] mb-[1rem]  items-center text-center bg-[#3C1564] text-white font-medium text-[15px]"> <i class="fa-sharp fa-solid fa-clipboard-list" style="color: #ffffff;"></i>
                    <a href="a" class=" no-underline text-white" data-toggle="modal" data-target="#ModalCreateVaga">Candidatar-se</a></button>

                    </div>


        <div class=" flex flex-row items-center w-[250px] space-x-4 ">

        <a href="/perfil2">

            <img src="{{\Illuminate\Support\Facades\Storage::disk('public')->url( $vaga1->relVagas->imagem)}}" name="logo" class="w-14 h-14 mr-2 object-cover rounded-full flex" name="logo" class="w-12 h-12 mr-2 rounded-full"> 

        <div>

            <span class="text-gray-800 flex text-center">{{  $vaga1->relVagas->name }}</span>

        </a> 
                                
        </div>




        </div>  




        </div>
        </div>
        </div>

        <!--Lado de editar vaga -->

        @if(Auth::user()-> id == $vaga1->user)
                        @if(Auth::user()->typecont > 1) 

        <div class="w-[300px] flex items-center justify-center gap-6">


        <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform transform">
        <div class="p-1 bg-blue-400">
        </div>
        <div class="pt-8 px-8">
        <div class="flex flex-row space-x-4 ">
        <div class="py-1"><svg class="fill-current h-6 w-6 text-blue-400" xmlns="http://www.w3.org/2000/svg" ><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
        <div>

        <h2 class="text-3xl font-bold text-gray-800 mb-4">Alterar Vaga</h2>
        </div>
        </div>

        <p style="word-wrap: break-word; overflow-wrap: break-word;" class="text-gray-600">Escolha fazer alterações na vaga ou exclui-lá</p>

        </div>

        <div class="p-4 space-y-2">

    
       

        <a href="$vaga->id_vaga" class="no-underline text-white" data-toggle="modal" data-target="#ModalCreate2">
        <button
            id="bt-editar" class="w-full  bg-blue-400 text-white rounded-full px-4 py-2 hover:bg-blue-800 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
            <i class="fa-solid fa-pen"></i> Editar
        </button>
        </a> 
        



                <form action="{{ route('vages.destroy', $vaga->id_vaga) }}"  method="POST">
                    @csrf
                    @method('delete')
                        <button
                        id="bt-excluir" class="w-full bg-white-500 hover:text-white border-1 border-[#3C1564] hover:border-none rounded-full px-4 py-2 hover:bg-red-600">
                    <div><i class="fa-solid fa-trash"></i> Excluir</div>
                 
                </button>
                </form>
                @endif
                 @endif 
            </div>
        </div>
        </div>

        </div>
        </div>


        @empty
            <div class="bg-indigo-200 float-left w-[600px] m-[3em] border-l-4 rounded-r border-indigo-600 text-orange-700 p-4" role="alert">
                <p class="font-bold text-gray-600">Ainda não há vagas</p>
            </div>

        @endforelse
        
  </div>
    </div>
</div>



<!-- -----------------------------------A SEPARAÇÃO-------------------------------------------------------------------------------->


  
    @include('criarvagas')

    <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        const vagaButton = document.querySelector('#vagabutton');
        const telaVaga = document.querySelector('#vagadiv');

        vagaButton.addEventListener('click', function() {
            // Toggle (alternar) a classe "hidden" no dropdown para exibi-lo ou ocultá-lo
            telaVaga.classList.toggle('hidden');
        });

        window.addEventListener('click', function(event) {
            if (!vagaButton.contains(event.target) && !telaVaga.contains(event.target)) {
                telaVaga.classList.add('hidden');
            }
        });


        //script pro card aparecer

        function mostraCard(id) {
            const cardsContainer = document.getElementById('vaga-' + id);
            if (cardsContainer.style.display === 'none' || cardsContainer.style.display === '') {
                cardsContainer.style.display = 'grid';
                mostrarCardsBtn.textContent = 'Fechar';
            } else {
                cardsContainer.style.display = 'none';
                mostrarCardsBtn.textContent = 'Informações';
            }
        }


        const mostrarCardsBtn = document.getElementById('mostrarCards');
        const cardsContainer = document.getElementById('cardsContainer');

        mostrarCardsBtn.addEventListener('click', () => {
            if (cardsContainer.style.display === 'none' || cardsContainer.style.display === '') {
                cardsContainer.style.display = 'grid';
                mostrarCardsBtn.textContent = 'Fechar';
            } else {
                cardsContainer.style.display = 'none';
                mostrarCardsBtn.textContent = 'Informações';
            }
        });
    </script>
          @include('edit')
