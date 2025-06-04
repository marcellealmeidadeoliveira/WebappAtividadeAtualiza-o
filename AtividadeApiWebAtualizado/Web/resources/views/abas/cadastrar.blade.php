@extends('layout.home')
@section('content')
<div style="background-color:rgb(48, 0, 0); border-radius: 20px; width: 50%; margin:auto; margin-top:90px">
<div class="text-center">
  <h5
  style="color:white; font-weight:bold;"
  > Cadastre um novo Conto de terror </h5>

</div>


<form  class="row g-3" method="POST" action="{{route('rota.store')}}">
@csrf
<div class="mb-3">

    <div class="d-flex justify-content-center mb-2 mt-3">
    <input type="text" class="form-control w-50" placeholder="Nomeie seu conto de terror" name="nome">
  </div>

 
    <div class="d-flex justify-content-center mb-2 mt-1">
    <input type="text" class="form-control w-50" placeholder="Nome do Criador" name="nomeCriador">
  </div>

      <div class="d-flex justify-content-center mb-2 mt-1">
    <input type="text" class="form-control w-50" placeholder="Idioma" name="idioma">
  </div>

      <div class="d-flex justify-content-center mb-2 mt-1">
    <input type="text" class="form-control w-50" placeholder="Tipo" name="tipo">
  </div>

      <div class="d-flex justify-content-center mb-2 mt-1">
    <input type="text" class="form-control w-50" placeholder="Sinopsia" name="sinopsia">
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