<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;


    #esta es la variable que hace referecía a una tabla
    protected $table='comments';

    #esta es la variable que indica la llave primaría
    protected $primaryKey = 'id';

    #hace referencia a created_at y updated_at
    public $timestamps = true;

    #especificacion de la columnas dentro de la tabla
    protected $fillable = [
        'content','post_id'
    ];

    #oculta columnas del modelo
    protected $hidden = ['created_at','updated_at'];

    public function posts(){

        return $this->belongsTo(Posts::class);

}
}
