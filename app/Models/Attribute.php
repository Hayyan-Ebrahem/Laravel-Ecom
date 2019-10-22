<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attributevalue()
    {
        return $this->hasMany(AttributeValue::class);
    }
}
