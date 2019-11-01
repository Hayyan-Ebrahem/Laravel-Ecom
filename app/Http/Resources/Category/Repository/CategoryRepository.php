<?php

namespace App\Http\Resources\Category\Repository;

use App\Http\Resources\BaseRepository;
use App\Http\Resources\Category\Repository\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    // protected $includes = [];

    protected $category;
    /**
     * Categorycategory constructor.
     * @param Category $category
     */
    public function __construct(Request $request)
    {   

        $includes = $this->include($request->includes);
        $this->category = Category::with($this->includes ? : []); //Category::defaultOrder()->withDepth();

    }

    public function getCategories(string $order = 'id', string $sort = 'desc', $except = [])
    {
        // dd(get_class($this->ategory));
        return $this->category->hasChildren()->get();
    }

    public function getCategoryTree($depth = 3)
    {
        return $this->category
            ->defaultOrder()
            ->withDepth()
            ->having('depth', '<=', $depth)
            ->get();
        
    }
    
    public function rootCategories(string $order = 'id', string $sort = 'desc', $except = [])
    {
        return $this->category->whereIsRoot()
            ->orderBy($order, $sort)
            ->get()
            ->except($except);
    }

    public function createCategory(array $data)
    {
        $category = $this->category;
        $category->name = $data['name'];
        $category->parent_id = $data['parent_id'] ? : 0;
        $category->save();

        // If a parent_id exists then add the category to the parent
        if (! empty($data['parent_id'])) {
            $parentNode = $this->category->findById($data['parent_id']);
            $parentNode->prependNode($category);
        }
        return $category;
    }

    public function children($id, Request $request)
    {
        $category = $this->categoryRepo->first();

        $query = $category
            ->children()
            ->with($request->includes)
            ->withCount(['products', 'children'])
            ->get();

        return new CategoryCollection($query);
    }
}
