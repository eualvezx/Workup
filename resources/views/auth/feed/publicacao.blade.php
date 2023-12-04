<form action="/home" enctype="multipart/form-data" method="Post" class="space-y-6">
    <input type="hidden" name="user_id" value="{{$user->id}}">
    @csrf
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content px-4">
                <div class="modal-header">
                <h2 class="text-center text-2xl text-gray-600 font-bold font-sans">Criar publicação</h2>
                
                <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                    <i class="fa-solid fa-xmark fa-2x"></i>
                </button>
                </div>

        <div class="modal-body  ">

            <div>
                <label class=" text-xl text-gray-600 font-bold font-sans " for="username">Descrição</label>
            </div>
            <div>
                <div class="w-full w-max-[360px]">
                    <div class="relative w-full min-w-[200px]">
                        <textarea
                        class=" peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-2 border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal outline outline-0 disabled:border-0 disabled:bg-blue-gray-50 @error('descricao') is-invalid @enderror" maxlength="135" type="text" name="descricao" id="descricao"></textarea>
                        <label class="text-gray-600 float-left text-[12px]">Máximo de caracteres: 135</label>
                        
                    </div>
                </div>
            </div>
                            
            @error('descricao')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror             

          
                <input type="file" id="foto_pub" name="foto_pub" value="{{ old('foto_pub') }}" hidden onchange="previewImagem()" />
                <img class="flex w-[360px] h-[200px] border border-black rounded-[20px] mt-2" id="view"></img>
                <label for="foto_pub">
                    <span class="flex cursor-pointer justify-center border border-black rounded-lg w-[360px] mt-2 h-[50px] ">
                
                            <i class=" fa-solid fa-image fa-2xl ml-4 mt-4 "></i>
                            <p class=" text-xl text-gray-600 font-bold font-sans m-2" for="username">Escolher arquivo</p>
                       
                    </span> 
                </label> 
                         
        </div>
</form>



                        <div class="col-xs-12 col-sm-12 col-md-12 p-2">

                            <button type="submit" for="username" class="font-bold font-sans  w-full w-max-[360px] text-white bg-purple-600 hover:bg-purple-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-4">
                                {{ __('Publicar') }}
                            </button>
                        </div>


        </div>
       
    </div>


</div>



<script>
    function previewImagem() {
        var imagem = document.querySelector('input[name=foto_pub]').files[0];
        var preview = document.querySelector('img[id=view]');

        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (imagem) {
            reader.readAsDataURL(imagem);
        } else {
            preview.src = "";
        }
    }
</script>


                    </div>