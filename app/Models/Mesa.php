<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    protected $primaryKey='idMesa';

    protected $fillable = ['numero', 'capacidad', 'estado'];

    protected static function booted()
    {
        static::deleting(function ($mesa) {
            $mesa->pedidos()->each(function ($pedido) {
                $pedido->delete();
            });
        });
    }
    
    //1 a N :: Mesa a Pedido
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
