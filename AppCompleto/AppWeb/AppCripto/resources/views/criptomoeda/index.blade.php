@extends('layouts.app')
@section('content')

<h1> Lista de Criptomoeda </h1>

<<<<<<< HEAD
=======
<a class="btn btn-primary" href="{{ route('criptomoedas.create') }}" role="button">Cadastrar</a>
>>>>>>> 85bb414560d8905fb671a8ce69d1e4edeab3504a

<a class="btn btn-primary" href="{{ route('criptomoedas.create') }}" role="button">cadastrar</a>
@if(count($criptos))
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sigla</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    @foreach($criptos as $cripto)
        <tr>
        <th scope="row">{{$cripto['sigla']}}</th>
        <td>{{$cripto['nome']}}</td>
        <td>R$ {{ number_format($cripto['valor'], 2 , ',' , '.')}}</td>
        <td>
<<<<<<< HEAD
          <a href="{{ route('criptomoedas.edit', $cripto['id']) }}" class="=btn btn-warning btn-sm">Editar</a>
          <a href="{{ route('criptomoedas.destroy', $cripto['id']) }}" class="=btn btn-danger btn-sm" onclick="return confirm('Tem certeza?')">Excluir</a>
=======
          <a href="{{ route('criptomoedas.edit', $cripto['id']) }}" class="btn btn-warning btn-sm">Editar</a>
          <a href="{{ route('criptomoedas.destroy', $cripto['id']) }}" class="btn btn-warning btn-sm" onclick="return confirm('Tem certeza?')">Excluir</a>
>>>>>>> 85bb414560d8905fb671a8ce69d1e4edeab3504a
        </td>
        </tr>
    @endforeach
  </tbody>
</table>
@else
<p>Nenhuma Criptomoeda</p>
@endif
@endsection