<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'name',
        'description',
        'condition',
        'merchant_id',
        'product_category_id',
    ];

    public function category()
    {
        return $this->belongsTo(product_categories::class, 'product_category_id');
    }

    public function images()
    {
        return $this->hasMany(product_images::class, 'product_id');
    }

    public function variants()
    {
        return $this->hasMany(product_variants::class, 'product_id');
    }
}
