<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    protected $table = 'Products';
    protected $casts = [
        'price' => 'double',
    ];
    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
}
