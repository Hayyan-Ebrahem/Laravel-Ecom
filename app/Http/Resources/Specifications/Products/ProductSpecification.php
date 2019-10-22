<?php
namespace App\Http\Resources\Specifications\Products;
use App\Http\Resources\Specifications\AbstractSpecification;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductSpecification extends AbstractSpecification
{

    public function getBuilder()
    {
        $product = new Product;
        $builder = $product->with($this->includes ?: []);

        return $builder;

    }

}