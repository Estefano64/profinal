<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoPlatillo extends Model
{
    use HasFactory;

    protected $table = 'pedido_platillos';

    protected $primarykey='idPedidoPlatillo';

    protected $fillable = ['idPedido', 'idPlatillo', 'cantidad'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'idPedido');
    }

    /**
     * Get the platillo associated with the pedido platillo.
     */
    public function platillo()
    {
        return $this->belongsTo(Platillo::class, 'idPlatillo');
    }

}
