@extends('layout.home')
@section('content')

   <div style='margin-left: 20px; margin-right: 20px;'>
    <h1 style="color:#880808; text-align:center; margin-top:10px; font-weight:bold
">
Tabela analog
   </h1>
 <a href="{{route('rota.create')}}"
 class="btn btn-sucess mb-3">
<h3 style="color:#880808; margin-top:10px; font-weight:bold; margin-top:-50px
" >
    Lista de Contos AudioVisuais de Terror
</h3>

</a> @if(count($registro))

 <div>
    <table class="table table-hover table-dark">
        <thead>
        <tr>
        <th >Codigo</th>
            <th>Nome</th>
            <th>Nome criador</th>
            <th>Idioma</th>
           <th>Tipo</th>
            <th>Sinopsia</th>
            <th>Ações</th>
</tr>
</thead>
<tbody>
@foreach($registro as $item)
<tr>
    <th>{{$item['id']}}</th>
        <td>{{$item['nome']}}</td>
    <td>{{$item['nomeCriador']}}</td>
    <td>{{$item['idioma']}}</td>
        <td>{{$item['tipo']}}</td>
            <td>{{$item['sinopsia']}}</td>
            <th>
              <a href="{{route('rota.edit',$item['id'])}}" class="btn btn-warning btm-sm">Editar</a>

                    <a href="{{route('rota.destroy',$item['id'])}}" class="btn btn-danger btm-sm" onclick="return confirm('Tem certeza?')">Excluir</a>      
</th>



</tr>
@endforeach
</tbody>
</table>
<div style="align-items: center; display: flex; justify-content: center;">

<a href="{{route('temporadas.index')}}" class="btn btn-success mt-3" >Cadastrar temporadas</a>

<div style="color:black; font-size:20px">-</div>
<a href="{{route('rota.create')}}" class="btn btn-success mt-3" >Cadastrar Novo Analog Horror</a>
</div>










</div>




@else<p>
    Não a nenhum registro cadastrado
</p>
@endif