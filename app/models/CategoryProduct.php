<?php

namespace App\models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryProduct extends Pivot
{
    
    public $lable= 'xxxx';

    protected $primaryKey = ['category_id', 'product_id'];

}