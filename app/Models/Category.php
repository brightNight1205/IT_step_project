<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_category',
    ];

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class);
    }
}
