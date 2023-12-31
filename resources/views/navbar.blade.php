<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
</head>
<body>
  
</body>
</html>



<nav class="bg-white p-0 shadow-[0_0_5px_5px_rgba(0,0,0,0.2)] h-[5em] items-center">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logotipo ou nome do site -->
      <div>
      <a href="home"><img src="https://th.bing.com/th/id/R.9257e16e3787312c4db444dcdddebf7f?rik=jl0ByPK3szJBow&riu=http%3a%2f%2fgetdrawings.com%2fcliparts%2fcute-hamster-clipart-21.png&ehk=5XZDUIlU3sGHqaNPUm3Os9ZyCBHK5BaFVyYIVAhbYz0%3d&risl=&pid=ImgRaw&r=0" name="logo" class=" p-0 m-0 w-[80px] h-[80px]"></a>
      </div>

      <!-- Menu principal da navbar -->
      <ul class="flex space-x-14">
        <li>
          <a href="home" class="text-black no-underline hover:text-[#3C1564] hover:decoration-4 hover:underline"><i class="fa-sharp fa-solid fa-house fa-xl "></i></a>
        </li>

        <li>
          <a href="Freelancer" class="text-black hover:text-[#3C1564] "><i class="fa-sharp fa-solid fa-laptop fa-xl"></i></a>
        </li>

        <li>
          <a href="vages" class="text-black hover:text-[#3C1564]  "><i class="fa-sharp fa-solid fa-briefcase fa-xl"></i></a>
        </li>

        <li>
          <a href="/chatify" class="text-black hover:text-[#3C1564] "><i class="fa-sharp fa-solid fa-comment fa-xl"></i></a>
        </li>

        <li>
          <a href="Notificação" class="text-black hover:text-[#3C1564]"><i class="fa-sharp fa-solid fa-bell fa-xl"></i></a>
        </li>

      </ul>

      <!-- Perfil com dropdown -->
      <div class="relative flex items-center">
        <!-- Botão de perfil -->

        <a href="#"><img src="https://th.bing.com/th/id/OIP.dqIQrDhCID7uLjanXhKwwAHaHa?pid=ImgDet&rs=1" name="logo" class="w-12 h-12 mr-2 rounded-full"></a>

        <button class=" text-black hover:text-[#3C1564] mr-2 text-[14px]">
        {{ Auth::user()->name }} <i class="ml-2 fa-sharp fa-solid fa-chevron-down fa-sm hover:text-[#3C1564]"></i>
        </button>

        <!-- Dropdown menu -->
        <ul class="absolute bg-white text-black shadow-[0_0_5px_5px_rgba(0,0,0,0.2)] mt-[14em] left-0 hidden w-52 rounded-xl text-center">
          <li>
            <a href="/perfil2" class="no-underline block px-4 py-2 text-[#3C1564] hover:bg-[#DFE5F2] hover:rounded-t-xl font-bold ">Ver perfil</a>
          </li>
          <li>
            <a class="no-underline block px-4 py-2 hover:bg-[#DFE5F2] ">Dark Mode</a>
          </li>
          <li>
            <a href="/configuracoes" class="no-underline block px-4 py-2 hover:bg-[#DFE5F2] ">Configurações</a>
          </li>
          <li>
            <a href="{{ route('logout') }}" class="no-underline block px-4 py-2 hover:bg-[#DFE5F2] hover:rounded-b-xl" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 



    <!-- JAVASCRIPT -->
    <script>

      // Selecionar o botão de perfil e o dropdown
const perfilButton = document.querySelector('.relative button');
const dropdownMenu = document.querySelector('.relative ul');

// Adicionar um evento de clique ao botão de perfil
perfilButton.addEventListener('click', function() {
  // Toggle (alternar) a classe "hidden" no dropdown para exibi-lo ou ocultá-lo
  dropdownMenu.classList.toggle('hidden');
});

// Fechar o dropdown quando o usuário clicar fora dele
window.addEventListener('click', function(event) {
  if (!perfilButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
    dropdownMenu.classList.add('hidden');
  }
});
    </script>
