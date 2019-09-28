<?php

namespace App\models;

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
}
