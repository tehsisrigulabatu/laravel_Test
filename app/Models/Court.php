<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    //use HasFactory;

    public function type(){
        return $this->belongsTo(Court_Type::class);  
    }
}
