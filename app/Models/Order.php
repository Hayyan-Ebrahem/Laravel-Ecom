<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * An Order can have many products
     *
     * @return $this
     */
    public function products() {
        return $this->belongsToMany('App\Product')
                    ->withPivot([
                        'quantity', 
                        'price', 
                        'product_sku', 
                    ]);
    }
}
