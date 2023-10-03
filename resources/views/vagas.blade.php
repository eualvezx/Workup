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

<div class=" float-left w-[30rem] bg-white h-full border-r-2 text-center space-y-5 list-none">


    
    @foreach($vagess as $vaga)

<li>
    <div class="rounded-md  w-full h-[5em] mb-[1rem] border-y-2  items-center text-center bg-white text-black font-medium text-[20px] p-2">
        
    <!--<img alt="..."
    class="shadow-xl rounded-md h-[3em] absolute bg-[#989898] align-middle border-none absolute  "> -->
    
    <!--Parte Esquerda da Tela-->

    
    <p class="float-left">
        {{ $vaga -> titulo }}
    </p>
        <br>
        {{ $vaga -> salario}}
        {{ $vaga -> carga_hr }}
        <br>
        {{ $vaga -> lmt_candidatos }}

        <button id="mostrarCards-{{$vaga->id_vaga}}" onClick="mostraCard({{$vaga->id_vaga}})" class="text-white bg-purple-900 font-medium rounded-full">Informações</button>

    </div>
</li>

@endforeach
@if(Auth::user()->typecont > 1)
    <button id="vagabutton" class="rounded-full  w-[12em] h-[2em] mb-[1rem]  items-center text-center bg-[#3C1564] text-white font-medium text-[20px]"> <a href="a" class="no-underline text-white" data-toggle="modal" data-target="#ModalCreateVaga"> <i class="fa-sharp fa-solid fa-plus" style="color: #ffffff;"></i> Criar vaga</a></button>
@endif
</div>

@if(Auth::user()->typecont > 1)
<h1>Minhas vagas</h1>
@endif
<!--Lado Direito-->

 @foreach($vagess as $vaga1)
 
        <div id="vaga-{{$vaga1->id_vaga}}" class="grid grid-cols-2 gap-4 mt-4" style="display:none;">

 <div class="container mx-auto mt-10">
        <div class="grid grid-cols-2 gap-4">

    <div class="max-w-md mx-auto mt-10 bg-white rounded-lg shadow-lg">
        <img src="https://blog.fecap.br/wp-content/uploads/Fecap-programador.jpg" alt="Imagem do Card" class="w-full h-32 object-cover rounded-t-lg">
        <div class="px-4 py-4 list-none">
        <li>
        <div class="">

            <h1 class=" w-full h-[2em]   items-center text-black font-bold"> {{ $vaga1 -> titulo }}</h1> 
            <h3> Area: {{$vaga1 -> tipo }}</h3>
            <p class="space-x-1"> <i class="fa-sharp fa-solid fa-coins" style="color: #989898;"></i>{{ $vaga1 -> salario}} 
            <i class="fa-sharp fa-solid fa-clock" style="color: #989898;"></i>{{ $vaga1 -> carga_hr }} hrs <br><br>
            <button id="vagabutton" class="rounded-full  w-[12em] h-[2em] mb-[1rem]  items-center text-center bg-[#3C1564] text-white font-medium text-[15px]">
            <a href="a" class=" no-underline text-white" data-toggle="modal" data-target="#ModalCreateVaga">Candidatar-se <i class="fa-sharp fa-solid fa-clipboard-list" style="color: #ffffff;"></i></a></button>
        </div>
            <div class="">
                <h1 class="font-medium text-[30px]">Sobre a Vaga:</h1>
                <p> {{ $vaga1 -> descricao }} </p>



            </div>

    </li>
            </div>
        </div>
    </div> 
    </div> 
    </div> 
    </div> 

@endforeach 
@include('criarvagas')
</div>      

        
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

function mostraCard(id){
    const cardsContainer = document.getElementById('vaga-'+id);
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

