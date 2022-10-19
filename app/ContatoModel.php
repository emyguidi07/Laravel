<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContatoModel extends Model
{
    protected $table = "tbContato";
    protected $fillable = ['idContato','nome','email','fone','assunto','mensagem'];
    public $timestamps = false;
    protected $primaryKey = 'idContato';
}
