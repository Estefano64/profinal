<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoPlatillo extends Model
{
    use HasFactory;

    protected $table = 'pedido_platillos';

    protected $primaryKey='idPedidoPlatillo';

    protected $fillable = ['idPlatillo', 'cantidad','nota','total'];

    protected static function booted()
    {
        static::creating(function ($pedidoPlatillo) {
            $platillo = Platillo::find($pedidoPlatillo->idPlatillo);
            $pedidoPlatillo->total = $platillo->precio * $pedidoPlatillo->cantidad;
        });

        static::updating(function ($pedidoPlatillo) {
            $platillo = Platillo::find($pedidoPlatillo->idPlatillo);
            $pedidoPlatillo->total = $platillo->precio * $pedidoPlatillo->cantidad;
        });
    }

    /**
     * Get the platillo associated with the pedido platillo.
     */
    public function platillo()
    {
        return $this->belongsTo(Platillo::class, 'idPlatillo');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'idPedido');
    }

}