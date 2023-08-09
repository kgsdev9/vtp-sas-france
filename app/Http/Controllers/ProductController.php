<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\ProduitService;
use App\Services\CategoryService;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{

    protected $categoryService  ; 
    protected $produitService ; 

    public function __construct(CategoryService $categoryService,  ProduitService $productService)
    {
        $this->categoryService = $categoryService ; 
        $this->produitService = $productService ; 
    }

    public function index()
    {
        return view('dashboard.product.productadd',[
            'cate' => $this->categoryService->all()
        ]);
    }

     public function create(ProductRequest $request) 
     {
         $this->produitService->saveOrCreate($request);
         return redirect()->route('product_list');
     }
   

    public function show()
    {
        return view('account.produit.liste',[
        'products'=>$this->produitService->getProductBySeller(),
       ]);
    }


    public function update(Request $request, $id) {
        $product = $this->produitService->single($id);
             Validator::make($request->all(), [
                'name' => ['required', 'string'],
                'statut' =>['required'],
                'price'  =>['required'],
                'category_id' =>['required'],
                'quantity' =>['required'],
                'description' =>['required']
            ])->validate();
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
             $product->update();
            return redirect()->back();

     }


    public function destroy($id)
    {

        // $product = Product::findOrFail($id);
        // $destination  = "cover/" .$product->cover_image ;
        // return redirect()->back();
    }

    public function  list ()  {
    
        return view('dashboard.product.listeproduct', [
            'product_product' => $this->produitService->getProductBySeller()
        ]);

    }

    public function detail($id){
      return view('dashboard.product.detailproduct',[
        'product' => $this->produitService->single($id),
        'categories' => $this->categoryService->all()

      ]);

    }

    public function cate_liste() {
        return view('dashboard.product.categorie.listecate', [
            'categories' => $this->categoryService->all()
        ]);
    }

}




