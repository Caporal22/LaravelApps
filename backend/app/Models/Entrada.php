<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    // protected $table = "entradas";
    // protected $primaryKey = 'id';
    protected $fillable = ["titulo", "tag", "contenido", "user_id" ];

    public function comentarios() {
        return $this->hasMany(Comentario::class);
    }

    public function usuario() {
        return $this->belongsTo(User::class, 'user_id'); 
    } 
}
