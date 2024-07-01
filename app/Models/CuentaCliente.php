<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaCliente extends Model
{
    use HasFactory;

    protected $table = 'cuenta_clientes';

    protected $primaryKey='idCuentaCliente';

    protected $fillable = ['nombre', 'dni'];

    protected static function booted()
    {
        static::deleting(function ($cuentaCliente) {
            $cuentaCliente->cuentas()->each(function ($cuenta) {
                $cuenta->delete();
            });
        });
    }
    
    //1 a N :: CuentaCliente a Cuenta
    public function cuentas()
    {
        return $this->hasMany(Cuenta::class);
    }
}
