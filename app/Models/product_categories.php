<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_categories extends Model
{
    protected $fillable = [
        'name',
    ];


    public function products()
    {
        return $this->hasMany(products::class, 'product_category_id');
    }
}
