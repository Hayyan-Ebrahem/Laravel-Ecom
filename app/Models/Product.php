<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sku',
        'name',
        'description',
        'cover',
        'quantity',
        'price',
        'brand_id',
        'status',
        'mass_unit',
        'status',
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product')
        ->using('App\Models\CategoryProduct');
    }

    public function tag()
    {
        return $this->belongsToMany(ProductTag::class, 'product_tag');
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

  
    public function options()
    {
        return $this->hasMany(ProductOptions::class);
    }


}
