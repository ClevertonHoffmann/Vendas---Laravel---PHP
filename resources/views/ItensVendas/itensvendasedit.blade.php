@extends('base')

@section('enderecosedit')

<body style="margin: 20px">
    <form action="../@if(isset($enderecos->cep)){{ $enderecos->cep }}@endif" method='post'>
        @csrf
        @method('PUT')
        <h2 style="text-align:center">Alteração do item em específico</h2>
        <br><br>
        <div class="row">
            <div id="id" class="col-lg-2">
                <legend> Cep </legend>
                <input name="cep" type="text" id="cep" placeholder="CEP..." readonly value="@if(isset($enderecos->cep)){{ $enderecos->cep }}@endif">
            </div>
            <br><br>
            <div id="nome" class="col-lg-2">
                <legend> Bairro</legend>
                <input name="bairro" type="text" id="bairro" placeholder="BAIRRO..." value="@if(isset($enderecos->bairro)){{ $enderecos->bairro }}@endif">
                <br><br>
            </div>
            <div id="celular" class="col-lg-2">
                <legend> Rua</legend>
                <input name="rua" type="text" id="rua" placeholder="RUA..." value="@if(isset($enderecos->rua)){{ $enderecos->rua }}@endif">
                <br><br>
            </div>
            <div id="telefone" class="col-lg-2">
                <legend> Cidade</legend>
                <input name="cidade" type="text" id="cidade" placeholder="CIDADE..." value="@if(isset($enderecos->cidade)){{ $enderecos->cidade }}@endif">
                <br><br>
            </div>
        </div>
        <br><br>
        <input type='submit' value='Salvar'>
    </form>
</body>

<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
<a href='http://localhost:8000/Enderecos/enderecos/'>Voltar a tela anterior</a>
@endsection