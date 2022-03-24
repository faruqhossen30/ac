<?php

use App\Http\Controllers\Frontend\AuctionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\Error404Controller;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\FrontEnd\HomepageController;
use App\Http\Controllers\Frontend\ProductDetailsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\Product\ProductAjaxController;
use App\Http\Controllers\User\Product\ProductController;
use App\Http\Controllers\User\UserAlertsController;
use App\Http\Controllers\User\UserBidsController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserFavoriteController;
use App\Http\Controllers\User\UserMediaController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserWinningBidsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Controller\ErrorController;
use App\Http\Controllers\User\Location\LoactionAjaxController;
// Filter
use App\Http\Controllers\FrontEnd\Filter\CategoryWiseFilterController;
use App\Http\Controllers\FrontEnd\Filter\SubCategoryWiseFilterController;
use App\Http\Controllers\FrontEnd\Filter\BrandWiseFilterController;
// use App\Http\Controllers\FrontEnd\Filter\SearchWiseFilterController;
use App\Http\Controllers\Frontend\Filter\SearchWiseProductFilterController;
use App\Http\Controllers\Frontend\Filter\LocationWiseFilterController;
use App\Http\Controllers\User\Bid\BidController;
// Ajax
use App\Http\Controllers\Frontend\Ajax\LocationAjaxController;


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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('hompage');


Route::get('/contact', [ContactController::class, 'contactPage'])->name('contact');
Route::get('/auction', [AuctionController::class, 'auctionPage'])->name('auction');
Route::get('/auction/{slug}', [AuctionController::class, 'singleProduct'])->name('singleproduct');
Route::get('/aboutus', [AboutUsController::class, 'AboutUsPage'])->name('aboutus');
Route::get('/faq', [FaqController::class, 'FaqPage'])->name('faq');
Route::get('/error', [Error404Controller::class, 'ErrorPage'])->name('error');
Route::get('/productsdetails', [ProductDetailsController::class, 'productDetailsPage'])->name('product.details');

// Filter Route
Route::get('category/{slug}', [CategoryWiseFilterController::class, 'index'])->name('category');
Route::get('subcategory/{slug}', [SubCategoryWiseFilterController::class, 'index'])->name('subcategory');
Route::get('brand/{slug}', [BrandWiseFilterController::class, 'index'])->name('brand');
Route::get('search', [SearchWiseProductFilterController::class, 'index'])->name('search');
Route::get('location/{slug}', [LocationWiseFilterController::class, 'index'])->name('location');
// Bid in product
Route::post('/auction/{slug}', [BidController::class, 'store'])->name('bid.store')->middleware('auth');
// Ajax
Route::get('getlocation', [LocationAjaxController::class, 'getLocation'])->name('getlocation');
Route::get('checkminimumbidprice', [AuctionController::class, 'checkMinimumBidPrice'])->name('checkminimumbidprice');

Route::prefix('user')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [UserDashboardController::class, 'userDashboard'])->name('user.dashboard');
        Route::get('/profile', [UserProfileController::class, 'userProfileDashboard'])->name('user.profile');
        Route::get('/profile/edit', [UserProfileController::class, 'profileEdit'])->name('user.profile.edit');
        Route::post('/profile/update', [UserProfileController::class, 'profileUpdate'])->name('user.profile.update');
        Route::get('/bids', [UserBidsController::class, 'userBidsDashboard'])->name('user.bids');
        Route::get('/winningbids', [UserWinningBidsController::class, 'userWinningBidsDashboard'])->name('user.winning.bids');
        Route::get('/alert', [UserAlertsController::class, 'userAlertDashboard'])->name('user.alert');
        Route::get('/favorite', [UserFavoriteController::class, 'userFavoriteDashboard'])->name('user.favorite');
        Route::resource('product', ProductController::class);

        Route::get('media', [UserMediaController::class, 'index'])->name('user.medial.all');
        Route::post('media/store', [UserMediaController::class, 'store'])->name('user.medial.store');
    });
});
Route::get('getallmedia', [UserMediaController::class, 'getAllMedia'])->name('getallmedia');
Route::post('storemedia', [UserMediaController::class, 'ajaxStore'])->name('storemedia');


// Product Ajax
Route::get('ajax/getsubcategory/{id}', [ProductAjaxController::class, 'getSubcategoryByCatID'])->name('ajax.subcategorybycatid');
Route::get('district-from-division/{id}', [LoactionAjaxController::class, 'districtFromDivision'])->name('districtFromDivision');
Route::get('upazila-from-district/{id}', [LoactionAjaxController::class, 'upazilaFromDistrict'])->name('upazilaFromDistrict');

Route::get('test', [TestController::class, 'test']);
Route::post('test', [TestController::class, 'postfunction'])->name('testpost');
