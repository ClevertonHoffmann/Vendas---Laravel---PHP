<?php

namespace App\Http\Controllers;
use App\Http\Clientes;
use App\Http\Enderecos;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        $enderecos = Enderecos::all();
        return view('Clientes/clientesindex', ['clientes' => $clientes],  ['enderecos' => $enderecos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Clientes/clientescreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request['cod']) && isset($request['nome']) && isset($request['cpf']) && isset($request['telefone']) && isset($request['enderecos_cep']) &&
            $request['cod'] !== null && $request['nome'] !== null && $request['cpf'] !== null && $request['telefone'] !== null && $request['enderecos_cep'] !== null) {
            $bResult = Clientes::find($request['cod']);
            if ($bResult == null) {
                $input = $request->all();
                Clientes::create($input);
                return "Salvo com sucesso!<br><br>
                        <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
                        <a href='http://localhost:8000/Clientes/clientes/create'>Voltar a tela anterior</a>";
            } else {
                return "Verifique valores inseridos cod não pode ser igual!
                    <a href='http://localhost:8000/Clientes/clientes/create'>Voltar a tela anterior</a>";
            }
        } else {
            return "Volte a tela anterior e informe todos os valores!
                <a href='http://localhost:8000/Clientes/clientes/create'>Voltar a tela anterior</a>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cod
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        if ($id == 'busca') {
            $id = $request['cod'];
            $clientes = Clientes::find($id);
            $enderecos = Enderecos::all();
        }
        if ($id == 0) {
            $clientes = Clientes::all();
            $enderecos = Enderecos::all();
        }

        return view('Clientes/clientesshow', ['clientes' => $clientes],  ['enderecos' => $enderecos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cod
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Clientes::where('cod', $id)->first();
        return view('Clientes/clientesedit', ['clientes' => $clientes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Clientes::find($id)->update($request->all());
        return "Cliente cod=" . $request['cod'] . " alterado com sucesso <br><br>
        <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
        <a href='http://localhost:8000/Clientes/clientes/" . $id . "/edit'>Voltar a tela anterior</a>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = Clientes::destroy($id);
        if ($clientes) {
            return "Item " . $id . " excluído com sucesso!<br><br>
            <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
            <a href='http://localhost:8000/Clientes/clientes/'>Voltar a tela anterior</a>";
        }
    }
}
