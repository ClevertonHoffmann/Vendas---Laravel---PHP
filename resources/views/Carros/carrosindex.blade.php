@extends('base')

@section('menucarindx')
<br>
<h2 style="text-align:center">Listagem de todos os Carros</h2>

<br>
<table class="table table-bordered">
    <tbody>
        <tr>
            <th id="th1">Excluir</th>
            <p>
                <th id="th2">Alterar</th>
            <p>
                <th id="th3">Cod</th>
            <p>
                <th id="th4">Nome</th>
            <p>
                <th id="th5">Cor</th>
            <p>
                <th id="th6">Ano</th>
            <p>
            <p>
                <th id="th6">Valor</th>
            <p>
        </tr>


@foreach($carros as $carro)
    <tr id=linha'{{ $carro->cod}}'>
                    <td id="td1">
                        <form action="{{ $carro->cod}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" style="background-color:#ff0000" href="#" onclick="this.parentNode.submit();" style="color:black">Excluir</button>
                        </form>
                    </td>
                    <td id="td2">
                        <form action="{{ $carro->cod}}/edit" method="post">
                            @csrf
                            @method('GET')
                            <button type="button" style="background-color:#6666ff" href="#" onclick="this.parentNode.submit();" style="color:black">Alterar</button>
                        </form>
                    </td>
                    <td id="td3">{{ $carro->cod }}</td>
                    <p>
                        <td id="td4">{{ $carro->nome }}</td>
                    <p>
                        <td id="td5">{{ $carro->cor }}</td>
                    <p>
                        <td id="td6">{{ $carro->ano }}</td>
                    <p>
                    <p>
                        <td id="td6">{{ $carro->valor }}</td>
                    <p>
                </tr>
                @endforeach            
    </tbody>
</table>
<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a>
@endsection
