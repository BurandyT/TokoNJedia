<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function product()
    {
        return $this->belongsTo(products::class, 'product_id');
    }
}
