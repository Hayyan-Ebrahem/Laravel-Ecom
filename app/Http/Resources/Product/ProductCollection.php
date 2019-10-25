<?php

namespace App\Http\Resources\Product;


use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    public $collects = ProductResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
     
        return [
            'data' => $this->collection,
        ];
    }

    public function with($request)
    {
        return [
            'facts' => [
                'Count' => $this->count(),
            ],
        ];
    }
}
