@extends('base')

@section('clientes')
<body style="margin: 20px">
    <form action="{{route('clientes.store')}}" method='post'>
        @csrf
        @method('POST')
        <h2 style="text-align:center">Inserção de novos clientes</h2>
        <br><br>
        <div class="row">
            <div id="cod" class="col-lg-2">
                <legend> COD </legend>
                <input name="cod" type="text" id="cod" placeholder="COD...">
            </div>
            <br><br>
            <div id="nome" class="col-lg-2">
                <legend> NOME</legend>
                <input name="nome" type="text" id="nome" placeholder="NOME...">
                <br><br>
            </div>
            <div id="cpf" class="col-lg-2">
                <legend> CPF</legend>
                <input name="cpf" type="text" id="cpf" placeholder="CPF...">
                <br><br>
            </div>
            <div id="telefone" class="col-lg-2">
                <legend> TELEFONE</legend>
                <input name="telefone" type="text" id="telefone" placeholder="TELEFONE...">
                <br><br>
            </div>
            <div id="enderecos_cep" class="col-lg-2">
                <legend> CEP_ENDERECO</legend>
                <input name="enderecos_cep" type="text" id="enderecos_cep" placeholder="ENDERECO...">
                <br><br>
            </div>
        </div>
        <br><br>
        <input type='submit' value='Salvar'>
    </form>
</body>
<br>
<a href='http://localhost:8000/'>Voltar ao Menu</a>
@endsection