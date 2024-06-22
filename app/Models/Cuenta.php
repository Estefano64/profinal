<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    protected $primaryKey='idCuenta';

    protected $fillable = ['totalPagar', 'idCuentaCliente', 'idMetodoPago', 'estado'];

    public function cuentaCliente()
    {
        return $this->belongsTo(CuentaCliente::class, 'idCuentaCliente');
    }

    public function metodoPago()
    {
        return $this->belongsTo(MetodoPago::class, 'idMetodoPago');
    }
}
