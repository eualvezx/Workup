@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="bg-purple-400 rounded pt-2">
                <div class="card p-2 ">
                    <div class="pt-8 px-8">
                        <div class="flex flex-row space-x-4 ">
                        <div class="text-3xl font-bold text-gray-800 mb-3">Atualizar senha</div>
 
                    <div class="card-body ">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
 
                            <input type="hidden" name="token" value="{{ $token }}">
 
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Endereço de email:</label>
 
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
 
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
 
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Senha:</label>
 
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
 
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
 
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmar senha:</label>
 
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
 
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="w-full text-white bg-purple-600 hover:bg-purple-700 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection