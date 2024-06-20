<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaCliente extends Model
{
    use HasFactory;

    protected $table = 'cuenta_clientes';

    protected $primarykey='idCuentaCliente';

    protected $fillable = ['nombre', 'dni'];
}
