<form action="/home" enctype="multipart/form-data" method="Post" class="space-y-6">
    <input type="hidden" name="user_id" value="{{$user->id}}">
    @csrf
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Publicação </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    <div class="modal-body">
                        <div class="form-group">
                            
                            <textarea id="descricao" type="text" name="descricao"
                                class="@error('descricao') is-invalid @enderror w- resize-none "> </textarea>

                            @error('descricao')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!--<div class="form-group">
                            <label class="form-label" for="inputFile">File:</label>
                            <input type="file" name="file" id="inputFile"
                                class="form-control @error('file') is-invalid @enderror">

                            @error('file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>-->

                    <!-- Antigo input de texto
                            <textarea id="texto" type="text"
                                class="w-[360px] h-[100px] border-2 
                border-[#3C1564] resize-none block  rounded-[5px] pl-[10px] pr-[10px] focus:outline-none "
                                name="texto" value="{{ old('texto') }}" required autocomplete="texto" autofocus
                                placeholder="O que você está pensando?"></textarea>-->



                    <!-- Antigo input de imagem-->
                             <input type="file" id="foto_pub" name="foto_pub" value="{{ old('foto_pub') }}" required
                            autocomplete="foto_pub" hidden onchange="previewImagem()" />
                        <img class="flex w-[360px] h-[200px] rounded-[20px] mt-[10px]" id="view"> </img>
                        <span class="flex">
                            <label for="foto_pub">
                            <i class="fa-sharp fa-solid fa-image fa-xl cursor-pointer" style="color: #989898;"></i>
                            </label>

                    <!-- Antigo botão de Salvar
                            <button type="submit"
                                class="bg-[#3C1564] text-white  
                         rounded-[20px] w-[7em] h-[2em] mt-[10px] cursor-pointer" />
                            {{ __('Register') }}
                            </button>
                        </span>
                    -->
                
    </div>
</form>
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


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="button" class="btn grey btn-outline-secondary"
                                data-dismiss="modal">{{ __('Back') }}</button>
                            <button type="submit" class="btn btn-success" >{{ __('Publicar') }}</button>
                        </div>
                    </div>

