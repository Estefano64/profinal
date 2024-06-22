<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $primaryKey='idPedido';

    protected $fillable = ['estado', 'tipo', 'idMesa', 'user_id', 'idCuenta', 'idPedidoPlatillo'];

    public function mesa()
    {
        return $this->belongsTo(Mesa::class, 'idMesa');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cuenta()
    {
        return $this->belongsTo(Cuenta::class, 'idCuenta');
    }

    public function platillos()
{
        return $this->belongsToMany(Platillo::class, 'pedido_platillos', 'idPedido', 'idPlatillo')
                    ->withPivot('cantidad','total');
}
}