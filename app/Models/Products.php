<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function images() {
        return $this->hasMany(Images::class);
    }
    
    protected $table = 'product';

    protected $fillable = [
        'product_name',
        'category',
        'price',
        'quantity',
        'ingredients',
        'description'
    ];
    
    use HasFactory;
}
