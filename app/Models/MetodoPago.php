<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    use HasFactory;

    protected $table = 'metodo_pagos';

    protected $primaryKey='idMetodoPago';

    protected $fillable = ['nombreMetodo'];

    //1 a N :: MetodoPago a Pedido
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
};
