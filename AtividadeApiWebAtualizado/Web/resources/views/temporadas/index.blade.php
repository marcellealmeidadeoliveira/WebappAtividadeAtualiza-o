@extends('layout.home')
@section('content')

   <div style='margin-left: 20px; margin-right: 20px;'>
    <h1 style="color:#880808; text-align:center; margin-top:10px; font-weight:bold
">
Tabela analog
   </h1>
 <a href="{{route('rota.create')}}"
 class="btn btn-sucess mb-3">



<h1 style="color:#880808; text-align:center; margin-top:10px; font-weight:bold; margin-top:-50px
" >
    Lista de Contos AudioVisuais de Terror
</h1>

</a> @if(count($registro))

 <div>
    <table class="table table-hover table-dark">
        <thead>
        <tr>
        <th >Codigo</th>
            <th>Nome</th>
            <th>Episodios</th>
            <th>Quantidade de temporadas</th>
           <th>Duração</th>
            <th>Ano lançamento</th>
            <th>Ações</th>
</tr>
</thead>
<tbody>
@foreach($registro as $item)
<tr>
    <th>{{$item['id']}}</th>
        <td>{{$item['nome2']}}</td>
    <td>{{$item['episodios']}}</td>
    <td>{{$item['quantasT']}}</td>
        <td>{{$item['duracao']}}</td>
            <td>{{$item['anoLancamento']}}</td>
            <th>
              <a href="{{route('rota.edit',$item['id'])}}" class="btn btn-warning btm-sm">Editar</a>

                    <a href="{{route('rota.destroy',$item['id'])}}" class="btn btn-danger btm-sm" onclick="return confirm('Tem certeza?')">Excluir</a>      
</th>



</tr>
@endforeach
</tbody>
</table>
<div style="align-items: center; display: flex; justify-content: center;">


<a href="{{route('rota.create')}}" class="btn btn-success mt-3" >Cadastrar Novo Analog Horror</a>
<a href="{{route('temporadas.index')}}" class="btn btn-success mt-3" >Cadastrar novos dados</a>
</div>


</div>
@else<p>
    Não a nenhum registro cadastrado
</p>
@endif