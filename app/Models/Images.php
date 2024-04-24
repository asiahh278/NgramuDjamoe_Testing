<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    public function Products() {
        return $this->belongsTo(Products::class);
    }
    
    protected $fillable = [
        'gallery_product'
    ];

    use HasFactory;
}
