<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function products()
{
    return $this->hasMany(products::class, 'product_category_id');
}
}
