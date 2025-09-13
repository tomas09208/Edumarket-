<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class compras extends Model
{
     use HasFactory;
      
      public function proveedore (){
     return $this->belongsTo(proveedore::class);
    } 

    public function comprobante(){
     return $this->belongsTo(comprobante::class);
    } 
     public function productos(){
     return $this->belongsToMany(produto::class)->withTimestamps()->withpivot('cantidad','precio_compra','precio_venta');
    }
}
