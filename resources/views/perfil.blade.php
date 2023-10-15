<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    
</head>

<link rel="stylesheet"
                            href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
                        <link rel="stylesheet"
                            href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<body class="p-0 m-0">
@extends('layouts\app')
@include('navbar')

  



    
        <div class="h-[220px] bg-[#A0AEEB] bg-left-top bg-auto bg-repeat-x">
        </div>


        <div class="menu  text-center p-4 ">
                
                <button  onclick="abrirPub ('publicacoes')" class="bg-purple-600 hover:bg-purple-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-white">Publicações</button>
                
                <button  onclick="abrirProj ('projetos')" class="bg-purple-600 hover:bg-purple-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-white">Projetos</button>

                
                
         </div>

        <div class=" ">
            

            <!-- DIV DAS ABAS-->
           
           
            
            <div class=" flex">
                

                <!-- Card -->

                <div class="ml-8 p-2 -mt-48 sm:p-10 text-center ">
                    <div
                        class="pt-48 w-[25rem] rounded-lg overflow-hidden shadow-[0_0_5px_5px_rgba(0,0,0,0.1)]  hover:bg-white transition duration-500  bg-white">

                        <div class="w-full px-4 mx-auto">
                            <div class="relative  min-w-0  w-full   rounded-lg ">
                                <div class="px-6">
                                    <div class="flex flex-wrap justify-center">
                                        <div class="w-full px-4 flex justify-center ">
                                            <div class="relative">
                                                <img alt="..."
                                                src="{{\Illuminate\Support\Facades\Storage::disk('public')->url($ouser->imagem)}}"

                                                    class="shadow-xl rounded-full h-auto align-middle border-none absolute -mt-40 -ml-20  max-w-180-px ">
                                            </div>
                                        </div>
                                        <div class="w-full px-4 text-center ">


                                            <div class="text-center mt-12">
                                                <h3 class="text-xl font-semibold leading-normal ext-blueGray-700 mb-2">
                                                {{$ouser->name }}
                                                </h3>
                                                <div
                                                    class="text-sm leading-normal mt-0  text-blueGray-400 font-bold ">
                                                    {{ $ouser->profissao }}
                                                </div>
                                            </div>

                                            <div class="flex justify-center py-4 pt-4 ">

                                                
                                                <div class="mr-4 p-3 text-center">
                                                    <span
                                                        class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                                                        200
                                                    </span>
                                                    <span class="text-sm text-blueGray-400">Seguidores</span>
                                                </div>

                                                <div class="lg:mr-4 p-3 text-center">
                                                    <span
                                                        class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                                                        300
                                                    </span>
                                                    <span class="text-sm text-blueGray-400">Seguindo</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">

                                        <div
                                            class="text-sm leading-normal mt-0 text-blueGray-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                            {{ $ouser->cidade }}  - {{$ouser->estado }}
                                        </div>

                                
                                @auth()
                                @if (Auth::id() !== $ouser->id)
                                @if (Auth::user()->follows($ouser))
                                <form method="POST" action="{{ route('perfil.unfollow', $ouser->id) }}">
                                        @csrf
                                        <button id="bt-seguir" type="submit" class="rounded-[20px] w-[15em] h-[2.5em] mb-[1rem] mt-4 items-center text-center bg-[#4B0082] text-white font-bold hover:bg-[#A0AEEB] hover:text-[#4B0082] hover:border hover:border-[#3C1564]">
                                    <i class="fa-sharp fa-solid fa-plus"></i> UnFollow
                                    </button>
                                @else
                                <form method="POST" action="{{ route('perfil.follow', $ouser->id) }}">
                                        @csrf
                                        <button id="bt-seguir" type="submit" class="rounded-[20px] w-[15em] h-[2.5em] mb-[1rem] mt-4 items-center text-center bg-[#4B0082] text-white font-bold hover:bg-[#A0AEEB] hover:text-[#4B0082] hover:border hover:border-[#3C1564]">
                                    <i class="fa-sharp fa-solid fa-plus"></i>Follow
                                    </button>
                                

                                    </form>
                                    @endif

                                <br>
                                <button id="bt-mensagem"
                                    class="rounded-[20px] w-[15em] h-[2.5em] mb-[1rem] items-center text-center bg-[#A0AEEB] text-[#3C1564] font-bold
                                            hover:bg-[#4B0082] hover:text-white hover:border hover:border-[#3C1564]">
                                    <div>Mensagem</div>
                                </button>
                                @endif
                                    @endauth
                                <br>

                                        <div class="border">
                                            <div class="mb-2 text-blueGray-600 mt-2">
                                                <p class=" text-lg text-blueGray-400 mb-2">Contate-me</p>
                                                <i class="fa-brands fa-twitter mr-2 text-lg text-blueGray-400"></i>
                                                @TorettoOficial
                                            </div>
                                            <div class="mb-2 text-blueGray-600">
                                                <i class="fa-brands fa-instagram mr-2 text-lg text-blueGray-400"></i>
                                                @Torettinho
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 py-10  border-blueGray-200 text-center">
                                        <div class="flex flex-wrap justify-center">
                                            <div class="w-full  px-4">
                                                <p class=" text-lg leading-relaxed text-blueGray-700">
                                                    Exibições de publicações:
                                                </p>
                                                <p class=" text-lg leading-relaxed text-blueGray-700">
                                                    Exibições de projetos:
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                
        

            </div>
            <div id="conteudo" class=" flex-auto mr-8 mb-8"></div>

            <!-- aba de contatos -->

            <div id="aba-contatos" class=" grid grid-rows-2 grid-flow-col w-80 mr-8 rounded-lg">
                
                <!-- lista de recomendados -->

                <div id="lista-recomendados" class=" shadow-[0_0_5px_5px_rgba(0,0,0,0.1)] -mt-8 grid grid-rows-4  rounded-lg text-center h-64 px-2 py-2 ">
               
                    <div class="relative flex items-center">

            <!-- Botão de perfil -->

                        <a href="#"><img src="https://th.bing.com/th/id/OIP.dqIQrDhCID7uLjanXhKwwAHaHa?pid=ImgDet&rs=1" name="logo" class="w-12 h-12 mr-2 rounded-full"></a>

                        <button class=" text-black hover:text-[#3C1564] mr-2 text-[14px]">
                        <p>nome</p>
                        </button>
                    </div> 
                                <hr>
                </div>
                
                <!-- lista de contatos -->

               <div id="lista-contatos" class=" shadow-[0_0_5px_5px_rgba(0,0,0,0.1)] -mt-12 grid grid-rows-4  rounded-lg text-center h-86 px-2 py-2 ">
               
                    <div class="relative flex items-center">

            <!-- Botão de perfil -->

                        <a href="#"><img src="https://th.bing.com/th/id/OIP.dqIQrDhCID7uLjanXhKwwAHaHa?pid=ImgDet&rs=1" name="logo" class="w-12 h-12 mr-2 rounded-full"></a>

                        <button class=" text-black hover:text-[#3C1564] mr-2 text-[14px]">
                       <p>nome</p>
                        </button>
                    </div> 
                                <hr>
                </div>

            </div>


                

          

               



            <script>
 
 function abrirProj(a){
     let localPag = document.getElementById('conteudo')

     fetch(' {{route('unisharp.lfm.', ['id' => $ouser->id])}} ')

         .then(response => response.text())
         .then(html => {
             localPag.innerHTML = html;
         })
     .catch(error => {
         console.log(error);
     });
 }

// Abrir pubs 



         function abrirPub(id){
         let localPag = document.getElementById('conteudo')



 fetch(' {{route('puba',  ['id' => $ouser->id])}} ')

 .then(response => response.text())
             .then(html => {
                 localPag.innerHTML = html;
             })
         .catch(error => {
             console.log(error);
         });
     }


</script>

    <br>


</body>
</html>
<script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


