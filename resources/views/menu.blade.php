@extends('base')

@section('menu')
<br>
    <h1 style="text-align:center"> Tela de Gerenciamento de Vendas </h1>
<br>
<div style="text-align:center">
        @csrf
        @method('GET')
        <button onclick="location.href='enderecos'" type="button" class="btn btn-primary btn-block">Tela de enderecos</button>
        <br>
</div>
<div style="text-align:center">
        @csrf
        @method('GET')
        <button onclick="location.href='carros'" type="button" class="btn btn-primary btn-block">Tela de carros</button>
        <br>
</div>
<div style="text-align:center">
        @csrf
        @method('GET')
        <button onclick="location.href='clientes'" type="button" class="btn btn-primary btn-block">Tela de clientes</button>
        <br>
</div>
@endsection