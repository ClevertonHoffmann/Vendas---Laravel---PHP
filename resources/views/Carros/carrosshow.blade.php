@extends('base')

@section('carrosshow')

<body style="margin: 20px">
    <form method='post' action="/Carros/carros/busca">
        @csrf
        @method('GET')
        <h2 style="text-align:center">Busca item em específico por código</h2>
        <br><br>
        <div class="row">
            <div id="cod" class="col-lg-2">
                <legend> cod</legend>
                <input name="cod" type="text" id="cod" placeholder="COD...">
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
                <th id="th3">COR</th>
            <p>
                <th id="th4">ANO</th>
            <p>
            <p>
                <th id="th5">VALOR</th>
            <p>
        </tr>
        @if(isset($carros->cod))
                @if(isset($carros))
                    <tr id="linha{{ $carros->cod }}">
                            <td id="td1">{{ $carros->cod }}</td>
                        <p>
                            <td id="td2">{{ $carros->nome }}</td>
                        <p>
                            <td id="td3">{{ $carros->cor }}</td>
                        <p>
                            <td id="td4">{{ $carros->ano }}</td>
                        <p>
                        <p>
                            <td id="td5">{{ $carros->valor }}</td>
                        <p>
                    </tr>
                @endif
        @else
                @if(isset($carros))
                @foreach($carros as $carro)
                    <tr id="linha{{ $carro->cod }}">
                            <td id="td1">{{ $carro->cod }}</td>
                        <p>
                            <td id="td2">{{ $carro->nome }}</td>
                        <p>
                            <td id="td3">{{ $carro->cor }}</td>
                        <p>
                            <td id="td4">{{ $carro->ano }}</td>
                        <p>
                        <p>
                            <td id="td5">{{ $carro->valor }}</td>
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