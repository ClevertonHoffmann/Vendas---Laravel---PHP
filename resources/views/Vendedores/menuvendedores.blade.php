@extends('base')

@section('menuvendedores')
<br>
    <h1 style="text-align:center"> Tela de Gerenciamento de Vendedores </h1>
<br>
<div style="text-align:center">
        @csrf
        @method('GET')
        <button onclick="location.href='Vendedores/vendedores/create'" type="button" class="btn btn-primary btn-block">Tela de inserção de dados</button>
        <br>
        @csrf
        @method('GET')
        <button onclick="location.href='Vendedores/vendedores/'" type="button" class="btn btn-primary btn-block">Lista todos Vendedores</button>
        <br>
        @csrf
        @method('GET')
        <button onclick="location.href='Vendedores/vendedores/0'" type="button" class="btn btn-primary btn-block">Busca Vendedor Específico</button>
</div>
@endsection