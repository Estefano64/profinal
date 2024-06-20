<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    use HasFactory;

    protected $primarykey='idPlatillo';

    protected $fillable = ['nombre', 'descripcion', 'precio'];
}
