<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;
    
    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product')
            ->using('CategoryProduct');
    }

    // public function parent()
    // {
    //     return $this->belongsTo(self::class, 'parent_id');
    // }

    // public function children()
    // {
    //     return $this->hasMany(self::class, 'parent_id');
    // }
}
