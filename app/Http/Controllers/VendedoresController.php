<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Vendedores;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = Vendedores::all();
        return view('Vendedores/vendedoresindex',['vendedores'=>$vendedores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Vendedores/vendedorescreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request['cod']) && isset($request['nome']) && isset($request['cpf']) &&
            $request['cod']!==null && $request['nome']!==null && $request['cpf']!==null) {
            
            $input = $request->all();
            $bResult = Vendedores::find($request['cod']);
            if($bResult==null){
                $input = $request->all();
                Vendedores::create($input); 
                return "Salvo com sucesso!<br><br>
                        <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
                        <a href='http://localhost:8000/Vendedores/vendedores/create'>Voltar a tela anterior</a>";
            }else {
                return "Verifique valores inseridos cod não pode ser igual!
                    <a href='http://localhost:8000/Vendedores/vendedores/create'>Voltar a tela anterior</a>";
            }    
        } else {
            return "Volte a tela anterior e informe todos os valores!
                <a href='http://localhost:8000/Vendedores/vendedores/create'>Voltar a tela anterior</a>";
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
        if($id=='busca'){
            $id = $request['cod'];
            $vendedores = Vendedores::find($id);
        }
        if($id==0){
            $vendedores = Vendedores::all();
        }
        
        return view('Vendedores/vendedoresshow',['vendedores'=>$vendedores]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cod
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendedores = Vendedores::where('cod', $id)->first();
        return view('Vendedores/vendedoresedit',['vendedores'=>$vendedores]);
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
        Vendedores::find($id)->update($request->all());
        return "Vendedor cod=".$request['cod'] . " alterado com sucesso <br><br>
        <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
        <a href='http://localhost:8000/Vendedores/vendedores/".$id."/edit'>Voltar a tela anterior</a>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendedores = Vendedores::destroy($id);
        if($vendedores){
            return "Item " . $id . " excluído com sucesso!<br><br>
            <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
            <a href='http://localhost:8000/Vendedores/vendedores/'>Voltar a tela anterior</a>";
        }
    }
}
