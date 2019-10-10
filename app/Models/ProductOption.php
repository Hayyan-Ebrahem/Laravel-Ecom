<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
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