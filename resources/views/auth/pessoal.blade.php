@extends('layouts.app')

@section('content')

<div class="flex flex-row text-5xl ml-24 mb-8 font-sans font-semibold text-purple-600">
        Work Up
    </div> 

<div class="event-create-container  ">
    <div class="flex flex-row justify-content-center ">


        <!-- Inicio form -->

        <div class="w-full max-w-sm p-4 bg-white border-gray-700 rounded-lg shadow sm:p-6 md:p-8  ">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h5 class="text-xl font- text-black text-left mb-4 ">Informações Pessoais:</h5>


                <!-- NOME -->

                <div class="">

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nome" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <br>
                <!-- DATA DE NASCIMENTO -->
                <div>
                    <input type="date" name="dt" class="form-control @error('dt') is-invalid @enderror" name="dt" value="{{ old('dt') }}" placeholder=" Data de nascimento" required autocomplete="" autofocus>

                    @error('dt')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <br>

                <!-- ESTADO E CIDADE-->
                <div class="flex">
                  

                    <select id="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado') }}" name="estado" placeholder=" Estado"> 

                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                       
                    </select>
                    
                    @error('estado')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                </div>
                <br>

                <div class="flex">
                    <input type="text" id="cidade" class="form-control @error('cidade') is-invalid @enderror" value="{{ old('cidade') }}" name="cidade" placeholder="Cidade">

                    @error('cidade')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <br>

                <div class="flex">
                    <input type="text" id="profissao" class="form-control @error('profissao') is-invalid @enderror" value="{{ old('profissao') }}" name="profissao" placeholder="Profissao">

                    @error('profissao')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>


                <br>
                <!-- DROPDOWN DO Tipo da conta -->

                <div>
                <select name="typecont" class="form-control @error('typecont') is-invalid @enderror" name="typecont" value="{{ old('typecont') }}" placeholder="typecont"> 
                    <option value="" class="dropdown-item">Escolha o tipo da conta</option> 
                    <option value="1" class="dropdown-item">Pessoal</option>
                    <option value="2" class="dropdown-item">Empresa</option>


                    </select>
                    @if ('typecont'== '?')

                    @error('typecont')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
 
                    @endif
                </div>
          

                <!-- CPF -->
                <br>
                <div class="">
                    <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" placeholder="CPF">

                    @error('cpf')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <br>

                <!-- email -->

                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>

                <!-- Senha -->

                <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>

                <div class="row mb-3">

                    <div class="">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar senha">
                    </div>
                </div>


                <!-- BOTAO ENTRAR -->


               
            
                
                <button type="submit" class="mt-2 w-full text-white bg-purple-600 hover:bg-purple-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            {{ __('Registrar') }}
                </button>

                <a href="/login" class="flex mt-4 justify-center ml-auto text-sm text-purple-700 hover:underline">
                                        {{ __('Já possui uma conta?') }}
                    </a>
                

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