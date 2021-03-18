@extends('base')

@section('menuclientes')
<br>
    <h1 style="text-align:center"> Tela de Gerenciamento de Clientes </h1>
<br>
<div style="text-align:center">
        @csrf
        @method('GET')
        <button onclick="location.href='Clientes/clientes/create'" type="button" class="btn btn-primary btn-block">Tela de inserção de dados</button>
        <br>
        @csrf
        @method('GET')
        <button onclick="location.href='Clientes/clientes/'" type="button" class="btn btn-primary btn-block">Lista todos Clientes</button>
        <br>
        @csrf
        @method('GET')
        <button onclick="location.href='Clientes/clientes/0'" type="button" class="btn btn-primary btn-block">Busca Cliente Específico</button>
</div>
@endsection