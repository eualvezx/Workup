@extends('layouts.app')

@section('content')

    <div class="event-create-container">
        <div class="row justify-content-center">

            <!-- Inicio form -->

            <div class="w-full max-w-sm p-4 bg-white border-gray-700 rounded-lg shadow sm:p-6 md:p-8  ">
                <form action="/events" method="POST" class="space-y-6">
                    @csrf
                    <h1 class="text-xl font- text-black text-center">Criar Portfólio</h1>
                   
                   
                    <img src="{{ asset('img/raposa3.png') }}" />
                           
                    <!-- BOTAO ENTRAR -->


                    <div class="flex">
                    <div>
                    <button type="submit"
                        class=" text-white bg-purple-900 font-medium rounded-full text-sm px-10 py-1.5 text-center"><a href="/uparprojeto">
                        Prosseguir
                    </button></a>
                    </div>


                    <div>
                    <button type="submit"
                        class="text-purple font-medium rounded-full text-sm px-10 py-1.5 text-center"><a href="/home">
                        Pular
                    </button></a>
                    </div>

                    </div>




                    </div>
                </form>
            </div>


        </div>
    </div>
    <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection