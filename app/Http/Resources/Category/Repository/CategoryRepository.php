<?php

namespace App\Http\Resources\Category\Repository;

use App\Http\Resources\BaseRepository;
use App\Http\Resources\Category\Repository\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

// use App\Http\Resources\Category\Interface\CategoryInterface;


class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    protected $category;
    /**
     * Categorycategory constructor.
     * @param Category $category
    //  */
    public function __construct()
    {  
        $this->category = Category::query();
    }
    
    public function getRootCategories()
    {
        // dd(get_class($this->category));
        return $this->category->descendantsAndSelf(2)->toTree();
    
    }

    // public function get()
    // {
    //     return $this->getTree();
    // }

    /**
    //  * Get the results.
    //  *
    //  * @return \Illuminate\Support\Collection
    //  */
    // public function depth()
    // {
    //     return $this->tree ? $this->getTree() : $this->get();
    // }

    // public function create()
    // {
    //     return $this->toTree();
    // }
}
