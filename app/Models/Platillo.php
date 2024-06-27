<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    use HasFactory;

    protected $primaryKey='idPlatillo';

    protected $fillable = ['nombre', 'descripcion', 'precio'];

    //1 a N :: Platillo a PedidoPlatillo
    public function pedidoPlatillos()
    {
        return $this->hasMany(PedidoPlatillo::class);
    }
}
