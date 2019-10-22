<?php

namespace App\models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductAttributeAttributeValues extends Pivot
{
    protected $dates = ['completed_at'];
}