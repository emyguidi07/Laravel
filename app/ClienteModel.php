<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = "tbCliente";
    protected $fillable = ['idCliente', 'nome','dataNasc' , 'genero' ,'estadoCivil','endereco','numero' ,'complemento','cep' ,'bairro' , 'cidade' ,'cpf' ,'rg ', 'telefone ','celular' ,'email'];
    public $timestamps = false;
}
