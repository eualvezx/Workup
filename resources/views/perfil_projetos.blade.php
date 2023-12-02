@extends('layouts\app')
@section('content')
<div class="flex-items-end -mt-20 ml-16 border w-10">
  <a class="btn btn-primary" href="a" data-toggle="modal" data-target="#ModalPasta">
    <span><i class=" fa-sharp fa-solid fa-plus fa-xl"></i> </span>
</a>

<br>
</div>

<?php
  // echo "Funciona?";
  $pasta = "projetos";
  $s = scandir($pasta);

 echo"<div class='grid lg:grid-cols-4  mx-5 my-5 absolute gap-10 '>";
  foreach ($s as $k) {
    if ($k !="." && $k !=".." ) {
        $arquivo = $k;
        echo " 
        <button class='h-[15em] w-[15em] rounded-[15px] shadow-md bg-white text-center hover:bg-white hover:text-[#3C1564] hover:border hover:border-[#3C1564]'>
            <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSj4sjqqrNvbySLpJc7quue3EaFiJumDGvw3A&usqp=CAU' alt='' class='h-[12em] rounded-t-[15px] w-full overflow-hidden object-cover'>

    <a href='/arquivos?subject=$k' class='p-[8px] text-[18px] no-underline text-black font-semibold'>$k</a> 
    </button>";
    }
  }
echo "</div>";
  ?>

@include('criarprojeto.adicionar')


@endsection
<!--<div class="grid lg:grid-cols-3 md:grid-cols-3 mx-5 my-5 absolute gap-10 ">

<div class="h-[15em] w-[15em] rounded-[15px] shadow-lg bg-white text-center">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSj4sjqqrNvbySLpJc7quue3EaFiJumDGvw3A&usqp=CAU" alt="" class="h-[12em] rounded-t-[15px] w-full overflow-hidden object-cover">

    <a class="p-[10px] text-[18px] font-semibold">Projeto novo</a>

</div>-->
