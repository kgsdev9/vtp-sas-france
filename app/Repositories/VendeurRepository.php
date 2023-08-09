<?php
namespace App\Repositories ;

use App\Models\Seller;


class   VendeurRepository {

public $vendeur ;


public function __construct(Seller $vendeur)
{
    $this->vendeur = $vendeur ;
}

public function allSellers() {
    return $this->vendeur->orderBy('created_at')->get();
}



}

// <?php
//   $age = 20;
//   print ($age >= 18) ? "Adult" : "Not Adult";
// ?>