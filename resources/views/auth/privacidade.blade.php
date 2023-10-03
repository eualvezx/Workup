

          
<h1> aaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h1>
           

        <form action="configuracoes" class="space-y-2"  method = "POST">
            @csrf
        <li class="list-none">
            <label for ="">ID</label>
            <input type="text" name="id" class="border-1 px-2 rounded-full border-[#938989]" value ="{{ Auth::user()->id }}" id="id">
        </li>

        <li class="list-none">
            <label for ="">Nome</label>
            <input type="text" name="name" class="border-1 px-2 rounded-full border-[#938989]" value ="{{ Auth::user()->name }}" id="name">
        </li>

        <li class="list-none">
            <label for ="">Cidade</label>
            <input type="text" name="cidade" class="border-1 px-2 rounded-full border-[#938989]" value ="{{ Auth::user()->cidade }}">
        </li>

        <li class="list-none">
            <label for ="">Profissão</label>
            <input type="text" name="profissao" class="border-1 px-2 rounded-full border-[#938989]" value ="{{ Auth::user()->profissao }}">
        </li>

        <li class="list-none">
            <label for ="">Estado</label>
            <input type="text" name="estado" class="border-1 px-2 rounded-full border-[#938989]" value ="{{ Auth::user()->estado }}">
        </li>
     

         

            <p>

            <a href="{{route ('edit', Auth::user()->id )}}">Editar</a>

            </p>
            
</form>


    <script src="https://kit.fontawesome.com/ea72ae51ba.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



