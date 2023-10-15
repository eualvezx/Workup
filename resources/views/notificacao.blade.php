@include('navbar')
@extends('layouts/app')
<body class="bg-white">

    <h1>Notificações</h1>
    <div class="p-4">
        <div class="bg-white shadow-lg h-auto p-2 w-full">
            @foreach(auth()->user()->readnotifications as $notification)

                <div class="bg-blue-300 p-3 m-2">

                <b> {{ $notification->data['name']}} </b> Começou a seguir você!

                <a href="{{route('markasred', $notification->id)}}" class="bg-red-400 p-2 text-white rounded-lg">Marcar como lida</a>

                </div>

            @endforeach
        </div>
    </div>
</body>