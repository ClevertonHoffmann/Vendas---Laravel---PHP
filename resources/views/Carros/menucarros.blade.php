@extends('base')

@section('menucarros')
<br>
    <h1 style="text-align:center"> Tela de Gerenciamento de Carros </h1>
<br>
<div style="text-align:center">
        @csrf
        @method('GET')
        <button onclick="location.href='Carros/carros/create'" type="button" class="btn btn-primary btn-block">Tela de inserção de dados</button>
        <br>
        @csrf
        @method('GET')
        <button onclick="location.href='Carros/carros/'" type="button" class="btn btn-primary btn-block">Lista todos Carros</button>
        <br>
        @csrf
        @method('GET')
        <button onclick="location.href='Carros/carros/0'" type="button" class="btn btn-primary btn-block">Busca Contato Carro</button>
</div>
@endsection