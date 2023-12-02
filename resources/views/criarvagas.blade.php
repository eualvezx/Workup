
  
    @extends('layouts.app')
    @section('content')





<style>
    .modal-content{
    width:70%;
    margin:0 auto;
    /*add what you want here*/
}
</style>


    

    <form action="/crievagas" class="bg-white rounded-md p-2 w-[200px] h-auto" method="POST">
    <input type="hidden" name="criador_vaga_id" value="{{Auth::user()->id}}">
        @csrf

        
        <div class="modal fade text-left " id="ModalCreateVaga" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h2 class="text-center text-2xl text-gray-600 font-bold font-sans">Criar Vaga</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    

              


                        <div class="  flex justify-center items-center">
	                        <div class="lg:w-2/3 md:w-1/2 w-2/3">
		                        <form class="bg-white p-10 rounded-lg shadow-lg min-w-full">
			                    

			                    <div>
				                    <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Título</label>
				                    <input maxlength="30" class="w-full bg-gray-200 px-4 py-2 rounded-lg focus:outline-none" type="text" name="titulo" id="titulo" />
                                </div>

				                <div>
					                <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Salário</label>
					                <input maxlength="15" class="w-full bg-gray-200 px-4 py-2 rounded-lg focus:outline-none" type="text" name="salario" id="salario" />
                                </div>

					            <div>
						            <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Carga horária por dia</label>
						            <input minlength="1" maxlength="2" class="w-full bg-gray-200 px-4 py-2 rounded-lg focus:outline-none" type="text" name="carga_hr" id="carga_hr"  />
                                </div>

						        <div>
							        <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Descrição</label>
							        <input maxlength="180" class="w-full bg-gray-200 px-4 py-2 rounded-lg focus:outline-none" type="text" name="descricao" id="descricao" />
                                </div>

                                <div>
							        <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Vagas</label>
							        <input maxlength="10" class="w-full bg-gray-200 px-4 py-2 rounded-lg focus:outline-none" type="text" name="lmt_candidatos" id="lmt_candidatos"/>
                                </div>

							    

                                <button type="submit" for="username" class="font-bold font-sans mt-4 w-full w-max-[360px] text-white bg-purple-600 hover:bg-purple-700 focus:outline-none font-medium rounded-lg text-xl px-5 py-2.5 text-center mb-3">
                                    Criar
                                </button>
							   

		                        </form>
	                        </div>
                        </div>
                </div>

</div>
</div>
</div>













    </form>

@endsection
