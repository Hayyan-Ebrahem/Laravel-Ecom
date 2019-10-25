<?php

namespace App\Http\Controllers\Api\Categories;
use App\Http\Resources\Category\CategoryCollection;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Category\Repository\Interfaces\CategoryRepositoryInterface;
// use App\Http\Resources\Product\ProductResource;
// use App\Http\Resources\Specifications\Products\ProductSpecification;

class CategoryController extends Controller
{
    // private $categoryRepo;

    // /**
    //  * CategoryController constructor.
    //  *
    //  * @param CategoryRepositoryInterface $categoryRepository
    //  */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd(get_class($this->categoryRepo));
        $category = $this->categoryRepo->getRootCategories();
            // $category = Category::all();
            return new CategoryCollection($category);
     

        
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // $category = Category
        // $resource = new CategoryResource($category);

        // return $resource;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
