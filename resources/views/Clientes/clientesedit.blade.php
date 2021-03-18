@extends('base')

@section('clientesedit')

<body style="margin: 20px">
    <form action="../@if(isset($clientes->cod)){{ $clientes->cod }}@endif" method='post'>
        @csrf
        @method('PUT')
        <h2 style="text-align:center">Alteração do item em específico</h2>
        <br><br>
        <div class="row">
            <div id="id" class="col-lg-2">
                <legend> COD </legend>
                <input name="cod" type="text" id="cod" placeholder="cod..." readonly value="@if(isset($clientes->cod)){{ $clientes->cod }}@endif">
            </div>
            <br><br>
            <div id="nome" class="col-lg-2">
                <legend> NOME</legend>
                <input name="nome" type="text" id="nome" placeholder="NOME..." value="@if(isset($clientes->nome)){{ $clientes->nome }}@endif">
                <br><br>
            </div>
            <div id="cpf" class="col-lg-2">
                <legend> CPF</legend>
                <input name="cpf" type="text" id="cpf" placeholder="CPF..." value="@if(isset($clientes->cpf)){{ $clientes->cpf }}@endif">
                <br><br>
            </div>
            <div id="telefone" class="col-lg-2">
                <legend> TELEFONE</legend>
                <input name="telefone" type="text" id="telefone" placeholder="TELEFONE..." value="@if(isset($clientes->telefone)){{ $clientes->telefone }}@endif">
                <br><br>
            </div>
            <div id="endereco_cep" class="col-lg-2">
                <legend> Endereco</legend>
                <input name="endereco_cep" type="text" id="endereco_cep" placeholder="ENDERECO..." value="@if(isset($clientes->enderecos_cep)){{ $clientes->enderecos_cep }}@endif">
                <br><br>
            </div>
        </div>
        <br><br>
        <input type='submit' value='Salvar'>
    </form>
</body>

<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
<a href='http://localhost:8000/Clientes/clientes/'>Voltar a tela anterior</a>
@endsection