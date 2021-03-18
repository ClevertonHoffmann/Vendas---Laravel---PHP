@extends('base')

@section('menuendindx')
<br>
<h2 style="text-align:center">Listagem de todos os Enderecos</h2>

<br>
<table class="table table-bordered">
    <tbody>
        <tr>
            <th id="th1">Excluir</th>
            <p>
                <th id="th2">Alterar</th>
            <p>
                <th id="th3">Cep</th>
            <p>
                <th id="th4">Bairro</th>
            <p>
                <th id="th5">Rua</th>
            <p>
                <th id="th6">Cidade</th>
            <p>
        </tr>


@foreach($enderecos as $endereco)
    <tr id=linha'{{ $endereco->cep}}'>
                    <td id="td1">
                        <form action="{{ $endereco->cep}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" style="background-color:#ff0000" href="#" onclick="this.parentNode.submit();" style="color:black">Excluir</button>
                        </form>
                    </td>
                    <td id="td2">
                        <form action="{{ $endereco->cep}}/edit" method="post">
                            @csrf
                            @method('GET')
                            <button type="button" style="background-color:#6666ff" href="#" onclick="this.parentNode.submit();" style="color:black">Alterar</button>
                        </form>
                    </td>
                    <td id="td3">{{ $endereco->cep }}</td>
                    <p>
                        <td id="td4">{{ $endereco->bairro }}</td>
                    <p>
                        <td id="td5">{{ $endereco->rua }}</td>
                    <p>
                        <td id="td6">{{ $endereco->cidade }}</td>
                    <p>
                </tr>
                @endforeach            
    </tbody>
</table>
<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a>
@endsection
