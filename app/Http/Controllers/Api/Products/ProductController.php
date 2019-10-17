<?php

namespace App\Http\Controllers\Api\Products;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;


class ProductController extends Controller
{


    public function recommended(Request $request, ProductCriteria $productCriteria, BasketCriteriaInterface $baskets)
    {
        $request->validate([
            'basket_id' => 'required|hashid_is_valid:baskets',
        ]);

        $basket = $baskets->id($request->basket_id)->first();

        $products = $basket->lines->map(function ($line) {
            return $line->variant->product_id;
        })->toArray();

        $products = app('api')->products()->getRecommendations($products);

        return new ProductRecommendationCollection($products);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): ProductCollection
    {
        return new ProductCollection(Product::with('categories')->paginate(8));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ProductResource(Product::with('categories')->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
