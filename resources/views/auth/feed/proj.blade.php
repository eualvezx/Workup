<form action="/arquivos" enctype="multipart/form-data" method="Post" class="space-y-6">
    <input type="hidden" name="user_id" value="{{$user->id}}">
    @csrf
    <div class="modal fade text-left" id="ModalCreate1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h2 class="text-center text-2xl text-gray-600 font-bold font-sans">Upar projeto</h2>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                    <i class="fa-solid fa-xmark fa-2x"></i>
                </button>
                </div>
            


        <div class="modal-body">

                        <div class="form-group  px-4">
                            <div>
                                <label class=" text-xl text-gray-600 font-bold font-sans " for="username">Título</label>
                            </div>

                        <div class="w-full w-max-[360px]">
                            <div class="relative w-full min-w-[200px]">
                                <textarea 
                                class=" peer h-full max-h-[50px] w-full resize-none rounded-[7px] border border-2 border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal outline outline-0 disabled:border-0 disabled:bg-blue-gray-50 @error('descricao') is-invalid @enderror" maxlength="50" type="text" name="descricao" id="descricao"></textarea >
                                
                            </div>
                        </div>


                        <!--  input de Arquivo -->
                  
                        
                        <input type="file" id="arquivo" name="arquivo" value="arquivo">
                            <label for="arquivo">
                            </label>
                            

                        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">

                            <button type="submit" for="username" class="font-bold font-sans  w-full w-max-[360px] text-white bg-purple-600 hover:bg-purple-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-3">
                                {{ __('Publicar') }}
                            </button>
                        </div>

                    </div>
                </div>
                </form>
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