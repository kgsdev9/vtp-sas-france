<?php

namespace App\Services ;

use App\Repositories\VendeurRepository;

class VendeurService  {

    protected $vendeurRepository;

    public function __construct(VendeurRepository $vendeurRepository)
    {
        $this->vendeurRepository = $vendeurRepository ;
    }

        public function allSellers() {
           return  $this->vendeurRepository->allSellers();
        }


}

