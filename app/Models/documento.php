<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    use HasFactory;

    public function persona(){
        return $this-> hasOne(persona::class);
    }
}
