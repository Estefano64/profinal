<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $primaryKey = 'idFactura';

    protected $fillable = ['idCuenta'];

    /**
     * Get the cuenta associated with the factura.
     */
    public function cuenta()
    {
        return $this->belongsTo(Cuenta::class, 'idCuenta');
    }
}
