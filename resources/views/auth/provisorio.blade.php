@extends('layouts\teste')

<div class="col-auto">
    
    <a href="#" data-toggle="modal" data-target="#ModalCreate">
            <span></span> {{_('Add')}}
    </a>

</div>


<div class="w-full max-w-sm p-4 bg-white border-gray-700 rounded-lg shadow sm:p-6 md:p-8  ">
   <h1> Socorro</h1>
                <form method="POST" class="space-y-6" action="{{ route('login') }}">
                    <h5 class="text-xl font- text-black text-center">Login</h5>
                    @csrf
                    <div>
                        <label for="email" style="color: black"
                            class="block mb-2 text-sm font-medium text-gray-900">{{ __('Seu e-mail') }}</label>

                        <!-- ESCREVER EMAIL -->

                        <input type="email" name="email" id="email"
                            class="@error('email') is-invalid @enderror   border-gray-500 text-gray text-sm rounded-lg focus:ring-blue-500 border focus:border-blue-500 block w-full p-2.5 placeholder-gray-400"
                            placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <!-- TEXTO SENHA -->

                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900">{{ __('Sua senha') }}</label>

                        <!-- ESCREVER SENHA -->

                        <input type="password" name="password" id="password" placeholder="Senha"
                            class="@error('password') is-invalid @enderror border  border-gray-500 text-gray text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400"
                            required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <!-- BOTAO LEMBRAR -->

                    <div class="flex items-start">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                                    value="" class="w-4 h-4 border-gray-600 rounded bg-gray-700 ">
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-gray-900">{{ __('Lembrar') }}</label>
                        </div>

                        <!-- BOTAO ESQUECEU SENHA -->

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="ml-auto text-sm text-purple-700 hover:underline">
                                {{ __('Esqueceu senha?') }}
                            </a>
                        @endif

                    </div>

                    <!-- BOTAO ENTRAR -->

                    <button type="submit"
                        class="w-full text-white bg-purple-600 hover:bg-purple-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        {{ __('Entrar') }}
                    </button>

                    <!-- BOTAO CRIAR CONTA -->

                    <div class="text-sm font-medium text-gray-500">
                        Não registrado?

                        @if (Route::has('type_account'))
                            <a href="{{ route('type_account') }}" class="text-purple-500 hover:underline">
                                {{ __('Criar conta') }}
                            </a>
                        @endif



                    </div>
                </form>
            </div>
            @include('auth.feed.publicacao')