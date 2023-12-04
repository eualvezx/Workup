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

  



    
        <div  class="h-[220px] bg-[url('{{\Illuminate\Support\Facades\Storage::disk('public')->url($ouser->banner)}}')] bg-cover bg-left-top bg-auto ">
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

                                                class="shadow-xl object-cover rounded-full h-[250px]  w-[250px] align-middle border-none -mt-40 ">
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
                                                        {{$ouser->followers->count()}}
                                                    </span>
                                                    <span class="text-sm text-blueGray-400">Seguidores</span>
                                                </div>

                                                <div class="lg:mr-4 p-3 text-center">
                                                    <span
                                                        class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                                                        {{$ouser->followings->count()}}
                                                    </span>
                                                    <span class="text-sm text-blueGray-400">Seguindo</span>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">

                                        <div
                                            class="text-sm leading-normal mt-0 text-blueGray-400 font-bold uppercase mb-4">
                                            <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                            {{ $ouser->cidade }}  - {{$ouser->estado }}
                                        </div>

                                
                                @auth()
                                @if (Auth::id() !== $ouser->id)
                                @if (Auth::user()->follows($ouser))
                                <form method="POST" action="{{ route('perfil.unfollow', $ouser->id) }}">
                                        @csrf
                                        <button id="bt-seguir" type="submit" class="rounded-[20px] w-[15em] h-[2.5em] mb-[1rem] mt-4 items-center text-center bg-purple-700 text-white font-bold hover:bg-purple-900 ">
                                    <i class="fa-sharp fa-solid "></i> Deixar de seguir
                                    </button>
</form>
                                @else
                                <form method="POST" action="{{ route('perfil.follow', $ouser->id) }}">
                                        @csrf
                                       
                                        <button onclick="eliminaParagem();" id="bt-seguir" type="submit" class="rounded-[20px] w-[15em] h-[2.5em]  mt-4 items-center text-center bg-purple-700 text-white font-bold hover:bg-purple-900"> 
                                    <i class="fa-sharp fa-solid"></i>Seguir 
                                    </button>
                                

                                    </form>
                                    @endif
                                    
                                <br>
                                @endif
                                    @endauth
                               
                                    
                                <a  class="text-white no-underline" href="/chatify/{{$ouser->id}}"><button class="rounded-[20px] p-1 w-[15em] h-[2.5em] mb-[1rem] no-underline items-center text-center bg-indigo-600 font-bold
                                    hover:bg-indigo-900 text-white">
                                    <P>Mensagem</P>
                                </button></a>
                                
                                
                                <br>

                                <div class="border rounded-lg mb-4 ">
                                            <div class="mb-2 text-blueGray-600 mt-2">
                                                <p class=" text-lg text-blueGray-400 mb-2">Contate-me</p>
                                                <i class="fa-brands fa-x-twitter mr-2 text-lg text-blueGray-400"></i>
                                                {{ $ouser->instagram}} </i>
                                            </div>
                                            <div class="mb-2 text-blueGray-600">
                                                <i class="fa-brands fa-instagram mr-2 text-lg text-blueGray-400"></i>
                                                {{ $ouser->twitter}} 
                                            </div>
                                            <div class="mb-2 text-blueGray-600 mt-2">
                                            <i class="fa-brands fa-facebook"></i>
                                                {{$ouser->facebook}} 
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                </div>

                
        

            </div>
            <div id="conteudo" class=" flex-auto mr-8 mb-8">

          <!--ORIGINAL-->



@forelse($pubs as $pub)
   @if($pub->user_id ==  $ouser->id)
     
      <div class="flex bg-white shadow-lg rounded-lg  md:mx-auto  max-w-md md:max-w-2xl "><!--horizantil margin is just for display-->
         <div class="flex items-start px-4 py-6">
         <img src="
          {{\Illuminate\Support\Facades\Storage::disk('public')->url( $ouser->imagem)}}" name="logo" class="w-14 h-14 mr-2 object-cover rounded-full">
            <div class="">
               <div class="flex items-center justify-between">
                  <h2 class="text-lg font-semibold text-gray-900 -mt-1">{{ $pub->relUsers->name}}</h2>
                  <small class="text-sm text-gray-700">{{$pub->created_at->format(format:'d/m/Y h:i')}}</small>
               </div>
               
               <p class="mt-3 text-gray-700 text-sm">
               {{ $pub->descricao }}
               </p>
               @if($pub->imagem == null)
               @else
               <img src="/img/{{$pub->imagem}}" alt="{{$pub->id}}" class="w-140">
               @endif
              
            </div>
         </div>
      </div>

      <br>

   
   @endif

   @empty
   <div class="bg-indigo-200 m-[3em] border-l-4 rounded-r border-indigo-600 text-orange-700 p-4" role="alert">
        <p class="font-bold text-gray-600">Ainda não há publicações</p>
    </div>
@endforelse

            </div>

           


                

          

               



            <script>

 function abrirProj(a){
     let localPag = document.getElementById('conteudo')

     fetch('  {{route('arquivolistadojulio',  ['id' => $ouser->id])}} ')

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

     function eliminaParagem (){

window.location.href= fetch('{{ route('notificou', ['id_seg' => Auth::user()->name,'id_fol'=>$ouser->id])}}');

}

</script>

    <br>


</body>
</html>
<script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


