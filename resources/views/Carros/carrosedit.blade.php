@extends('base')

@section('carrosedit')

<body style="margin: 20px">
    <form action="../@if(isset($carros->cod)){{ $carros->cod }}@endif" method='post'>
        @csrf
        @method('PUT')
        <h2 style="text-align:center">Alteração do item em específico</h2>
        <br><br>
        <div class="row">
            <div id="id" class="col-lg-2">
                <legend> COD </legend>
                <input name="cod" type="text" id="cod" placeholder="COD..." readonly value="@if(isset($carros->cod)){{ $carros->cod }}@endif">
            </div>
            <br><br>
            <div id="nome" class="col-lg-2">
                <legend> NOME</legend>
                <input name="nome" type="text" id="nome" placeholder="NOME..." value="@if(isset($carros->nome)){{ $carros->nome }}@endif">
                <br><br>
            </div>
            <div id="cor" class="col-lg-2">
                <legend> COR</legend>
                <input name="cor" type="text" id="cor" placeholder="COR..." value="@if(isset($carros->cor)){{ $carros->cor }}@endif">
                <br><br>
            </div>
            <div id="ano" class="col-lg-2">
                <legend> ANO</legend>
                <input name="ano" type="date" id="ano" placeholder="ANO..." value="@if(isset($carros->ano)){{ $carros->ano }}@endif">
                <br><br>
            </div>
            <div id="valor" class="col-lg-2">
                <legend> VALOR</legend>
                <input name="valor" type="text" id="valor" placeholder="VALOR..." value="@if(isset($carros->valor)){{ $carros->valor }}@endif">
                <br><br>
            </div>
        </div>
        <br><br>
        <input type='submit' value='Salvar'>
    </form>
</body>

<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
<a href='http://localhost:8000/Carros/carros/'>Voltar a tela anterior</a>
@endsection