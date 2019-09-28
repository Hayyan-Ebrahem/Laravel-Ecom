<?php

namespace App\models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductOptionsOptionValues extends Pivot
{
    protected $dates = ['completed_at'];
}