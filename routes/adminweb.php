<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminListController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\Bids\BidsController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Deposit\DepositController;
use App\Http\Controllers\Admin\Location\DistrictController;
use App\Http\Controllers\Admin\Location\DivisionController;
use App\Http\Controllers\Admin\Location\UpazilaController;
use App\Http\Controllers\Admin\Location\UpzillaController;
use App\Http\Controllers\Admin\product\AllProductController;
use App\Http\Controllers\Admin\Product\BrandController;
use App\Http\Controllers\Admin\Product\CategoryController;
use App\Http\Controllers\Admin\Product\ProductListController;
use App\Http\Controllers\Admin\Product\SubCategoryController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\User\UserListController;
use App\Http\Controllers\Admin\User\UserStatusController;
use App\Http\Controllers\Admin\UserAdmin\UserAdminController;
use App\Http\Controllers\AdminController;
use App\Models\Admin\Location\District;
use App\Models\Admin\Product\SubCategory;
use Illuminate\Support\Facades\Auth;

Route::prefix('admin')->group(function () {
    Auth::routes();


    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'login'])->name('admin.login');

    Route::group(['middleware' => 'admin'], function () {

        Route::post('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

        //dashboard
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

        Route::resource('category', CategoryController::class);
        Route::resource('sub-category', SubCategoryController::class);
        Route::resource('brand', BrandController::class);

        // Product
        Route::get('productlist', [ProductListController::class, 'index'])->name('admin.product.list');

        // User List
        Route::get('userlist', [UserListController::class, 'index'])->name('admin.user.list');
        Route::get('userlist/show/{id}', [UserListController::class, 'show'])->name('admin.user.show');
        // Admin List
        Route::get('adminlist', [AdminListController::class, 'index'])->name('admin.adminlist');
        Route::get('adminlist/create', [AdminListController::class, 'create'])->name('admin.create');
        Route::get('profile', [AdminListController::class, 'adminprofile'])->name('admin.adminprofile');
        Route::post('profile/update/{id}', [AdminListController::class, 'adminprofileupdate'])->name('admin.adminprofile.update');


        // Location
        Route::resource('division', DivisionController::class);
        Route::resource('district', DistrictController::class);
        Route::resource('upazila', UpazilaController::class);
        //Deposit
        Route::get('deposit', [DepositController::class, 'index'])->name('admin.deposit.list');
        //Bids
        Route::get('bids', [BidsController::class, 'bids'])->name('admin.bids');
        //setting
        Route::get('setting', [SettingController::class, 'index'])->name('admin.setting.index');
        Route::get('setting/create', [SettingController::class, 'create'])->name('admin.setting.create');
        Route::post('/setting', [SettingController::class, 'store'])->name('admin.setting.store');
    });
});
Route::get('userChangeStatus', [UserListController::class, 'userChangeStatus']);

Route::get('category/edit/{id}', [CategoryController::class, 'getCategorySingleData'])->name('allCategory');
Route::post('admin/category/update/{id}', [CategoryController::class, 'update'])->name('categoryupdate');

Route::get('subcategory/edit/{id}', [SubCategoryController::class, 'getSubCategorySingleData'])->name('allSubCategory');
Route::post('admin/subcategory/update/{id}', [SubCategoryController::class, 'update'])->name('subcategoryupdate');

Route::get('brand/edit/{id}', [BrandController::class, 'brandSingleData'])->name('allBrand');
Route::post('admin/brand/update/{id}', [BrandController::class, 'update'])->name('brandupdate');
