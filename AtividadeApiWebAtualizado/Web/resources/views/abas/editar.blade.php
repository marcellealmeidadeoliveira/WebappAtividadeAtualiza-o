@extends('layout.home')
 
@section('content')
    <h1
    style="color:#880808; font-weight:bold; font-size:30px; "
    >Editar informações</h1>
    <form method="POST" action="{{ route('rota.update', $registro['id']) }}">
        @csrf
        <div style=" border-radius: 20px; width: 50%; margin:auto; margin-top:90px">

            <label style="color:#880808; font-weight:bold; font-size:30px;">
                
            Nome do conto</label>
            <input type="text" name="nome" class="form-control" value="{{ $registro['nome'] }}" required>



            <label style="color:#880808; font-weight:bold; font-size:30px;">Nome criador</label>
            <input type="text" name="nomeCriador" class="form-control" value="{{ $registro['nomeCriador'] }}" required>


        
            <label style="color:#880808; font-weight:bold; font-size:30px;">Idioma</label>
            <input type="text" name="idioma" class="form-control" value="{{ $registro['idioma'] }}" required>
   

        
            <label style="color:#880808; font-weight:bold; font-size:30px;">Tipo</label>
            <input type="text" name="tipo" class="form-control" value="{{ $registro['tipo'] }}" required>
    

        
            <label style="color:#880808; font-weight:bold; font-size:30px;">Sinopsia</label>
            <input type="text" name="sinopsia" class="form-control" value="{{ $registro['sinopsia'] }}" required>
        </div>
<div style="aling-items: center; display: flex; justify-content: center; margin-top: 20px;">
        <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
        <div style="aling-items: center; display: flex; justify-content: center; margin-top: 20px;">
        <a href="{{ route('rota.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
    </form>

@endsection
 