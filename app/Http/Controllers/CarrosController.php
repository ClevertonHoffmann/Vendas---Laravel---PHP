<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Carros;

class CarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carros = Carros::all();
        return view('Carros/carrosindex',['carros'=>$carros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Carros/carroscreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request['cod']) && isset($request['nome']) && isset($request['cor']) && isset($request['ano'])&& isset($request['valor'])&&
            $request['cod']!==null && $request['nome']!==null && $request['cor']!==null && $request['ano']!==null && $request['valor']!==null) {
            
            $input = $request->all();
            $bResult = Carros::find($request['cod']);
            if($bResult==null){
                $input = $request->all();
                Carros::create($input); 
                return "Salvo com sucesso!<br><br>
                        <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
                        <a href='http://localhost:8000/Carros/carros/create'>Voltar a tela anterior</a>";
            }else {
                return "Verifique valores inseridos cod não pode ser igual!
                    <a href='http://localhost:8000/Carros/carros/create'>Voltar a tela anterior</a>";
            }    
        } else {
            return "Volte a tela anterior e informe todos os valores!
                <a href='http://localhost:8000/Carros/carros/create'>Voltar a tela anterior</a>";
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
            $carros = Carros::find($id);
        }
        if($id==0){
            $carros = Carros::all();
        }
        
        return view('Carros/carrosshow',['carros'=>$carros]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cod
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carros = Carros::where('cod', $id)->first();
        return view('Carros/carrosedit',['carros'=>$carros]);
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
        Carros::find($id)->update($request->all());
        return "Carro cod=".$request['cod'] . " alterado com sucesso <br><br>
        <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
        <a href='http://localhost:8000/Carros/carros/".$id."/edit'>Voltar a tela anterior</a>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carros = Carros::destroy($id);
        if($carros){
            return "Item " . $id . " excluído com sucesso!<br><br>
            <a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
            <a href='http://localhost:8000/Carros/carros/'>Voltar a tela anterior</a>";
        }
    }
}

