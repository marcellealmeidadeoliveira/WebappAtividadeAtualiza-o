@extends('layout.home')
@section('content')
<div style="background-color:rgb(48, 0, 0); border-radius: 20px; width: 50%; margin:auto; margin-top:90px">
<div class="text-center">
  <h5
  style="color:white; font-weight:bold;"
  > Cadastre uma nova temporada </h5>

</div>


<form  class="row g-3" method="POST" action="{{route('rota.store')}}">
@csrf
<div class="mb-3">

    <div class="d-flex justify-content-center mb-2 mt-3">
    <input type="text" class="form-control w-50" placeholder="Nomeie seu conto de terror" name="nome2">
  </div>

 
    <div class="d-flex justify-content-center mb-2 mt-1">
    <input type="text" class="form-control w-50" placeholder="Quantos episodios" name="episodios">
  </div>

      <div class="d-flex justify-content-center mb-2 mt-1">
    <input type="text" class="form-control w-50" placeholder="Quantas temporadas" name="quantasT">
  </div>

      <div class="d-flex justify-content-center mb-2 mt-1">
    <input type="text" class="form-control w-50" placeholder="Duração" name="duracao">
  </div>

      <div class="d-flex justify-content-center mb-2 mt-1">
    <input type="text" class="form-control w-50" placeholder="Ano de lançamento" name=" anoLancamento">
  </div>


    <div class="d-flex justify-content-center mb-1 mt-3">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
  <div class="d-flex justify-content-center">
  <a href="{{ route('rota.index') }}" class="btn btn-success mt-3">Voltar</a>
</div>
</form>

</div>
    @endsection