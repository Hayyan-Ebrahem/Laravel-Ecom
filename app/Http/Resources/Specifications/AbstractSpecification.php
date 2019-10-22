<?php

namespace App\Http\Resources\Specifications;


abstract class AbstractSpecification
{
    protected $limit=5;

    abstract public function getBuilder();

        /**
     * Set the includes to eager load.
     *
     * @param array|string $arrayOrString
     * @return void
     */
    public function include($arrayOrString = [])
    {
        if (is_string($arrayOrString)) {
            $arrayOrString = array_map('trim', explode(',', trim($arrayOrString)));
        }
        $this->includes = $arrayOrString;

        return $this;
    }

    
    public function all()
    {

        return $this->getBuilder()->get();
    }

    /**
     * Get the result.
     *
     * @return LengthAwarePaginator
     */
    public function get()
    {
        $query = $this->getBuilder();
        return $query->paginate($this->limit);
    }
}
