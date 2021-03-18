<?php

namespace App\http;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    protected $primaryKey = 'cep';
    public $incrementing = false;
    protected $fillable = ['cep','bairro','rua','cidade'];

}
