    
<form action="/arProj" enctype="multipart/form-data" method="Post" class="space-y-6">
    <input type="hidden" name="user_id" value="{{$user->id}}">
    @csrf
    <div class="modal fade text-left" id="ModalPasta" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar projeto </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    <div class="modal-body">
                        <div class="form-group">

                            <div>
                                <label> Nomeie o projeto </label>
                                <input id="titulo" type="text" name="titulo"
                                    class="@error('titulo') is-invalid @enderror w- resize-none ">
    
                                @error('titulo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                                <br>

                            <div>
                                <label> De uma descrição </label>
                                <input id="descricao" type="text" name="descricao"
                                    class="@error('descricao') is-invalid @enderror w- resize-none ">

                                @error('descricao')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <BR>



                                    <!-- Arrastar e soltas -->
                                   

                                    <div>
                                            <input type="button" value="Selecione arquivos" onclick="file_explorer();">
                                            <input type="file" id="arquivonovo" name="arquivonovo" multiple>
                                        
                                    </div>

                                         <!-- Imagem -->
                                   

                                         <div>
                                            <input type="button" value="Selecione arquivos" onclick="file_explorer();">
                                            <input type="file" id="foto_capa" name="foto_capa" multiple>
                                        
                                    </div>
                                 
                                 
 
                                    
                           
        
</div>

</form>
<script>
    function previewImagem() {
        var imagem = document.querySelector('input[name=foto_capa]').files[0];
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
        </body>
    </html>
    
