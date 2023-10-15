
@extends('layouts.app')


@section('content')

    
<div class="justify-content text-center">
          <!-- Exemplo de botão "Prosseguir" -->
          <button id="btn-prosseguir">Prosseguir</button>

    <div class="flex flex-col items-center">
   
    <div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    
    <div class="flex items-center">

      <div class="container">
        <div class="row justify-content-center px-4 py-2 rounded">
          <!-- Exemplo de botão dropdown -->
            <select id="dropdown">
              <option value="">Selecione tipo de conta</option>
              <option value="pessoal">Pessoal</option>
              <option value="empresa">Empresa</option>
            </select>
            </div>
  </form>
</div>


</div>





<!-- Exemplo de código JavaScript -->
<script>
  // Obtendo os elementos do botão dropdown e do botão "Prosseguir"
  const dropdown = document.getElementById('dropdown');
  const btnProsseguir = document.getElementById('btn-prosseguir');

  // Adicionando um evento de escuta ao botão "Prosseguir"
  btnProsseguir.addEventListener('click', function() {
    const opcaoSelecionada = dropdown.value;
    if (opcaoSelecionada) {
      window.location.href = ''+opcaoSelecionada; // Redirecionando para a rota selecionada
    } else {
      alert('Selecione uma opção antes de prosseguir.'); // Exibindo um alerta se nenhuma opção for selecionada
    }
  });
</script>

@endsection