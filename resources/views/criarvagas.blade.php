
  
    @extends('layouts.app')
    @section('content')


    <form action="/crievagas" class="bg-white rounded-md p-2 w-[200px] h-auto" method="POST">
        @csrf
        <div class="modal fade text-left" id="ModalCreateVaga" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Criar vagas </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                        <div class="form-group space-y-2">
                            <label for="">Titúlo:</label>
                            <input type="text" name="titulo" id="titulo" class="border rounded-md">
                            <br>

                            <label for="">Salário:</label>
                            <input type="text" name="salario" id="salario" class="border rounded-md">

                            <br>
                            <label for="">Carga Horária:</label>
                            <input type="text" name="carga_hr" id="carga_hr" class="border rounded-md">

                            <br>
                            <label for="">Descrição:</label>
                            <input type="text" name="descricao" id="descricao" class="border rounded-md">
                            
                            <br>
                            <label for="">Vagas:</label>
                            <input type="text" name="lmt_candidatos" id="lmt_candidatos" class="border rounded-md">

                            <br>

                    <select name="tipo" id="tipo"  class="" name="text"  value="" placeholder="">
                        <option value="" class="dropdown-item" >Escolha o tipo da vaga</option> 
                        <option value="Tecnologia" class="dropdown-item" >Tecnologia</option>
                        <option value="Agronomia" class="dropdown-item">Agronomia</option>

                    </select>

                            <button type="submit" class="bg-[#3C1564] text-white ">Criar</button>
                        </div>
                </div>
        
</div>
</div>
</div>
    </form>

@endsection
