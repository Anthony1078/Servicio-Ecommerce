<?php

use App\Models\Pedido;
use App\Models\Producto;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Route::get('/consultaApi', 'ModuloConsultaApi\ProductosController@index')->name('productos.index');

Route::get('/consultaApi',function () {
    $productos= Producto::all();
    return $productos;
});

Route::get('/consultaApi/producto/{id}',function ($id) {
    $productos= Producto::select('idproducto','categoriaid','codigo','nombre')->find($id);
    return $productos;
});

Route::get('/consultaApi/productoxcategoria/{id}',function ($id) {
    $productos= Producto::select('codigo','nombre')->where('categoriaid',$id)->get();
    return $productos;
});

Route::get('/consultaApi/pedido/{id}',function ($id) {
    $productos= Pedido::select('idpedido','fecha','monto','costo_envio','direccion_envio','status')->find($id);
    return $productos;
});
