@include('navbar')

 



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

    </header>

    <section>
        <!-- Banner configs -->
        <div class="w-auto flex justify-center">
            <!-- Banner Estilo -->
            <div class="items-center w-[120%] h-[15rem] bg-[#A0AEEB]">



                <div class="flex flex-row">

                    <div class="basis-1/4">
                        <!-- Card -->
                        <div
                            class="shadow-[0_0_10px_10px_rgba(0,0,0,0.1)] w-[350px]  h-auto mt-[10rem] ml-[20px] justify-center bg-white rounded-[20px] text-center mb-[2em]">

                            <!-- Botão Menu Perfil -->
                            <button class="relative top-[2rem] left-[8rem] hover:text-[#938989]">
                                <i class="fa-solid fa-bars fa-2xl"></i>
                            </button>

                            <!-- Perfil Imagem -->
                            <div
                                class="flex w-[200px] h-[200px] items-center justify-center bg-[#DFE5F2] rounded-[50%] relative top-[2em] m-auto overflow-hidden">
                                <img class="w-[100%] relative max-w-[750px]" src="https://th.bing.com/th/id/R.9257e16e3787312c4db444dcdddebf7f?rik=jl0ByPK3szJBow&riu=http%3a%2f%2fgetdrawings.com%2fcliparts%2fcute-hamster-clipart-21.png&ehk=5XZDUIlU3sGHqaNPUm3Os9ZyCBHK5BaFVyYIVAhbYz0%3d&risl=&pid=ImgRaw&r=0"
                                    alt="img-avatar">
                            </div>

                            <!-- Perfil Body -->
                            <div class="w-[95%] m-auto items-center mt-[1em] font-sans">

                                <!-- Nome e profissão -->
                                <h3 class="text-[1.2em] mt-[2em]">{{ Auth::user()->name }}</h3>
                                 <!-- Necessita de alteração -->
                                <p class="mt-[5px] text-[0.9em] mb-[2em] text-[#938989]">{{ Auth::user()->profissao }}</p>




                                <!-- Seguindo e Seguidores -->
                                <div class="m-0 pd-0 ml-[2.5em]">
                                    <div class="text-[15px] float-left font-bold">
                                        209 Seguidores
                                    </div> <!-- usar php para pegar os numeros -->
                                    <div class="text-[15px] font-bold">
                                        358 Seguindo
                                    </div> <!-- usar php para pegar os numeros -->
                                </div>
                                <br>

                                <div class="text-[#938989]"><i class="fa-sharp fa-solid fa-location-dot"></i> {{ Auth::user()->cidade }} - {{ Auth::user()->estado }}
                                </div>
                                <br>

       





                                <!-- Tabela de Contatos -->
                                <div
                                    class="ml-[2.9em] flex border-2 rounded-[5px] overflow-hidden border-[#3C1564] w-[15rem] mb-[2em]">
                                    <table>
                                        <tr>
                                            <th>
                                                <div class="float-left ml-[25px] mt-[5px] mb-[5px]">Contate-me</div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="ml-[25px] mb-2"><i class="fa-brands fa-twitter fa-xl"></i>
                                                    @Vitor_Gabzl</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="ml-[25px] mb-2"><i class="fa-brands fa-instagram fa-xl"></i>
                                                    @Vitor_Gabzl</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="mr-[7em]">
                                    <div>
                                        Exibições de publicações:
                                    </div>
                                    <br>
                                    <div class="mr-[1.5em]">
                                        Exibições de projetos:
                                    </div>
                                </div>




                            </div>



                        </div>

                    </div>




                </div>

            </div>

        </div>





    </section>



