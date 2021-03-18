@extends('base')

@section('vendedoresedit')

<body style="margin: 20px">
    <form action="../@if(isset($vendedores->cod)){{ $vendedores->cod }}@endif" method='post'>
        @csrf
        @method('PUT')
        <h2 style="text-align:center">Alteração do item em específico</h2>
        <br><br>
        <div class="row">
            <div id="id" class="col-lg-2">
                <legend> COD </legend>
                <input name="cod" type="text" id="cod" placeholder="cod..." readonly value="@if(isset($vendedores->cod)){{ $vendedores->cod }}@endif">
            </div>
            <br><br>
            <div id="nome" class="col-lg-2">
                <legend> Nome</legend>
                <input name="nome" type="text" id="nome" placeholder="nome..." value="@if(isset($vendedores->nome)){{ $vendedores->nome }}@endif">
                <br><br>
            </div>
            <div id="celular" class="col-lg-2">
                <legend> CPF</legend>
                <input name="cpf" type="text" id="cpf" placeholder="cpf..." value="@if(isset($vendedores->cpf)){{ $vendedores->cpf }}@endif">
                <br><br>
            </div>
        </div>
        <br><br>
        <input type='submit' value='Salvar'>
    </form>
</body>

<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
<a href='http://localhost:8000/Vendedores/vendedores/'>Voltar a tela anterior</a>
@endsection