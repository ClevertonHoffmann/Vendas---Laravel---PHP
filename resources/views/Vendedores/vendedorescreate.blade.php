@extends('base')

@section('vendedores')
<body style="margin: 20px">
    <form action="{{route('vendedores.store')}}" method='post'>
        @csrf
        @method('POST')
        <h2 style="text-align:center">Inserção de novos vendedores</h2>
        <br><br>
        <div class="row">
            <div id="id" class="col-lg-2">
                <legend> COD </legend>
                <input name="cod" type="text" id="cod" placeholder="COD...">
            </div>
            <br><br>
            <div id="nome" class="col-lg-2">
                <legend> Nome</legend>
                <input name="nome" type="text" id="nome" placeholder="NOME...">
                <br><br>
            </div>
            <div id="cpf" class="col-lg-2">
                <legend> CPF</legend>
                <input name="cpf" type="text" id="cpf" placeholder="CPF...">
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