
<div class="space-y-6">
    <div class="w-full h-auto rounded-md p-2 shadow-md bg-white">

        <h1 class="text-[20px]">Recomendados</h1>

        <div class="relative flex items-center">
            <!-- Botão de perfil -->
            <a href="#"><img src="https://th.bing.com/th/id/OIP.dqIQrDhCID7uLjanXhKwwAHaHa?pid=ImgDet&rs=1" name="logo" class="w-12 h-12 mr-2 rounded-full"></a>

            <button class=" text-black hover:text-[#3C1564] mr-2 text-[14px]">
                {{ Auth::user()->name }}
            </button>
        </div>

        <hr class="mx-2">

    </div>

    <div class="w-full h-auto rounded-md p-2 shadow-md bg-white">

        <h1 class="text-[20px]">Amigos</h1>

        <div class="relative flex items-center">
            <!-- Botão de perfil -->
            <a href="#"><img src="https://th.bing.com/th/id/OIP.dqIQrDhCID7uLjanXhKwwAHaHa?pid=ImgDet&rs=1" name="logo" class="w-12 h-12 mr-2 rounded-full"></a>

            <button class=" text-black hover:text-[#3C1564] mr-2 text-[14px]">
                {{ Auth::user()->name }}
            </button>
        </div>

        <hr class="mx-2">



    </div>
</div>