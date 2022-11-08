<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutoModel;


class ProdutoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searchnome = request('txProdutoConsulta');
        $searchvalori = request('txProdutoValorI');
        $searchvalorf = request('txProdutoValorF');

        if($searchnome) {
            $produto = ProdutoModel::where([['produto', 'like', '%'.$searchnome.'%']])->get();
        }
        else if($searchvalori && $searchvalorf){
            $produto = ProdutoModel::where('valor','>',$searchvalori)->get();
            $produto = ProdutoModel::where('valor','<',$searchvalorf)->get();
        }
        else{
            $produto = ProdutoModel::all();
         }
        return view('produto',['produto' => $produto, 'txProdutoConsulta' => $searchnome, 
        'txProdutoValorI' => $searchvalori, 'txProdutoValorF' => $searchvalorf,]);
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
        $produto = new ProdutoModel();
        $produto -> produto = $request->txProduto;
        $produto -> idCategoria = $request->txIdCategoria;
        $produto -> valor = $request->txValor;
        $produto -> save();
        return redirect("/produto");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }
    public function edit($id)
    {
        $produto = ProdutoModel::find($id);
        $title = "Editar Produto - {$produto->produto}, {$produto->idCategoria}, {$produto->valor} ";
        return view('produtoEditar', compact('title', 'produto'));
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
        $produto = ProdutoModel::find($id);
        $produto->update(['produto'=>$request->txProduto]);
        $produto->update(['idCategoria'=>$request->txIdCategoria]);
        $produto->update(['valor'=>$request->txValor]);
        return redirect("/produto");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProdutoModel::where('idProduto',$id)->delete();
        return redirect("/produto");
    }
}
