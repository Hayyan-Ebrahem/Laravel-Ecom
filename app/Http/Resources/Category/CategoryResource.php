<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Category\CategoryCollection;


class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->load('children');
        // $this->load('ancestors');
        // $this->load('products');

        return [
            'id' => $this->id,
            'name' => $this->name,
            'children' => new CategoryCollection($this->whenLoaded('children')),
            // 'ancestors' => new CategoryCollection($this->whenLoaded('ancestors')),
            // 'attributes' => new AttributeCollection($this->whenLoaded('attributes')),
            'products' => new ProductCollection($this->whenLoaded('products')),
        ];
    }
}
