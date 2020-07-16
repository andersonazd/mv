<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['name', 'avatar', 'slug', 'comentario' ];

    /**
 * Get the route key for the model.
 *
 * @return string
 */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function categoria()   //que un producto pertenece a una categoria
    {
        return $this->belongsTo(Categoria::class);
    }

    public function tipo()   //que un producto pertenece a una categoria
    {
        return $this->belongsTo(Tipo::class);
    }
    public function clima()   //que un producto pertenece a una categoria
    {
        return $this->belongsTo(Clima::class);
    }
}
