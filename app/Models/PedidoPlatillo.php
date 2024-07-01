<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoPlatillo extends Model
{
    use HasFactory;

    protected $table = 'pedido_platillos'; // Define el nombre de la tabla como 'pedido_platillos'

    protected $primaryKey='idPedidoPlatillo'; // Define la clave primaria como 'idPedidoPlatillo'

    protected $fillable = ['idPlatillo', 'cantidad','nota','total'];
    // Define los campos que se pueden asignar masivamente ('fillable')

    protected static function booted()
    {
        static::creating(function ($pedidoPlatillo) {
            $platillo = Platillo::find($pedidoPlatillo->idPlatillo);
            $pedidoPlatillo->total = $platillo->precio * $pedidoPlatillo->cantidad;
            // Calcula y asigna el total multiplicando el precio del platillo por la cantidad
        });

        static::updating(function ($pedidoPlatillo) {
            $platillo = Platillo::find($pedidoPlatillo->idPlatillo);
            $pedidoPlatillo->total = $platillo->precio * $pedidoPlatillo->cantidad;
            // Recalcula y actualiza el total al actualizar el pedido platillo
        });
    }

    public function platillo()
    {
        return $this->belongsTo(Platillo::class, 'idPlatillo');
        // Define la relación con Platillo (pertenece a un Platillo)
    }

    public function pedido()
    {
        return $this->hasOne(Pedido::class, 'idPedido');
        // Define la relación con Pedido (tiene un Pedido asociado)
    }
}
