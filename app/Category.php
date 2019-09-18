<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product')
        ->using('App\CategoryProduct')
        ->withPivot([
            'created_by',
            'updated_by',
        ]);    }
}
