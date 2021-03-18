<?php

namespace App\http;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    protected $primaryKey = 'cod';
    public $incrementing = false;
    protected $fillable = ['cod','nome','cpf'];
}
