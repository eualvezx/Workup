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

    
   <!-- MENSAGEM DE DEU CERTO -->

   @if(session('mensagem'))

        
<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" id="minhaDiv" role="alert">
<button type="button" class="float-right" onclick="Mudarestado('minhaDiv')"><i class="fa-solid fa-xl mt-[10px] fa-xmark" style="color: #000000;"></i></button>
<div class="flex space-x-2">
<div ><i class="fa-solid fa-xl mt-[10px] fa-check"></i></div>
<div>
<p class="font-bold">Suas informações foram alteradas com sucesso!</p>


</div>

</div>
</div>
@endif

<!-- FIM -->

    <div class="flex  flex-row">



        <div class="pt-8  w-[30rem]   border-r text-center space-y-5">
            <h2 class="text-[30px] font-bold mb-2">Configurações</h2>
            <button href="/configuracoes"  class="rounded-[10px] w-[12em] h-[2em] mb-[1rem]  items-center text-center bg-[#3C1564] text-white font-medium text-[20px]"><i class="fa-sharp fa-solid fa-circle-user">    
            </i> Editar Perfil</button>
        
            <a href="/privacidade"><button  class="w-[12em] h-[2em] mb-[1rem] items-center text-center font-medium text-[20px] text-black">
            <i class="fa-sharp fa-solid fa-lock"></i> Privacidade</button>
        </a>
        
        </div>
    


<form action="{{route('update', Auth::user()->id )}}" method="POST" enctype="multipart/form-data" class="ml-24">
            @csrf
            @method('put')

        

        <div class="container w-auto h-auto  rounded-lg  mt-8">
            <h2 class="ml-4 font-semibold">Editar Perfil</h2>    
            <div class="row my-4">
              <div class="col-md  rounded-lg ml-4">

                <div>
                    <input type="file" id="foto_pub" name="foto_pub" value="{{ old('foto_pub') }}"  autocomplete="foto_pub" hidden onchange="previewImagem()" />
                    <img class="flex w-[200px] object-cover border h-[200px] rounded-[20px]" src="{{\Illuminate\Support\Facades\Storage::disk('public')->url(Auth::user()->imagem)}}" id="view"> 
                    <span class="flex">
                    <label for="foto_pub" class="cursor-pointer">
                        <i class="my-4 fa-solid fa-image fa-2xl "></i>
                        <label for ="" class="text-base ">Alterar foto</label>
                    </label>
                </div>

                <div class="col-md-6 space-y-2">

                    

                <div class="flex flex-col ">
                    <label for ="" class="text-base">Nome</label>
                    <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="name" value ="{{ Auth::user()->name }}" id="name">
                </div>

                <div class="flex flex-col">
                    <label for ="" class="text-base">Cidade</label>
                    <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="cidade" value ="{{ Auth::user()->cidade }}" id="cidade">
                </div>

                <div class="flex flex-col ">
                    <label for ="" class="text-base">Profissão</label>
                    <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="profissao" value ="{{ Auth::user()->profissao }}" id="profissao">
                </div>
                
                <div class="flex flex-col">
                    <label for ="" class="text-base">Estado</label>
                    <select type="text" class="w-52 bg-gray-200  rounded-lg p-2" name="estado" value ="{{ Auth::user()->estado }}" id="estado">

                        <option value="AC" @if(Auth::user()->estado == 'AC') selected @endif>AC</option>
                        <option value="AL" @if(Auth::user()->estado == 'AL') selected @endif>AL</option>
                        <option value="AP" @if(Auth::user()->estado == 'AP') selected @endif>AP</option>
                        <option value="AM" @if(Auth::user()->estado == 'AM') selected @endif>AM</option>
                        <option value="BA" @if(Auth::user()->estado == 'BA') selected @endif>BA</option>
                        <option value="CE" @if(Auth::user()->estado == 'CE') selected @endif>CE</option>
                        <option value="DF" @if(Auth::user()->estado == 'DF') selected @endif>DF</option>
                        <option value="ES" @if(Auth::user()->estado == 'ES') selected @endif>ES</option>
                        <option value="GO" @if(Auth::user()->estado == 'GO') selected @endif>GO</option>
                        <option value="MA" @if(Auth::user()->estado == 'MA') selected @endif>MA</option>
                        <option value="MT" @if(Auth::user()->estado == 'MT') selected @endif>MT</option>
                        <option value="MS" @if(Auth::user()->estado == 'MS') selected @endif>MS</option>
                        <option value="MG" @if(Auth::user()->estado == 'MG') selected @endif>MG</option>
                        <option value="PA" @if(Auth::user()->estado == 'PA') selected @endif>PA</option>
                        <option value="PB" @if(Auth::user()->estado == 'PB') selected @endif>PB</option>
                        <option value="PR" @if(Auth::user()->estado == 'PR') selected @endif>PR</option>
                        <option value="PE" @if(Auth::user()->estado == 'PE') selected @endif>PE</option>
                        <option value="PI" @if(Auth::user()->estado == 'PI') selected @endif>PI</option>
                        <option value="RJ" @if(Auth::user()->estado == 'RJ') selected @endif>RJ</option>
                        <option value="RN" @if(Auth::user()->estado == 'RN') selected @endif>RN</option>
                        <option value="RS" @if(Auth::user()->estado == 'RS') selected @endif>RS</option>
                        <option value="RO" @if(Auth::user()->estado == 'RO') selected @endif>RO</option>
                        <option value="RR" @if(Auth::user()->estado == 'RR') selected @endif>RR</option>
                        <option value="SC" @if(Auth::user()->estado == 'SC') selected @endif>SC</option>
                        <option value="SP" @if(Auth::user()->estado == 'SP') selected @endif>SP</option>
                        <option value="SE" @if(Auth::user()->estado == 'SE') selected @endif>SE</option>
                        <option value="TO" @if(Auth::user()->estado == 'TO') selected @endif>TO</option>
                        
                    </select>

                </div>

                <div class="flex flex-col ">
                    <label for ="" class="text-base">Escolaridade</label>
                    <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="escolaridade" value ="{{ Auth::user()->escolaridade }}" id="escolaridade">
                </div>

                

                <div class="flex flex-col ">
                    <label for ="" class="text-base">Formações</label>
                    <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="formacoes2" value ="{{ Auth::user()->formacoes2 }}" id="formacoes2">
                </div>

                <div class="flex flex-col ">
                    <label for ="" class="text-base">Descrição</label>
                    <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="descricao" value ="{{ Auth::user()->descricao }}" id="descricao">
                </div>

                </div>


               
              </div>
              <div class="col-md-6">

              <div>
                    <input type="file" id="foto_banner" name="foto_banner" value="{{ old('foto_banner') }}"  autocomplete="foto_pub" hidden onchange="previewBanner()" />
                    <img class="flex w-[600px] object-cover border h-[200px] rounded-[20px]" src="{{\Illuminate\Support\Facades\Storage::disk('public')->url(Auth::user()->banner)}}" id="viewa"> 
                    <span class="flex">
                    <label for="foto_banner" class="cursor-pointer">
                        <i class="my-4 fa-solid fa-image fa-2xl "></i>
                        <label for ="" class="text-base">Alterar banner</label>
                    </label>
                </div>

                <div class="border p-2 rounded-lg ">

                        <div class="flex flex-col">
                            <label for ="" class="text-base">Instagram</label>
                            <div class="flex items-center space-x-2">
                                <i class="fa-brands fa-2xl fa-instagram"></i>
                                <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="instagram" value ="{{ Auth::user()->instagram }}" id="instagram" >
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <label for ="" class="text-base">Facebook</label>
                            <div class="flex items-center space-x-2">
                                <i class="fa-brands fa-facebook fa-2xl"></i>
                                <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="facebook" value ="{{ Auth::user()->facebook }}" id="facebook" >
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <label for ="" class="text-base">Twitter</label>
                            <div class="flex items-center space-x-2">
                                <i class="fa-brands fa-x-twitter fa-2xl"></i>
                                <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="x" value ="{{ Auth::user()->x }}" id="x">
                            </div>
                        </div>

                </div>
                
                <button type="submit" class="mt-4 w-52 bg-purple-600 hover:bg-purple-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-white" >Alterar</button>

              </div>
            </div>
          </div>
      
    </div>

</form>

  

    <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script>
    function previewImagem() {
        var imagem = document.querySelector('input[name=foto_pub]').files[0];
        var preview = document.querySelector('img[id=view]');

        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (imagem) {
            reader.readAsDataURL(imagem);
        } else {
            preview.src = "";
        }
    }

    function previewBanner() {
        var imagem = document.querySelector('input[name=foto_banner]').files[0];
        var preview = document.querySelector('img[id=viewa]');

        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (imagem) {
            reader.readAsDataURL(imagem);
        } else {
            preview.src = "";
        }
    }
    function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
</script>