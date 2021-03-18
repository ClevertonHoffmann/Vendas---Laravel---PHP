@extends('base')

@section('clientesshow')

<body style="margin: 20px">
    <form method='post' action="/Clientes/clientes/busca">
        @csrf
        @method('GET')
        <h2 style="text-align:center">Busca item em específico por código</h2>
        <br><br>
        <div class="row">
            <div id="tccod" class="col-lg-2">
                <legend> COD</legend>
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
            <th id="th1">COD</th>
            <p>
                <th id="th2">NOME</th>
            <p>
                <th id="th3">CPF</th>
            <p>
                <th id="th4">TELEFONE</th>
            <p>
            <p>
                <th id="th5">ENDERECOS</th>
            <p>
        </tr>
        @if(isset($clientes->cod))
                @if(isset($clientes))
                    <tr id="linha{{ $clientes->cod }}">
                            <td id="td1">{{ $clientes->cod }}</td>
                        <p>
                            <td id="td2">{{ $clientes->nome }}</td>
                        <p>
                            <td id="td3">{{ $clientes->cep }}</td>
                        <p>
                            <td id="td4">{{ $clientes->telefone }}</td>
                        <p>
                        @foreach($enderecos as $endereco)
                        @if($endereco->cep==$clientes->enderecos_cep)
                            <p>
                                <td id="td5">{{ $clientes->enderecos_cep }}-{{$endereco->bairro}}-{{$endereco->rua}}-{{$endereco->cidade}}</td>
                            <p>
                        @endif
                        @endforeach  
                    </tr>
                @endif
        @else
                @if(isset($clientes))
                @foreach($clientes as $cliente)
                    <tr id="linha{{ $cliente->cod }}">
                            <td id="td1">{{ $cliente->cod }}</td>
                        <p>
                            <td id="td2">{{ $cliente->nome }}</td>
                        <p>
                            <td id="td3">{{ $cliente->cep }}</td>
                        <p>
                            <td id="td4">{{ $cliente->telefone }}</td>
                        <p>
                        @foreach($enderecos as $endereco)
                        @if($endereco->cep==$cliente->enderecos_cep)
                            <p>
                                <td id="td5">{{ $cliente->enderecos_cep }}-{{$endereco->bairro}}-{{$endereco->rua}}-{{$endereco->cidade}}</td>
                            <p>
                        @endif
                    @endforeach  
                    </tr>
                @endforeach
                @endif
        @endif
    </tbody>
</table>

<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a>

@endsection