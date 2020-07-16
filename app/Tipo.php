<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public function productos()   //que una categoria tiene muchos productos
    {
        return $this->hasMany(Producto::class);
    }
}
