<?php
use Illuminate\Support\Facades\Input;
use App\Product;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::resource('permissions', 'PermissionController');
    Route::resource('roles', 'RoleController');
    Route::get('users/{user}/roleEdit', 'UserController@roleEdit')->name('users.roleEdit');
    Route::put('users/{user}/roleEdit', 'UserController@roleUpdate')->name('users.roleUpdate');
    Route::get('users/{user}/permissionEdit', 'UserController@permissionEdit')->name('users.permissionEdit');
    Route::put('users/{user}/permissionEdit', 'UserController@permissionUpdate')->name('users.permissionUpdate');
    Route::resource('users', 'UserController');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('products', 'ProductController');
    Route::resource('reviews', 'ReviewController');
    Route::resource('suggestions', 'SuggestionController');
    Route::resource('coupons', 'CouponsController');


    Route::group(['namespace' => 'User', 'prefix' => 'user', 'as' => 'user.'], function () {
        Route::resource('products', 'UserProductController');
        Route::resource('suggestions', 'UserSuggestionsController');
        Route::resource('wishlists', 'UserWishlistsController');
        Route::get('shoppingcarts/empty', 'UserShoppingcartsController@empty')->name('shoppingcarts.empty');
        Route::resource('shoppingcarts', 'UserShoppingcartsController');
        Route::resource('reviews', 'UserReviewController');
        Route::resource('profile', 'UserProfileController');
    });


    Route::any('/search',function(){
        $q = Input::get ( 'q' );
        $products = Product::all();
        $product = Product::where('name','LIKE','%'.$q.'%')->orWhere('price','<=',$q)->orderby('price')->get();
        if(count($product) > 0)
            return view('user.products.index')->withDetails($product)->withQuery ( $q );
        else return view ('user.products.index', compact('products'))->with('successMSG','No Products found. Try to search again !' );
    });



});
