<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    public function images() {
        return $this->hasMany(Products::class);
    }
    
    use HasFactory;
}
