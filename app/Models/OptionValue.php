<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model
{
    protected $fillable = [
        'value'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function productOptions()
    {
        return $this->belongsToMany(ProductOption::class, 'product_option_option_values')
        ->using('App\ProductOptionsOptionValues')
        ->withPivot([
            'created_by',
            'updated_by',
        ]);
    }
}
