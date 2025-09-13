<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
     public function compras(){
     return $this->belongsToMany(compra::class)->withTimestamps()
     ->withpivot('cantidad','precio_compra','precio_venta');
    }
}
