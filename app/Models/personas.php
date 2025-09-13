<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
 use HasFactory;
  public function documento(){
     return $this->belongsTo(documento::class);
    }

      public function proveedore(){
     return $this->hasOne(proveedore::class);
    }
      public function cliente(){
     return $this->hasOne(cliente::class);
    }
}   
