@extends('base')

@section('enderecos')
<body style="margin: 20px">
    <form action="{{route('enderecos.store')}}" method='post'>
        @csrf
        @method('POST')
        <h2 style="text-align:center">Inserção de novos enderecos</h2>
        <br><br>
        <div class="row">
            <div id="id" class="col-lg-2">
                <legend> CEP </legend>
                <input name="cep" type="text" id="cep" placeholder="CEP...">
            </div>
            <br><br>
            <div id="bairro" class="col-lg-2">
                <legend> Bairro</legend>
                <input name="bairro" type="text" id="bairro" placeholder="BAIRRO...">
                <br><br>
            </div>
            <div id="rua" class="col-lg-2">
                <legend> Rua</legend>
                <input name="rua" type="text" id="rua" placeholder="RUA...">
                <br><br>
            </div>
            <div id="cidade" class="col-lg-2">
                <legend> Cidade</legend>
                <input name="cidade" type="text" id="cidade" placeholder="CIDADE...">
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