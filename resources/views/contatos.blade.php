
<div id="aba-contatos" class=" space-y-10 grid-flow-col w-80 mr-8 rounded-lg">
                
                <!-- lista de recomendados -->

                <div id="lista-recomendados" class="bg-white shadow-[0_0_5px_5px_rgba(0,0,0,0.1)] -mt-8 grid grid-rows-4  rounded-lg text-center h-64 px-2 py-2 ">
               
                    <div class="relative flex items-center">

            <!-- Botão de perfil -->

                        <a href="#"><img src="https://th.bing.com/th/id/OIP.dqIQrDhCID7uLjanXhKwwAHaHa?pid=ImgDet&rs=1" name="logo" class="w-12 h-12 mr-2 rounded-full"></a>

                        <button class=" text-black hover:text-[#3C1564] mr-2 text-[14px]">
                        {{ Auth::user()->name }} 
                        </button>
                    </div> 
                                <hr>
                </div>
                
                <!-- lista de contatos -->

               <div id="lista-contatos" class="bg-white shadow-[0_0_5px_5px_rgba(0,0,0,0.1)] -mt-12 grid grid-rows-4  rounded-lg text-center h-86 px-2 py-2 ">
               
                    <div class="relative flex items-center">

            <!-- Botão de perfil -->

                        <a href="#"><img src="https://th.bing.com/th/id/OIP.dqIQrDhCID7uLjanXhKwwAHaHa?pid=ImgDet&rs=1" name="logo" class="w-12 h-12 mr-2 rounded-full"></a>

                        <button class=" text-black hover:text-[#3C1564] mr-2 text-[14px]">
                        {{ Auth::user()->name }} 
                        </button>
                    </div> 
                                <hr>
                </div>

</div>