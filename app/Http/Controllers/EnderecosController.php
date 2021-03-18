<?php

namespace App\Http\Controllers;

use App\Http\Enderecos;
use Illuminate\Http\Request;

class EnderecosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enderecos = Enderecos::all();
        return view('Enderecos/enderecosindex', ['enderecos' => $enderecos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Enderecos/enderecoscreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request['cep']) && isset($request['bairro']) && isset($request['rua']) && isset($request['cidade']) &&
            $request['cep'] !== null && $request['bairro'] !== null && $request['rua'] !== null && $request['cidade'] !== null) {
            $bResult = Enderecos::find($request['cep']);
            if ($bResult == null) {
                $input = $request->all();
                Enderecos::create($input);
                return "Salvo com sucesso!<br><br>
                        <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
                        <a href='http://localhost:8000/Enderecos/enderecos/create'>Voltar a tela anterior</a>";
            } else {
                return "Verifique valores inseridos CEP não pode ser igual!
                    <a href='http://localhost:8000/Enderecos/enderecos/create'>Voltar a tela anterior</a>";
            }
        } else {
            return "Volte a tela anterior e informe todos os valores!
                <a href='http://localhost:8000/Enderecos/enderecos/create'>Voltar a tela anterior</a>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cep
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        if ($id == 'busca') {
            $id = $request['cep'];
            $enderecos = Enderecos::find($id);
        }
        if ($id == 0) {
            $enderecos = Enderecos::all();
        }

        return view('Enderecos/enderecosshow', ['enderecos' => $enderecos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cep
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enderecos = Enderecos::where('cep', $id)->first();
        return view('Enderecos/enderecosedit', ['enderecos' => $enderecos]);
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
        Enderecos::find($id)->update($request->all());
        return "Endereco cep=" . $request['cep'] . " alterado com sucesso <br><br>
        <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
        <a href='http://localhost:8000/Enderecos/enderecos/" . $id . "/edit'>Voltar a tela anterior</a>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enderecos = Enderecos::destroy($id);
        if ($enderecos) {
            return "Item " . $id . " excluído com sucesso!<br><br>
            <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
            <a href='http://localhost:8000/Enderecos/enderecos/'>Voltar a tela anterior</a>";
        }
    }
}
