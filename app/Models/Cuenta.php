<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCuenta';

    protected $fillable = ['idCuentaCliente', 'idMetodoPago', 'estado', 'subtotal', 'impuesto', 'total'];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($cuenta) {
            $cuenta->calculateTotals();
        });

        static::updating(function ($cuenta) {
            $cuenta->calculateTotals();
        });
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'idCuenta');
    }

    public function calculateTotals()
    {
        $subtotal = $this->pedidos()->with('platillos')->get()->sum(function ($pedido) {
            return $pedido->platillos->sum(function ($platillo) {
                return $platillo->pivot->total;
            });
        });

        $this->subtotal = $subtotal;
        $this->impuesto = $subtotal * 0.18; // Calcula el impuesto como el 18% del subtotal
        $this->total = $subtotal + $this->impuesto; // Calcula el total como subtotal + impuesto
    }
}
