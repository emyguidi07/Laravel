<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = "tbProduto";
    protected $fillable = ['idProduto','produto','idCategoria','valor'];
    public $timestamps = false;
}
