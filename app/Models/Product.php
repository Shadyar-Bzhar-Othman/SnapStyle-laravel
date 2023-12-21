<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategories()
    {
        return $this->belongsTo(SubCategory::class, "category_id");
    }

    public function productsize()
    {
        return $this->hasMany(ProductSize::class);
    }
}