<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Definir los campos que son asignables
    protected $fillable = ['nombre', 'tipo', 'precio', 'stock'];

    // Cálculo del valor total de inventario
    public function valorTotal()
    {
        return $this->precio * $this->stock;
    }
}
