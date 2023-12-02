
  
    @extends('layouts.app')
    @section('content')








    

    <form action="/perfil2" class="bg-white rounded-md p-2 w-[200px] h-auto" method="POST">
        @csrf

        
        <div class="modal fade text-left" id="ModalCreatefoto" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Criar vagas </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                        <div class="form-group space-y-2 ">

                        <div class="flex flex-col space-y-2">
                            <label for ="" class="text-base">Título</label>
                            <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="titulo" id="titulo">
                        </div>
                            

                        <div class="flex flex-col space-y-2">
                            <label for ="" class="text-base">Salário</label>
                            <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="salario" id="salario">
                        </div>

                           
                        <div class="flex flex-col space-y-2">
                            <label for ="" class="text-base">Carga horária</label>
                            <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="carga_hr" id="carga_hr" minlength="1" maxlength="2">
                        </div>

                           
                        <div class="flex flex-col space-y-2">
                            <label for ="" class="text-base">Descrição</label>
                            <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="descricao" id="descricao">
                        </div>
                            
                        <div class="flex flex-col space-y-2">
                            <label for ="" class="text-base">Vagas</label>
                            <input type="text" class="w-52 bg-gray-200 rounded-lg p-2" name="lmt_candidatos" id="lmt_candidatos" >
                        </div>

                        <button type="submit" class="btn btn-primary">Criar</button>
                        </div>
                </div>

</div>
</div>
</div>













    </form>

@endsection
