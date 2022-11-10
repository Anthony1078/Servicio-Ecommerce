<?php

namespace App\Http\Controllers\ModuloConsultaApi;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {

        $productos= Producto::all();
        return $productos;

    }
}
