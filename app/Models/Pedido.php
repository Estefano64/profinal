<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $primaryKey='idPedido'; // Define la clave primaria como 'idPedido'

    protected $fillable = ['estado', 'tipo', 'idMesa', 'user_id', 'idCuenta', 'idPedidoPlatillo'];
    // Define los campos que se pueden asignar masivamente ('fillable')

    public function mesa()
    {
        return $this->belongsTo(Mesa::class, 'idMesa'); // Define la relación con Mesa (pertenece a una Mesa)
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id'); // Define la relación con User (pertenece a un Usuario)
    }

    public function cuenta()
    {
        return $this->belongsTo(Cuenta::class, 'idCuenta'); // Define la relación con Cuenta (pertenece a una Cuenta)
    }

    public function pedidoplatillo()
    {
        return $this->belongsTo(PedidoPlatillo::class, 'idPedidoPlatillo'); // Define la relación con PedidoPlatillo (pertenece a un PedidoPlatillo)
    }
}
