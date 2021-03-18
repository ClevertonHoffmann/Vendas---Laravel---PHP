<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EnderecosController;
use App\Http\Controllers\ItensVendasController;
use App\Http\Controllers\VendasController;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('menu');
});

//-----------------------------------------
//-------------------Carros----------------
Route::get('/carros/busca', function () {
    return view('carrosshow');
});

Route::get('/carros', function () {
    return view('Carros/menucarros');
});

Route::resource('Carros/carros', CarrosController::class);
//------------------Carros-----------------
//-----------------------------------------

//-------------------------------------------
//-------------------Clientes----------------
Route::get('/clientes/busca', function () {
    return view('clientesshow');
});

Route::get('/clientes', function () {
    return view('Clientes/menuclientes');
});

Route::resource('Clientes/clientes', ClientesController::class);
//------------------Clientes-----------------
//-------------------------------------------

//-------------------Enderecos----------------
Route::get('/enderecos/busca', function () {
    return view('enderecosshow');
});

Route::get('/enderecos', function () {
    return view('Enderecos/menuenderecos');
});

Route::resource('Enderecos/enderecos', EnderecosController::class);
//------------------Enderecos-----------------

//-------------------ItensVendas----------------
Route::get('/itensvendas/busca', function () {
    return view('itensvendasshow');
});

Route::get('/itensvendas', function () {
    return view('ItensVendas/menuitensvendas');
});

Route::resource('ItensVendas/itensvendas', ItensVendasController::class);
//------------------ItensVendas-----------------

//-------------------Vendedores----------------
Route::get('/vendedores/busca', function () {
    return view('vendedoresshow');
});

Route::get('/vendedores', function () {
    return view('Vendedores/menuvendedores');
});

Route::resource('Vendedores/vendedores', VendedoresController::class);
//-------------------Vendedores-----------------