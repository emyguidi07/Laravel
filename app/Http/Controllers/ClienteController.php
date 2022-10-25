<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClienteModel;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = ClienteModel::all();
        return view('cliente',compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new ClienteModel();
        $cliente -> nome = $request->txNome;
        $cliente -> dataNasc = $request->txData;
        $cliente -> genero = $request->txGen;
        $cliente -> estadoCivil = $request->txEst;
        $cliente -> endereco = $request->txEnd;
        $cliente -> numero = $request->txNum;
        $cliente -> complemento = $request->txCom;
        $cliente -> cep = $request->txCEP;
        $cliente -> bairro = $request->txBai;
        $cliente -> cidade = $request->txCid;
        $cliente -> cpf = $request->txCPF;
        $cliente -> rg = $request->txRG;
        $cliente -> telefone = $request->txTel;
        $cliente -> celular = $request->txCel;
        $cliente -> email = $request->txEmail;
        $cliente -> save();
        return redirect("/cliente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = ClienteModel::find($id);
        $title = "Editar Cliente - {$cliente->nome}, {$cliente->dataNasc}, {$cliente->genero}, {$cliente->estadoCivil}, 
        {$cliente->endereco}, {$cliente->numero}, {$cliente->complemento}, {$cliente->cep}, {$cliente->bairro}, 
        {$cliente->cidade}, {$cliente->cpf}, {$cliente->rg}, {$cliente->telefone}, {$cliente->celular}, {$cliente->email},";
        return view('clienteEditar', compact('title', 'cliente'));
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
        $cliente = ClienteModel::find($id);

        $cliente->update(['nome'=>$request->txNome]);
        $cliente->update(['dataNasc'=>$request->txData]);
        $cliente->update(['genero'=>$request->txGen]);
        $cliente->update(['estadoCivil'=>$request->txEst]);
        $cliente->update(['endereco'=>$request->txEnd]);
        $cliente->update(['numero'=>$request->txNum]);
        $cliente->update(['complemento'=>$request->txCom]);
        $cliente->update(['cep'=>$request->txCEP]);
        $cliente->update(['bairro'=>$request->txBai]);
        $cliente->update(['cidade'=>$request->txCid]);
        $cliente->update(['cpf'=>$request->txCPF]);
        $cliente->update(['rg'=>$request->txRG]);
        $cliente->update(['telefone'=>$request->txTel]);
        $cliente->update(['celular'=>$request->txCel]);
        $cliente->update(['email'=>$request->txEmail]);
        return redirect("/cliente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClienteModel::where('idCliente',$id)->delete();
        return redirect("/cliente");
    }
}
