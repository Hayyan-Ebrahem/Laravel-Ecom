<?php

namespace App\Http\Resources;



class BaseRepository implements BaseRepositoryInterface
{
    public function getBuilder()
    {
        // $category = new Category;
        $includes = $this->includes ?: [];

        if ($this->tree) {
            $includes[] = 'channels';
            $includes[] = 'customerGroups';
        }

        $builder = $this->category->with($includes)
            ->withCount(['products', 'children']);
        // dd(get_class($category->with($includes)));
        if ($this->id) {
            $builder->where('id', '=', $category->decodeId($this->id));

            return $builder;
        }

        if ($this->limit && ! $this->tree) {
            $builder->limit($this->limit);
        }

        $builder->defaultOrder()
            ->withDepth()
            ->having('depth', '<=', $this->depth);

        return $builder;
    }
  
}