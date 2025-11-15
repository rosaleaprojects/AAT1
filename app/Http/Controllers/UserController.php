<?php

namespace App\Http\Controllers;




use App\Models\Producto;

class UserController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('user', compact('productos'));
    }
}
