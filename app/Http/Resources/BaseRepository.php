<?php

namespace App\Http\Resources;



class BaseRepository 
{
    protected $includes = [];

    protected $tree = false;

    public function findById($id)
    {
        return $this->findOneOrFail($id);
    }
    public function include($arrayOrString = [])
    {
     
        if (is_string($arrayOrString)) {
            $arrayOrString = array_map('trim', explode(',', trim($arrayOrString)));
        }
        $this->includes = $arrayOrString;

        return $this;
    }


}