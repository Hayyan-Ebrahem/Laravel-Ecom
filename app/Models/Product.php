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

  
    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }


     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function attributesValues()
    {
        return $this->belongsToMany(AttributeValues::class, 'product_attribute_attribute_values')
        ->using('App\ProductAttributeAttributeValues')
        ->withPivot([
            'created_by',
            'updated_by',
        ]);    
    }

}
