<?php

namespace App\Http\Resources\Category\Repository;

use App\Http\Resources\BaseRepository;
use App\Http\Resources\Category\Repository\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;


class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    protected $category;
    /**
     * Categorycategory constructor.
     * @param Category $category
    */
    public function __construct()
    {  
        $this->category = new Category;//Category::defaultOrder()->withDepth();

    }

    public function listCategories(string $order = 'id', string $sort = 'desc', $except = [])
    {
        return $this->category->hasChildren()->get();
    }

    public function getCategoryTree($depth = 0)
    {
        return $this->category
            ->withCount('products')
            ->defaultOrder()
            ->withDepth()
            ->having('depth', '<=', $depth)
            ->get()
            ->toTree();
    }
    public function rootCategories(string $order = 'id', string $sort = 'desc', $except = []) 
    {
        // dd(get_class($this->category->orderBy($order, $sort)));
        return $this->category->whereIsRoot()
                        ->orderBy($order, $sort)
                        ->get()
                        ->except($except);
    }

    public function create(array $data)
    {
    
        return $this->category->create($data);
    }
}
