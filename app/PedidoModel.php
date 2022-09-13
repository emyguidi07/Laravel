<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    protected $table = "tbPedido";
    protected $fillable = ['idPedido','idCategoria','idCliente','idProduto', 'qtd_produto', 'data_entrega', 'data_saida', 'valortotal'];
    public $timestamps = false;
}
