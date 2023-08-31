<?php



use App\Http\Livewire\CreateOrder;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\Home\HomeController;

use App\Http\Controllers\UserProductController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Vendeur\Produit\GestionProduitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//routes pour les dashboards des utilisateuers



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/contact-seller', [HomeController::class, 'contactSeller'])->name('contact.seller');

//mes routes

Route::get('/annuaire-des-professionelle', [HomeController::class, 'homeseller'])->name('home.seller');
Route::get('/annuaire-annonceurs', [HomeController::class, 'homeAnnonce'])->name('home.annonceurs');
Route::get('/detail/annonce/{slug}', [HomeController::class, 'detailads'])->name('detail.ads');
Route::get('/boutique-annonceurs/{slug}', [HomeController::class, 'adsseller'])->name('boutique.annonceurs');
Route::get('/annonce/category/{slug}', [HomeController::class,'categoryannonce'])->name('category.annonce.link');
//fin de mes routes


  Route::get('/category/list', [CategoryController::class, 'list'])->name('cate.liste');
  Route::get('/product/details/{id}', [UserProductController::class, 'show'])->name('products.detail');
  Route::get('/category/forms', [CategoryController::class, 'index']);
  Route::post('/category/add', [CategoryController::class, 'store'])->name('cate.create');
  Route::get('/pages/categories',[UserController::class,'showcate']);
Route::post('/suscribe/newsletter', [ServiceController::class, 'suscribe_letter'])->name('suscribe.letter');
Route::post('/response',  [AnnonceMessageController::class , 'store'])->name('response.annonce');
Route::get('/sendbox/message', [AnnonceMessageController::class, 'index'])->name('send.box.receveied');
Route::get('/inbox/message/{id}',  [AnnonceMessageController::class, 'detail'])->name('inbox.detail');
Route::get('/product/search',[UserController::class,'indexAjax']);
Route::post('/pages/categories/products',[UserController::class,'shearchcateProduct'])->name('search.product');
Route::get('/pages/email/confirmation/{code}',[UserController::class,'validation'])->name('email.validation');
Route::post('/dashboard/product/detail/coupon/',  [CouponController::class, 'create'])->name('create.coupon');
 Route::get('/dashboard/product/detail/coupon/delete/{id}',  [CouponController::class, 'delete'])->name('delete.coupon');
 Route::post('/cart/coupon/apply',  [CouponController::class, 'applycoupon'])->name('apply.coupon');






Route::middleware(['auth'])->group(function() {
Route::get('/invoices/{id}', [ InvoiceController::class, 'detail_pdf'])->name('donwload.pdf');
Route::get('/dashboard/profile/buyer/form',[BuyerController::class,'register'])->name('buyer.register.form');
Route::get('/forms/annoncound', [AnnonceController::class, 'index'])->name('form.annonce')->middleware("subscribe");
Route::post('/create/annonce', [AnnonceController::class, 'store'])->name('create.annonce');
Route::get('/annonce/list', [AnnonceController::class, 'annonce_liste'])->name('list.annonce')->middleware("subscribe");;
Route::get('/edit/annonce/{id}', [AnnonceController::class, 'edit_annonce'])->name('edit.annonce');
Route::patch('/update/annonce/{id}', [AnnonceController::class, 'update_annonce'])->name('update.annonce');
Route::get('/delete/annonce/{id}', [AnnonceController::class, 'delete_annanonce'])->name('destroy.annonce');
Route::get('/dashboard/profile',[UserController::class,'profile'])->name('profile');
Route::get('/dashboard/prdouct/forms', [ProductController::class, 'index'])->name('add.product');
Route::post('/dashboard/product/add', [ProductController::class, 'create'])->name('create.product');
Route::get('/dashboard/product/list' , [ProductController::class, 'list'])->name('product_list');
Route::GET('/dashboard/product/delete/{id}', [ProductController::class, 'destroy'])->name('destroy.product');
Route::get('/dashboard/product/detail/{id}',  [ProductController::class, 'detail'])->name('edit.product');
Route::put('dashboard/product/{id}',  [ProductController::class, 'update'])->name('update.product');
Route::get('/dashboard/categorie/liste', [ProductController::class, 'cate_liste'])->name('liste.cate');
Route::post('/dashboard/profile/seller/',[SellerController::class,'create'])->name('seller.store');
Route::get('/dashboard/profile/seller/form',[SellerController::class,'register'])->name('seller.register.form');
Route::get('/dashboard/profile/user/updateprofileform',[UserController::class,'updateprofile'])->name('user.update.form');
Route::get('/dashboard/profile/user/updatepasswordprofileform',[UserController::class,'updatepasswordprofile'])->name('user.update.password.form');
Route::get('/dasboard/profile/seller/edit/{id}' , [SellerController::class , 'edit_update_seller_information'])->name('seller.edit');
Route::get('/dasboard/profile/seller/update/{id}' , [ProductController::class , 'detail'])->name('product.details');//route detai modifie
Route::post('/dashboard/profile/seller/update',[SellerController::class,'update'])->name('seller.update');
Route::get('/dashboard/profile/seller/comments',[SellerController::class,'products_comments_pages'])->name('seller.commments');
Route::get('/dashboard/profile/seller/comments/product/{id}',[SellerController::class,'product_comments'])->name('seller.product.commments');
Route::get('/dashboard/profile/seller/offres',[OffreController::class,'seller_see_orfers'])->name('seller.offers');
Route::get('/offre/detail/{id}',[OffreController::class,'seller_see_orfers_detail'])->name('seller.offers.detail');
Route::get('/dashboard/profile/carrier/form',[CarrierController::class,'register'])->name('carrier.register.form');
Route::post('/dashboard/profile/carrier/',[CarrierController::class,'create'])->name('carrier.store');
Route::post('/dashboard/profile/carrier/update',[CarrierController::class,'update'])->name('carrier.update');
Route::get('/dashboard/profile/entreprise/form',[EntrepriseController::class,'form'])->name('entreprise.register.form');
Route::post('/dashboard/profile/entreprise/',[EntrepriseController::class,'store'])->name('entreprise.store');
Route::get('/dashboard/profile/entreprise/detail/',[EntrepriseController::class,'detail_entreprise'])->name('detail.entreprise');
Route::patch('/dashboard/profile/entreprise/update',[EntrepriseController::class,'edit_entreprise'])->name('update.entreprise');
Route::get('/pages/category/products/{id}',[UserController::class,'showcateProduct'])->name('cate.productlink');
Route::get('/index/product',  [UserController::class, 'total_product']) ;
Route::get('/remove/{id}' , [WishlistController::class, 'destroy'])->name('destroy.items');
Route::get('/orders', [OrderController::class, 'index'])->name('order.index')->middleware('auth');

Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware('confirmation_verified');


Route::get('/dashboard/message/to_seller/form/{id}/',[MessageController::class,'smsform_to_seller'])->name('form.sms.to_seller');
 Route::get('/dashboard/message/to_carrier/form/{id}/',[MessageController::class,'smsform_to_carrier'])->name('form.sms.to_carrier');
Route::get('/dashboard/message/list/sms', [MessageController::class,  'liste_message'])->name('liste.sms');
Route::get('/dashboard/message/list/recevied', [MessageController::class,  'smsrecevied'])->name('receve.sms');
Route::get('/dashboard/message/list/delete/{id}', [MessageController::class,  'destroy'])->name('delete.sms');
Route::get('/dashboard/message/list/detail/{id}', [MessageController::class,  'detail'])->name('detail.sms');
Route::post('/dashboard/message/list/detail/update', [MessageController::class,  'update'])->name('update.sms');
Route::get('/dashboard/message/list/recevied/see/{id}', [MessageController::class,  'smssee'])->name('see.sms');
Route::post('/dashboard/profile/buyer/store',[BuyerController::class,'create'])->name('buyer.store');
Route::post('/dashboard/profile/buyer/update',[BuyerController::class,'update'])->name('buyer.update');
Route::patch('dashboard/profil/offre/edit/{id}', [OffreController::class, 'edit'])->name('offert.offert');
Route::post('/response',  [AnnonceMessageController::class , 'store'])->name('response.annonce');
Route::get('/sendbox/message', [AnnonceMessageController::class, 'index'])->name('send.box.receveied');
Route::get('/inbox/message/{id}',  [AnnonceMessageController::class, 'detail'])->name('inbox.detail');
Route::get('/response/inbox/{id}',  [AnnonceMessageController::class, 'response'])->name('inbox.send');
Route::get('/invoices/order/{id}', [InvoiceController::class, 'invoice_commande_admin'])->name('invoice.admin');
Route::post('detail/product/add',[CommentController::class,'add'])->name('add_comment');
Route::post('detail/product/edit',[CommentController::class,'edit'])->name('edit_comment');
Route::get('detail/product/supprimer/{id}',[CommentController::class,'delete'])->name('supprimer_comment');
Route::get('/response/inbox/{id}',  [AnnonceMessageController::class, 'response'])->name('inbox.send');
Route::get('/plan', [SouscribrController::class, 'index'])->name('plan.index');
Route::get('plan/{plan}',  [SouscribrController::class, 'show'])->name('plan.show');
Route::get('/success/suscribe',  [SouscribrController::class, 'successSusbrice'])->name('success.suscribe');
Route::post('subscription', [SouscribrController::class, 'subscription'])->name("subscription.create");
Route::get('subscription', [SouscribrController::class, 'list'])->name("subscription.list");
});



Route::middleware(['auth'])->group(function() {
Route::get('/dashboard/admin/profile/updateprofileform',[AdminController::class,'updateprofile'])->name('admin.update.form');
Route::get('/dashboard/admin/profile/updatepasswordprofileform',[AdminController::class,'updatepasswordprofile'])->name('admin.update.password.form');
Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin_dashbord');
Route::get('/dashboard/admin/seller/detail{id}', [AdminController::class, 'detail_seller'])->name('seller.detail');
Route::get('/dashboard/admin/seller/product/{id}', [AdminController::class, 'product_seller'])->name('seller.product');
Route::get('/dashboard/admin/seller/liste', [AdminController::class, 'seller_liste']);
Route::get('/dashboard/admin/carrier/liste', [AdminController::class, 'carrer_all']);
Route::get('/dashboard/admin/carrier/detail/{id}', [AdminController::class, 'carrer_detail'])->name('carrer.detail');
Route::get('/dashboard/admin/carrier/offre/{id}', [AdminController::class, 'carrer_offert'])->name('carrer.offert');
Route::get('/dashboard/admin/buyer/list', [AdminController::class, 'buyer_liste'])->name('buyer.all');
Route::get('/dashboard/admin/cate/forms', [AdminController::class, 'add_cate']);
Route::post('dashboard/admin/cate/create', [AdminController::class, 'store'])->name('post.cate');
Route::get('/dashboard/admin/cate/list', [AdminController::class, 'cate_liste'])->name('list.cate');
Route::get('/dashboard/admin/cate/edit/{id}', [AdminController::class, 'edit_cate'])->name('edit.cate');
Route::get('/offre/transport/liste', [AdminController::class ,'transport_offre'])->name('transport.offre');
Route::patch('dashboard/admin/cate/update/{id}', [AdminController::class, 'update_cate'])->name('update.cate');
Route::get('/dashboard/admin/cate/delete{id}', [AdminController::class, 'delete_cate'])->name('destroy.cate');
Route::get('/dashboard/admin/orders/list', [AdminController::class, 'view_order'])->name('admin.order');
Route::get('/dashboard/admin/orders/detail/{id}', [AdminController::class, 'admin_detail_order'])->name('order.detail.admin');
Route::get('/liste/announce', [AdminController::class, 'annonce_liste'])->name('admin.announce');
Route::get('/detail/admin/annouce/{id}', [AdminController::class ,'view_annouce'])->name('seller.annouce');
Route::get('/inbox/annouce' , [AdminController::class ,'senbox_annnounce'])->name('senbox.announce');
Route::get('/detail/inboix/{id}', [AdminController::class ,'relationship_inbox'])->name('relationship.inbox');
Route::get('/create/formatons', [FormationController::class, 'createFormation'])->name('create.course');
Route::post('/course/post', [FormationController::class, 'saveCourse'])->name('add.post');
});

Route::get('/carriers', function (){
  return view('transporteurs.index');
});





Route::get('process-transaction', [PaypalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PaypalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PaypalController::class, 'cancelTransaction'])->name('cancelTransaction');



Route::get('/process',  [PaypalController::class, 'sandboxpaypal'])->name('sandbox');





Route::post('/order/create',[PaypalController::class,'createOrder'])->name('create-payment');
Route::post('/order/capture/',[PaypalController::class,'capture']);


//mes nouvelles routes pour un meilleures refactoring

Route::get('/annuaire-des-produits', [HomeController::class, 'homeProduit'])->name('index.product');
Route::get('/annuaire-des-vendurs', [HomeController::class, 'homeVendeur'])->name('index.vendeur');


Route::resources([
    'seller-product-controle' => GestionProduitController::class,
]);



Route::get('/search-with-vtp-market', [HomeController::class, 'search'])->name('search.annonce');

Route::get('/payment/display/page/{slug}', [PaymentController::class, 'processTransaction'])->name('process.pay');


Route::get('/create-order/{slug}', CreateOrder::class)->name('order.create');


// Route::get('/order-chose-component/{slug}-{id}',SaveOrder::class)->name('save.choice');



Route::get('/order-chose-component/{slug}-{id}', [HomeController::class, 'createOrder'])->name('order.save');
