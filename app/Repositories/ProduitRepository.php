<?php
namespace App\Repositories ;

use App\Models\Product;
use Illuminate\Support\Str;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductRequest;
use Intervention\Image\Facades\Image;
use Stevebauman\Location\Facades\Location;
use App\Http\Requests\UpdateRequestProduct;

class   ProduitRepository {

public $product ;


public function __construct(Product $product)
{
    $this->product = $product ;
}

public function collection(Array $id)
{
    return $this->product->whereIn('id', $id)
                            ->orderBy('name')
                            ->get();
}



public function  getProductBySeller() {
    return $this->product->where('seller_id', Auth::user()->owner_id)
                         ->orderByDesc('created_at')
                         ->get();
}

public function single($id) {
    return $this->product->find($id);
}



public function getRandomProductBySeller() {
    return $this->product->inRandomOrder()
                         ->take(20)
                         ->get();
}


public function saveOrCreate(ProductRequest $request) {
    $ip = request()->ip();
    $souceProduit = Location::get($ip);
    $product = new Product() ;
    $product->name = $request->input('name');
    $product->slug = Str::slug($request->input('name'));
    $product->country = $souceProduit->countryName?? 'inconnu';
    $product->city = $souceProduit->regionName ?? 'inconnu';
    $product->statut = $request->input('statut');
    $product->description = $request->input('description');
    $product->price = $request->input('price');
    $product->high_price = $request->input('price')* 654;
    $product->quantity = $request->input('quantity');
    $product->category_id = $request->input('category_id');
    $product->seller_id = Auth::user()->owner_id ;
    if($request->hasfile('first_image')) {
        $file = $request->file('first_image');
        $filename  = $request->file('first_image')->getClientOriginalName() ;
        $aspectRatio = Image::make($file->getRealPath());
        $aspectRatio->resize(320, 240);
        $aspectRatio->save(public_path('cover/'.$filename));
       $product->cover_image = $filename;
    }

    if($request->hasfile('two_image')) {
                $filetwo = $request->file('two_image');
                $filenametwo  = $request->file('two_image')->getClientOriginalName() ;
                $filetwo->move(public_path('images/'), $filenametwo);
               $product->img_two=$filenametwo;
    }

    if($request->hasfile('three_image')) {
                $file = $request->file('three_image');
                $extention = $file->getClientOriginalExtension();
               // $filenamethree=time().'.'.$extention ;
               $filenamethree = $request->file('three_image')->getClientOriginalName();
               $file->move(public_path('images/'),$filenamethree);
               $product->img_three= $filenamethree;
    }

    if($request->hasfile('for_image')) {
                        $file = $request->file('for_image');
                      //  $extention = $file->getClientOriginalExtension();
                       // $filenamefor=time().'.'.$extention ;
                       $filenamefor = $request->file('for_image')->getClientOriginalName();
                        $file->move(public_path('images/'), $filenamefor);
                       $product->img_for = $filenamefor;
    }

  Flashy::message('Annonce ajouté avec succes!');
   return  $product->save();

}

public function update(UpdateRequestProduct $request, $id) {
    $product = $this->product->single($id);
        $product->name  = $request->input('name');
        $product->slug = Str::slug($request->input('name'));
        $product->statut = $request->input('statut');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->category_id = $request->input('category_id');

        if($request->hasFile('first_image')) {

            $chemin = 'cover/'.$product->cover_image;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $request->file('first_image');
           // $extention  = $file->getClientOriginalExtension();
            //$firstchemin = time().'.'.$extention;
            $name = $request->file('first_image')->getClientOriginalName();
            $file->move(public_path('cover/'),$name);
            $product->cover_image = $name;
         }

         if($request->hasFile('image_two')) {

            $chemin = 'images/'.$product->img_two;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $request->file('image_two');
           // $extention  = $file->getClientOriginalExtension();
           // $twochemin = time().'.'.$extention;
           $name = $request->file('image_two')->getClientOriginalName();
            $file->move(public_path('images/'),$name);
            $product->img_two = $name;
         }


         if($request->hasFile('image_three')) {

            $chemin = 'images/'.$product->img_three;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $request->file('image_three');
           // $extention  = $file->getClientOriginalExtension();
           // $threechemin = time().'.'.$extention;
           $name = $request->file('image_three')->getClientOriginalName();
           $file->move(public_path('images/'),$name);
            $product->img_three = $name;
         }

         if($request->hasFile('image_for')) {

            $chemin = 'images/'.$product->img_for;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $request->file('image_for');
           $name = $request->file('image_for')->getClientOriginalName();
           $file->move(public_path('images/'),$name);
            $product->img_for = $name;
         }

         Flashy::message('Annonce modifiée avec succes!');
        return  $product->update();

 }


}




