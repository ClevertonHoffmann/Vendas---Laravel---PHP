@extends('base')

@section('carros')
<body style="margin: 20px">
    <form action="{{route('carros.store')}}" method='post'>
        @csrf
        @method('POST')
        <h2 style="text-align:center">Inserção de novos carros</h2>
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
            <div id="rua" class="col-lg-2">
                <legend> COR</legend>
                <input name="cor" type="text" id="cod" placeholder="COR...">
                <br><br>
            </div>
            <div id="ano" class="col-lg-2">
                <legend> ANO</legend>
                <input name="ano" type="date" id="ano" placeholder="ANO...">
                <br><br>
            </div>
            <div id="valor" class="col-lg-2">
                <legend> VALOR</legend>
                <input name="valor" type="text" id="valor" placeholder="VALOR...">
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