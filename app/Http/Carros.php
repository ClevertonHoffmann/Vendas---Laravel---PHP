<?php

namespace App\http;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carros extends Model
{
   protected $primaryKey = 'cod';
   public $incrementing = false;
   protected $fillable = ['cod','nome','cor','ano','valor'];
}
