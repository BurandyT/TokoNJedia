<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_variants extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'name',
        'price',
        'stock',
    ];

    public function product()
    {
        return $this->belongsTo(products::class, 'product_id');
    }

}
