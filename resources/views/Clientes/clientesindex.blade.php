@extends('base')

@section('menucliindx')
<br>
<h2 style="text-align:center">Listagem de todos os Clientes</h2>

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
                <th id="th5">CPF</th>
            <p>
                <th id="th6">Telefone</th>
            <p>
            <p>
                <th id="th6">Enderecos</th>
            <p>
        </tr>


@foreach($clientes as $cliente)
    <tr id=linha'{{ $cliente->cod}}'>
                    <td id="td1">
                        <form action="{{ $cliente->cod}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" style="background-color:#ff0000" href="#" onclick="this.parentNode.submit();" style="color:black">Excluir</button>
                        </form>
                    </td>
                    <td id="td2">
                        <form action="{{ $cliente->cod}}/edit" method="post">
                            @csrf
                            @method('GET')
                            <button type="button" style="background-color:#6666ff" href="#" onclick="this.parentNode.submit();" style="color:black">Alterar</button>
                        </form>
                    </td>
                    <td id="td3">{{ $cliente->cod }}</td>
                    <p>
                        <td id="td4">{{ $cliente->nome }}</td>
                    <p>
                        <td id="td5">{{ $cliente->cpf }}</td>
                    <p>
                        <td id="td6">{{ $cliente->telefone }}</td>
                    <p>
                    @foreach($enderecos as $endereco)
                        @if($endereco->cep==$cliente->enderecos_cep)
                            <p>
                                <td id="td6">{{ $cliente->enderecos_cep }}-{{$endereco->bairro}}-{{$endereco->rua}}-{{$endereco->cidade}}</td>
                            <p>
                        @endif
                    @endforeach  
                </tr>
                @endforeach            
    </tbody>
</table>
<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a>
@endsection
