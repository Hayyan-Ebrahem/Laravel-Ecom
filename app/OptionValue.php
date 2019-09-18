<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionValues extends Model
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
        return $this->belongsToMany(ProductOption::class);
    }
}
