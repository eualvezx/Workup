@extends('layouts.app')
    @section('content')
 
 
 
 
 
<style>
    .modal-content{
    width:70%;
    margin:0 auto;
    /*add what you want here*/
}
</style>
 
 
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
 
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
                            <div class="modal-body">
                                <form class="bg-white  rounded-lg shadow-lg min-w-full">
                                
 
                                <div>
                                    <label class="text-xl text-gray-600 font-bold font-sans" for="username">Título</label>
                                    <input maxlength="30" class="w-full text-xl w-max-[360px] bg-white border-1 rounded-lg p-2" type="text" name="titulo" id="titulo" />
                                </div>
 
                                <div>
                                    <label class="text-xl text-gray-600 font-bold font-sans" for="email">Salário</label>
                                    <input maxlength="15" class="w-full text-xl w-max-[360px] bg-white border-1 rounded-lg p-2" type="text" name="salario" id="salario" />
                                </div>
 
                                <div>
                                    <label class="text-xl text-gray-600 font-bold font-sans" for="password">Carga horária por dia</label>
                                    <input minlength="1" maxlength="2" class="w-full text-xl w-max-[360px] bg-white border-1 rounded-lg p-2" type="text" name="carga_hr" id="carga_hr"  />
                                </div>
 
                                <div>
                                    <label class="text-xl text-gray-600 font-bold font-sans" for="confirm">Descrição</label>
                                    <input maxlength="180" class="w-full text-xl w-max-[360px] bg-white border-1 rounded-lg p-2" type="text" name="descricao" id="descricao" />
                                </div>
 
                                <div>
                                    <label class="text-xl text-gray-600 font-bold font-sans" for="confirm">Vagas</label>
                                    <input maxlength="10" class="w-full text-xl w-max-[360px] bg-white border-1 rounded-lg p-2" type="text" name="lmt_candidatos" id="lmt_candidatos"/>
                                </div>
 
                                
 
                                <button type="submit" for="username" class="font-bold font-sans  w-full w-max-[360px] text-white bg-purple-600 hover:bg-purple-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-3 mt-4">
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