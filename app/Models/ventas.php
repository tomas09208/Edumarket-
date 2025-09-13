<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;

  public function cliente (){
     return $this->belongsTo(cliente::class);
    } 
  
     public function user(){
     return $this->belongsTo(user::class);
    }
     public function comprobante (){
     return $this->belongsTo(comprobante ::class);
    }
}
