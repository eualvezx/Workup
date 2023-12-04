@include('navbar')
@extends('layouts/app')
<body class="bg-white">

    
    <div class="py-4 px-[30em]">
        <h1>Notificações</h1>
        
            <div class="bg-white border-2 self-center rounded-md border-[#3C1564] shadow-lg h-auto p-2 w-[70em]">
            
                @forelse($notas as $nota)

                    @if ($nota->user_notifica == Auth::user()->id )

                        <div class="bg-gray-100 h-auto p-2 rounded-md  m-2">

                        <div class=" space-x-2 p-2 "><i class="fa-regular fa-envelope fa-2xl" style="color: #3C1564"></i> <b> {{ $nota->data}}  </b>  Começou a seguir você! <a class="no-underline float-right  bg-gray-100 text-[#000000]  rounded-lg"  href="{{route('markasred', $nota->id)}}"  >  {{$nota->created_at->format(format:'d/m h:i')}}
                            <i class="ml-2 float-right mt-[12px] fa-solid fa-eye fa-xl" style="color: #3C1564;"></i></a> </div>

                        

                        
                    
                        </div>

                    @else
                        <center>
                        <p>Você ainda não tem notificações!</p>
                
                    @endif
                    @empty
                    <center>
                    <p>Você ainda não tem notificações!</p>

                @endforelse
                
            </div>
        
    </div>
</body>