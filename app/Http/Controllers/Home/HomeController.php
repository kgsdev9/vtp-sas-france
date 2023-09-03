<?php

namespace App\Http\Controllers\Home;

use App\Models\Seller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ContactSeller;
use App\Mail\ContactUserAnnonce;
use App\Services\ProduitService;
use App\Services\VendeurService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMailRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Repositories\CategoryRepository;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    protected $produitService ;
    protected $categoryService ;
    protected $sellerService ;
    public $codeCommande;


    public function  __construct(ProduitService $productService, CategoryRepository $categoryService, VendeurService $sellerService)
    {
        $this->produitService = $productService ;
        $this->categoryService = $categoryService;
        $this->sellerService = $sellerService;
        $this->codeCommande = "REF-".time();
    }


    public function categoryannonce($slug) {
        $category = Category::where('slug', $slug)->first();

        $designationCategory =$category->name ;
        $product = Product::where('category_id', $category->id)->paginate(18);
   return view('home.homecategoryannoncelink', compact('product', 'designationCategory'));
    }
    public function adsseller($slug) {
        $annonceur = Seller::where('slug', $slug)->first();

        $photo =  asset('seller/images/photo/'.$annonceur->photo);
        $logo = asset('seller/images/logo/'.$annonceur->logo);

        $ressource = ['fullname' =>$annonceur->fullname, 'adresse' => $annonceur->adresse, 'inscription'=> $annonceur->created_at, 'logo' =>$logo, 'photo' => $photo, 'telephone' => $annonceur->phonenumber, 'city' => $annonceur->city, 'country' => $annonceur->country];

        // dd($ressource['fullname']);


        $urlboutique =  url()->current() ;

        $ressourceVendeur = \Share::page(
            $urlboutique
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();


        $boutiqueSeller = Product::where('seller_id', $annonceur->id)->paginate(12);
        $category  = $this->categoryService->all();
        return view('home.boutiqueseller', compact('boutiqueSeller', 'category', 'ressource', 'ressourceVendeur'));

    }

    public function search(Request $request) {
       $product = Product::where('name', 'LIKE', '%'.$request->name.'%')->paginate(20);
       return view('home.search', compact('product'));
    }

    // '%'.$search.'%'
    public function detailads($slug) {

        // $ip = request()->ip();
        // $datauser = Location::get($ip);

        $urlcurrent =  url()->current() ;

        $shareComponent = \Share::page(
            $urlcurrent
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();



        $ressource = Product::where('slug', $slug)->first();
        return view('home.detailads', compact('ressource', 'shareComponent', 'urlcurrent'));
    }



    public function createOrders($slug){

      $ressource=  Product::where('slug', $slug)->first();
        Order::create([
            'fullname' => Auth::user()->fullname,
            'phone' => Auth::user()->telephone,
            'price' => $ressource->high_price,
            'adresse_delivry' =>Auth::user()->adresse,
            'email'=> Auth::user()->email,
            'user_id' => Auth::user()->id,
            'product_id' => $ressource->id,
            ]);
            $data = array(
                'merchantId' => "PP-F2197",
                'amount' => $ressource->high_price,
                'description' => $ressource->name,
                'channel' => "CARD",
                'countryCurrencyCode' => "952",
                'referenceNumber' => "REF-".time(),
                'customerEmail' => Auth::user()->email,
                'customerFirstName' => Auth::user()->name,
                'customerLastname' => Auth::user()->fullname,
                'customerPhoneNumber' => Auth::user()->telephone,
                'notificationURL' => route('succes'),
                'returnURL' => route('home'),
                'returnContext' => '{"data":"data 1","data2":"data 2"}',
            );

            $data = json_encode($data);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.paiementpro.net/webservice/onlinepayment/init/curl-init.php");
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            $response = curl_exec($ch);
            $obj = json_decode($response);

            $urlPayement = $obj->url ;

            return redirect()->to($urlPayement);
            // curl_close($ch);

        }





    public function createOrder(Request $request, $id) {

        $home = $request->all();
        dd($home);
    }

    public function homeAnnonce(Request $request) {

        $annonce =  Product::query();


        if($request->has('price')) {
            $annonce = $annonce->where('price', '<', $request->get('price') );
        }

        if($request->has('max')) {
            $annonce = $annonce->where('price', '>', $request->get('price') );
        }

        return view('home.homeannonce', [
            'annonces' => $annonce->paginate(16)
        ]);
    }

    public function homeseller(){

        return view('home.homeseller', [
            'allSellers' => $this->sellerService->allSellers()
        ]);
    }
    public function index()
    {
        return view('welcome', [
            'productCollectionRandom' => $this->produitService->getRandomProductBySeller(),
            'categoryCollection' =>$this->categoryService->all()
        ]);

    }


    public function homeProduit () {

        return view('accueil.pageProduit', [
            'productCollectionRandom' => $this->produitService->getRandomProductBySeller(),
        ]);
    }

    public function homeVendeur() {
        return view('accueil.pageVendeur', [
            'sellerCollections' => $this->sellerService->allSellers()
        ]);
    }

    public function contactSeller(ContactMailRequest $request) {
            $contactSeller = contactSeller::create([
                'name' => $request->name,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'message' => $request->message,
            ]);

       Mail::to($request->seller_email)->send(new ContactUserAnnonce($contactSeller));

       return redirect()->back();
    }


}
