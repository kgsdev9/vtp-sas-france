<?php

namespace App\Services ;

use App\Repositories\CategoryRepository;

class CategoryService   {

    protected $categoyRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoyRepository = $categoryRepository ;
    }

    public function all() 
    {
         return  $this->categoyRepository->all();
     }


}

