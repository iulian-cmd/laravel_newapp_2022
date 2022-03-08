<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function getTotalQuantity()
    {
        return $this->hasMany('App\Models\Cart')->sum('quantity');
    }
    
}