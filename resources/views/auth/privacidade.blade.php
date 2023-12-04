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

    <div class="flex  flex-row">



        <div class="pt-8  w-[30rem]   border-r text-center space-y-5">
            <h2 class="text-[30px] font-bold mb-2">Configurações</h2>
            <a href="/configuracoes" class="no-underline text-black">
                <button class="rounded-[10px] w-[12em] h-[2em] mb-[1rem]  items-center text-center   font-medium text-[20px]"><i class="fa-sharp fa-solid fa-circle-user">    
                </i> Editar Perfil</button>
            </a>
            <a href="/privacidade"><button  class="w-[12em] h-[2em] mb-[1rem] items-center bg-[#3C1564] text-white rounded-[10px] text-center font-medium text-[20px] text-black">
            <i class="fa-sharp fa-solid fa-lock"></i> Privacidade</button>
        </a>
        
        </div>
    




            
            <form action="{{route('configuracoes.destroy', Auth::user()->id )}}"  method="POST" class="ml-24 mt-4">
                    
                    @csrf
                    @method('delete')

                    <div class="space-y-14">

                            <h2 class="font-semibold">Configurações de Privacidade</h2>

                            <h2>Excluir Conta</h2>
                    </div> 

                    
                        <div class="mt-4 space-x-16">
                            <p class="float-left w-[25em] text-[1.3em] break-words">
                                Caso você realmente queira deletar a sua conta Work Up,
                                não será possivel recupera-lá após a exclusão!
                            </p>


                        </div>   
                    
                        

                        <center>
                            <button
                            id="bt-excluir" class="rounded-[20px] mt-4 border-[#3C1564] border-1 w-[8em] h-[2.5em] mb-[1rem]  items-center text-center  text-[#000000] font-bold hover:bg-red-500 hover:text-[#FFFFFF] hover:border-none">
                            <div></i> Excluir</div></button>
                        </center>
                    
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
</script>