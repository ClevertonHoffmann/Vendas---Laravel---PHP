@extends('base')

@section('menuenderecos')
<br>
    <h1 style="text-align:center"> Tela de Gerenciamento de Enderecos </h1>
<br>
<div style="text-align:center">
        @csrf
        @method('GET')
        <button onclick="location.href='Enderecos/enderecos/create'" type="button" class="btn btn-primary btn-block">Tela de inserção de dados</button>
        <br>
        @csrf
        @method('GET')
        <button onclick="location.href='Enderecos/enderecos/'" type="button" class="btn btn-primary btn-block">Lista todos Endereços</button>
        <br>
        @csrf
        @method('GET')
        <button onclick="location.href='Enderecos/enderecos/0'" type="button" class="btn btn-primary btn-block">Busca Endereço Específico</button>
</div>
@endsection