<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCuenta';

    protected $fillable = ['idCuentaCliente', 'idMetodoPago', 'estado', 'subtotal', 'impuesto', 'total'];

    protected static function booted()
    {
        static::deleting(function ($cuenta) {
            $cuenta->pedidos()->each(function ($pedido) {
                $pedido->delete();
            });
        });
    }
    
    public function cliente()
    {
        return $this->belongsTo(CuentaCliente::class, 'idCuentaCliente');
    }

    /**
     * Define la relación con el método de pago de la cuenta.
     * Una cuenta pertenece a un método de pago.
     */
    public function metodoPago()
    {
        return $this->belongsTo(MetodoPago::class, 'idMetodoPago');
    }

    /**
     * Define la relación con los pedidos asociados a la cuenta.
     * Una cuenta puede tener varios pedidos.
     */
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'idCuenta');
    }
}