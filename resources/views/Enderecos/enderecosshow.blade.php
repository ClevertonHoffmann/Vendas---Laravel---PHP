@extends('base')

@section('enderecosshow')

<body style="margin: 20px">
    <form method='post' action="/Enderecos/enderecos/busca">
        @csrf
        @method('GET')
        <h2 style="text-align:center">Busca item em específico por código</h2>
        <br><br>
        <div class="row">
            <div id="tccep" class="col-lg-2">
                <legend> CEP</legend>
                <input name="cep" type="text" id="cep" placeholder="CEP...">
                <br><br>
            </div>
        </div>
        <input type="submit" value="BUSCAR" id="action" name="action" style="background-color:#66ffff"></input>
    </form>
</body>

<table class="table table-bordered">
    <tbody>
        <tr>
            <th id="th1">CEP</th>
            <p>
                <th id="th2">BAIRRO</th>
            <p>
                <th id="th3">RUA</th>
            <p>
                <th id="th4">CIDADE</th>
            <p>
        </tr>
        @if(isset($enderecos->cep))
                @if(isset($enderecos))
                    <tr id="linha{{ $enderecos->cep }}">
                            <td id="td1">{{ $enderecos->cep }}</td>
                        <p>
                            <td id="td2">{{ $enderecos->bairro }}</td>
                        <p>
                            <td id="td3">{{ $enderecos->rua }}</td>
                        <p>
                            <td id="td4">{{ $enderecos->cidade }}</td>
                        <p>
                    </tr>
                @endif
        @else
                @if(isset($enderecos))
                @foreach($enderecos as $endereco)
                    <tr id="linha{{ $endereco->cep }}">
                            <td id="td1">{{ $endereco->cep }}</td>
                        <p>
                            <td id="td2">{{ $endereco->bairro }}</td>
                        <p>
                            <td id="td3">{{ $endereco->rua }}</td>
                        <p>
                            <td id="td4">{{ $endereco->cidade }}</td>
                        <p>
                    </tr>
                @endforeach
                @endif
        @endif
    </tbody>
</table>

<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a>

@endsection