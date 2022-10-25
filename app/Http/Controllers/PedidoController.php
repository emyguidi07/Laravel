<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PedidoModel;


class PedidoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedido = PedidoModel::all();
        return view('pedido',compact('pedido'));
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
        $pedido = new PedidoModel();
        $pedido -> idCategoria = $request->txIdcategoria;
        $pedido -> idProduto = $request->txIdproduto;
        $pedido -> idCliente = $request->txIdcliente;
        $pedido -> data_entrega = $request->txDatae;
        $pedido -> data_saida = $request->txDatas;
        $pedido -> qtd_produto = $request->txQtd;
        $pedido -> valortotal = $request->txValor;
        $pedido -> save();
        return redirect("/pedido");
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
        $pedido = PedidoModel::find($id);
        $title = "Editar Pedido - {$pedido->idProduto}, {$pedido->idCategoria}, {$pedido->idCliente}, {$pedido->data_entrega}, {$pedido->data_saída}, {$pedido->qtd_produto}, {$pedido->valortotal}";
        return view('pedidoEditar', compact('title', 'pedido'));
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
        $pedido = PedidoModel::find($id);
        $pedido->update(['idCategoria'=>$request->txIdcategoria]);
        $pedido->update(['idCliente'=>$request->txIdcliente]);
        $pedido->update(['idProduto'=>$request->txIdproduto]);
        $pedido->update(['data_entrega'=>$request->txDatae]);
        $pedido->update(['data_saida'=>$request->txDatas]);
        $pedido->update(['qtd_produto'=>$request->txQtd]);
        $pedido->update(['valortotal'=>$request->txValor]);
        return redirect("/pedido");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PedidoModel::where('idPedido',$id)->delete();
        return redirect("/pedido");
    }
}
