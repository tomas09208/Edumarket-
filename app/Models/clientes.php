<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
   use hasFactory;

     public function persona(){
     return $this->belongsTo(persona::class);
    }
}  
