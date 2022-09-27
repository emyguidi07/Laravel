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
        //
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
        //
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
