<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ChacheController;
use App\Http\Controllers\VideoTutorialController;


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

Route::get('/',[FrontEndController::class,'frontPage'])->name('front.page');
Route::get('/view-products',[App\Http\Controllers\FrontEndController::class,'allProducts'])->name('view.all.products');
Route::get('view-single-product/{slug}',[FrontEndController::class,'singleProduct'])->name('single.product');
Route::get('view-cate-products/{id}',[FrontEndController::class,'cateProducts'])->name('cate.products');
Route::get('/video-tutorials',[App\Http\Controllers\FrontEndController::class,'videoTutorials'])->name('video.tutorials');
Route::get('/picture-tutorials',[App\Http\Controllers\FrontEndController::class,'pictureTutorials'])->name('picture.tutorials');
Route::get('/submite-your-own-craft',[App\Http\Controllers\FrontEndController::class,'submitYourCraft']);
Route::post('submit-your-craft',[App\Http\Controllers\FrontEndController::class,'submitCraft']);
Route::post('/add-to-cart',[App\Http\Controllers\CartController::class,'addToCart'])->name('add.to.cart');
Route::get('buy-now/{id}',[App\Http\Controllers\CartController::class,'buyNow'])->name('buy.now');
Route::put('/update-cart',[App\Http\Controllers\CartController::class,'updateCart'])->name('update.cart');
Route::get('/load-cart-item',[App\Http\Controllers\CartController::class,'loadCart'])->name('load.cart');
Route::get('/view-cart',[App\Http\Controllers\CartController::class,'viewCart'])->name('view.cart');
Route::get('delete_cart_item/{id}',[App\Http\Controllers\CartController::class,'deleteCartItem'])->name('delete.cart.item');
Route::get('/checkout-page',[App\Http\Controllers\CheckoutController::class,'checkoutPage'])->name('view.checkout');
Route::post('/place-order',[App\Http\Controllers\CheckoutController::class,'placeOrder'])->name('place.order');
Route::get('/terms-and-condition',[App\Http\Controllers\FrontEndController::class,'termsAndCondition'])->name('terms.condition');
Route::get('/privacy-policy',[App\Http\Controllers\FrontEndController::class,'privacyPolicy'])->name('privacy.policy');
Route::get('/return-policy',[App\Http\Controllers\FrontEndController::class,'returnPolicy'])->name('return.policy');

// Blogs.........

Route::get('view-blog/{id}',[App\Http\Controllers\BlogController::class,'picturalTutorial']);
Route::get('/baloon-craft',[App\Http\Controllers\BlogController::class,'ballonCraftTutorial']);
Route::get('/kaktaruya-craft','App\Http\Controllers\BlogController@kaktaruyaCraftTutorial');
Route::get('/braslet-craft',[App\Http\Controllers\BlogController::class,'brasletCraftTutorial']);

// Login & Dashboard Routes.......................................
Route::group(['middleware'=>'alreadyLoggedIn'],function(){
 Route::get('/admin/login',[App\Http\Controllers\LoginController::class,'LoginPage'])->name('login.page');
});

Route::post('admin/login',[App\Http\Controllers\LoginController::class,'adminLogin'])->name('admin.login');
Route::group(['middleware'=>'isLoggedIn'],function(){
Route::get('/dashboard',[App\Http\Controllers\BackEndController::class,'dashboard'])->name('admin.dashboard');
Route::get('/logout',[App\Http\Controllers\LoginController::class,'adminLogout'])->name('admin.logout');
// Products Routes.......................................
Route::get('/product-lists',[App\Http\Controllers\BackEndController::class,'productList'])->name('view.products');
Route::post('/add-product',[App\Http\Controllers\BackEndController::class,'addProduct'])->name('add.product');
Route::get('edit-product/{id}',[App\Http\Controllers\BackEndController::class,'editProduct'])->name('edit.product');
Route::put('update-product/{id}',[App\Http\Controllers\BackEndController::class,'updateProduct'])->name('update.product');
Route::delete('delete/{id}',[App\Http\Controllers\BackEndController::class,'deleteProduct'])->name('delete.product');
Route::delete('deleteimage/{id}',[App\Http\Controllers\BackEndController::class,'deleteImage'])->name('delete.images');
// Category Routes.......................................
Route::get('/category-list',[App\Http\Controllers\BackEndController::class,'viewCategory'])->name('view.category');
Route::post('/add-new-category',[App\Http\Controllers\BackEndController::class,'addCategory'])->name('add.category');
Route::get('edit_category/{id}',[App\Http\Controllers\BackEndController::class,'editCategory'])->name('edit.category');
Route::put('update-category',[App\Http\Controllers\BackEndController::class,'updateCategory'])->name('update.category');
Route::get('edit_category-delete/{id}',[App\Http\Controllers\BackEndController::class,'editCateDelete'])->name('edit.delete.category');
Route::put('/delete-category',[App\Http\Controllers\BackEndController::class,'deleteCategory'])->name('delete.category');

// Orders routes.............................................
Route::get('/orders-list',[App\Http\Controllers\BackEndController::class,'orderList'])->name('view.orders');
Route::get('edit_order/{id}',[App\Http\Controllers\BackEndController::class,'editOrder'])->name('edit.order');
Route::put('update-order',[App\Http\Controllers\BackEndController::class,'updateOrder'])->name('update.order');
Route::get('view-single-order/{id}',[App\Http\Controllers\BackEndController::class,'viewSingleOrder'])->name('view.single.order');
Route::get('edit_delete_order/{id}',[App\Http\Controllers\BackEndController::class,'editDeleteOrder'])->name('edit.delete.order');
Route::put('delete-order',[App\Http\Controllers\BackEndController::class,'DeleteOrder'])->name('delete.order');

// Blogs Routes......................

Route::get('/manage-blogs',[App\Http\Controllers\BlogController::class,'viewBlogLists']);
Route::get('/add-blog',[App\Http\Controllers\BlogController::class,'createBlog']);
Route::post('/add-new-blog-step1','App\Http\Controllers\BlogController@addBlogStep1');
Route::get('/blog-id',[App\Http\Controllers\BlogController::class,'getBlogId']);
Route::post('add-blog-content',[App\Http\Controllers\BlogController::class,'addBlogContent']);
Route::delete('delete-blog/{id}',[App\Http\Controllers\BlogController::class,'deleteBlog']);
Route::get('/manage-video-tutorials',[App\Http\Controllers\VideoTutorialController::class,'videoTutorials']);
Route::post('/add-new-video','App\Http\Controllers\VideoTutorialController@addVideo');
Route::get('edit-video/{id}',[App\Http\Controllers\VideoTutorialController::class,'editVideoTutorial']);
Route::put('update-video-tutorial',[App\Http\Controllers\VideoTutorialController::class,'updateVideoTutorial']);
Route::delete('delete-video-tutorial/{id}',[App\Http\Controllers\VideoTutorialController::class,'deleteVideoTutorial']);
});

// Chaches Routes.........................................................................


Route::get('/optimize',[App\Http\Controllers\ChacheController::class,'Optimize']);
// Route::get('/config-chache',[App\Http\Controllers\ChacheController::class,'ConfigChached']);
Route::get('/route-chache',[App\Http\Controllers\ChacheController::class,'RouteChached']);
Route::get('/cache-clear',[App\Http\Controllers\ChacheController::class,'onlyCacheCleare']);
Route::get('/route-clear',[App\Http\Controllers\ChacheController::class,'RouteClear']);
// Route::get('/config-clear',[App\Http\Controllers\ChacheController::class,'ConfigClear']);
// Route::get('/view-clear',[App\Http\Controllers\ChacheController::class,'viewCleare']);



