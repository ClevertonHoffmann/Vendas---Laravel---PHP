@extends('base')

@section('vendedoresshow')

<body style="margin: 20px">
    <form method='post' action="/Vendedores/vendedores/busca">
        @csrf
        @method('GET')
        <h2 style="text-align:center">Busca item em específico por descrição</h2>
        <br><br>
        <div class="row">
            <div id="tccod" class="col-lg-2">
                <legend> cod</legend>
                <input name="cod" type="text" id="cod" placeholder="cod...">
                <br><br>
            </div>
        </div>
        <input type="submit" value="BUSCAR" id="action" name="action" style="background-color:#66ffff"></input>
    </form>
</body>

<table class="table table-bordered">
    <tbody>
        <tr>
            <th id="th1">cod</th>
            <p>
                <th id="th2">BAIRRO</th>
            <p>
                <th id="th3">RUA</th>
            <p>
                <th id="th4">CIDADE</th>
            <p>
        </tr>
        @if(isset($vendedores->cod))
                @if(isset($vendedores))
                    <tr id="linha{{ $vendedores->cod }}">
                            <td id="td1">{{ $vendedores->cod }}</td>
                        <p>
                            <td id="td2">{{ $vendedores->nome }}</td>
                        <p>
                            <td id="td3">{{ $vendedores->cpf }}</td>
                    </tr>
                @endif
        @else
                @if(isset($vendedores))
                @foreach($vendedores as $endereco)
                    <tr id="linha{{ $endereco->cod }}">
                            <td id="td1">{{ $endereco->cod }}</td>
                        <p>
                            <td id="td2">{{ $endereco->nome }}</td>
                        <p>
                            <td id="td3">{{ $endereco->cpf }}</td>
                    </tr>
                @endforeach
                @endif
        @endif
    </tbody>
</table>

<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a>

@endsection