<?php

namespace App\Http\Controllers;

use App\Models\product_categories;
use App\Models\product_images;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category()
    {
        return $this->belongsTo(product_categories::class, 'product_category_id');
    }

    public function images()
    {
        return $this->hasMany(product_images::class, 'product_id');
    }
}
