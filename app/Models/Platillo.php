<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    use HasFactory;

    protected $primaryKey='idPlatillo';

    protected $fillable = ['nombre', 'descripcion', 'precio'];

    public function pedidoPlatillos()
    {
        return $this->hasMany(PedidoPlatillo::class, 'idPlatillo', 'idPlatillo');
    }
}
