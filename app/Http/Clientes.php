<?php

namespace App\http;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $primaryKey = 'cod';
    public $incrementing = false;
    protected $fillable = ['cod','nome','cpf','telefone','enderecos_cep'];
}
