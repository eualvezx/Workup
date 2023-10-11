@extends('layouts.app')
<div class="bg-white w-full h-[65px] text-[22px] font-sans border-2">
    <ul class="container mx-auto flex justify-between p-2 items-center">
        <li class="border-3 rounded-full px-4 h-[45px] text-center text-white bg-[#3C1564] border-[#3C1564] ">
            vagas
        </li>
        <select class="border-3 rounded-full px-4 h-[45px] text-center border-[#3C1564]"  >

            <div class="rounded-md">
                <option value="" class="dropdown-item hover:bg-[#3C1564] " >Tipo de vaga</option> 
                <option value="1" class="dropdown-item" >Pessoal</option>
                <option value="2" class="dropdown-item">Empresa</option>
            </div>
        </select>
        <li class="border-3 rounded-full px-4 h-[45px] text-center border-[#3C1564]  hover:bg-[#3C1564] hover:text-white">
            recentes

        </li>
        <li class="border-3 rounded-full px-4 h-[45px] text-center border-[#3C1564] hover:bg-[#3C1564] hover:text-white">
            Nivel de Experiência

        </li>
        <li class="border-3 rounded-full px-4 h-[45px] text-center border-[#3C1564] hover:bg-[#3C1564] hover:text-white">
            Localização

        </li>
    </ul>
</div>

<script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>