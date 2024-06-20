<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $primarykey='idPedido';

    protected $fillable = ['estado', 'tipo', 'idMesa', 'idCuentaCliente'];

    public function mesa()
    {
        return $this->belongsTo(Mesa::class, 'idMesa');
    }

    public function cuentaCliente()
    {
        return $this->belongsTo(CuentaCliente::class, 'idCuentaCliente');
    }

    public function platillos()
    {
        return $this->belongsToMany(Platillo::class, 'pedido_platillo', 'idPedido', 'idPlatillo')
                    ->withPivot('cantidad');
    }
}
