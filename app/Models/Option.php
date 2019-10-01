<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function optionvalue()
    {
        return $this->hasMany(OptionValue::class);
    }
}
