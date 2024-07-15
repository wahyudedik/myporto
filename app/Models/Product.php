<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productMenu()
    {
        return $this->belongsTo(ProductMenu::class);
    }

    public function productDetail()
    {
        return $this->hasMany(ProductDetail::class);
    }
}
