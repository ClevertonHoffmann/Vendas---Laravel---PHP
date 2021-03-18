@extends('base')

@section('menuvenindx')
<br>
<h2 style="text-align:center">Listagem de todos os Vendedores</h2>

<br>
<table class="table table-bordered">
    <tbody>
        <tr>
            <th id="th1">Excluir</th>
            <p>
                <th id="th2">Alterar</th>
            <p>
                <th id="th3">COD</th>
            <p>
                <th id="th4">NOME</th>
            <p>
                <th id="th5">CPF</th>
        </tr>


@foreach($vendedores as $endereco)
    <tr id=linha'{{ $endereco->cod}}'>
                    <td id="td1">
                        <form action="{{ $endereco->cod}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" style="background-color:#ff0000" href="#" onclick="this.parentNode.submit();" style="color:black">Excluir</button>
                        </form>
                    </td>
                    <td id="td2">
                        <form action="{{ $endereco->cod}}/edit" method="post">
                            @csrf
                            @method('GET')
                            <button type="button" style="background-color:#6666ff" href="#" onclick="this.parentNode.submit();" style="color:black">Alterar</button>
                        </form>
                    </td>
                    <td id="td3">{{ $endereco->cod }}</td>
                    <p>
                        <td id="td4">{{ $endereco->nome }}</td>
                    <p>
                        <td id="td5">{{ $endereco->cpf }}</td>
                </tr>
                @endforeach            
    </tbody>
</table>
<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a>
@endsection
