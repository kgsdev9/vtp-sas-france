<?php

namespace App\Services ;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateRequestProduct;
use App\Repositories\ProduitRepository;


class ProduitService    {

protected $produitRepository;


public function __construct(ProduitRepository $produitRepository)
{
    $this->produitRepository = $produitRepository ;
}


public function getProductBySeller()
 {
    return $this->produitRepository->getProductBySeller();
}

public function getRandomProductBySeller() {
    return $this->produitRepository->getRandomProductBySeller();
}

public function single(int $id) {
    return $this->produitRepository->single($id);
}

public function saveOrCreate(ProductRequest $request) {
    return $this->produitRepository->saveOrCreate($request);
   
}

public function update(UpdateRequestProduct $request, $id) {
    return $this->produitRepository->update($request, $id);
}


}
