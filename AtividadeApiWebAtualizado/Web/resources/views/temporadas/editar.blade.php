@extends('layout.home')
 
@section('content')
    <h1>Editar informações</h1>
    <form method="POST" action="{{ route('rota.update', $registro['id']) }}">
        @csrf
        <div class="mb-3">
            <label>Sabor</label>
            <input type="text" name="nome2" class="form-control" value="{{ $registro['nome2'] }}" required>
        </div>
        <div class="mb-3">

            <label>Descrição</label>
            <input type="text" name="episodios" class="form-control" value="{{ $registro['episodios'] }}" required>
        </div>

        
            <label>Descrição</label>
            <input type="text" name="quantasT" class="form-control" value="{{ $registro['quantasT'] }}" required>
        </div>

        
            <label>Descrição</label>
            <input type="text" name="duracao" class="form-control" value="{{ $registro['duracao'] }}" required>
        </div>

        
            <label>Descrição</label>
            <input type="text" name="anoLancamento" class="form-control" value="{{ $registro['anoLancamento'] }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Alterar</button>
        <a href="{{ route('rota.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>

@endsection
 