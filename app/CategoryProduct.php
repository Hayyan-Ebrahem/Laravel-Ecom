<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryProduct extends Pivot
{
    protected $dates = ['completed_at'];
}