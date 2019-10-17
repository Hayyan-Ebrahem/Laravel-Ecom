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


     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function optionsValues()
    {
        return $this->belongsToMany(OptionValues::class, 'product_option_option_values')
        ->using('App\ProductOptionsOptionValues')
        ->withPivot([
            'created_by',
            'updated_by',
        ]);    
    }

}
