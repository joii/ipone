<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\MediaController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BusinessLocationController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\InterBusinessController;
use Illuminate\Support\Facades\Log;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});


Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
       // return view('dashboard');
    })->name('dashboard');//->middleware('auth:admin');
});
 



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Admin All Routes

// Administrator
Route::get('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
Route::get('admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');
Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');


// Brand
Route::prefix('brand')->group(function(){
    Route::get('/view', [BrandController::class, 'BrandView'])->name('all.brand'); 
    Route::get('/add', [BrandController::class, 'BrandAdd'])->name('brand.add');
    Route::post('/store', [BrandController::class, 'BrandStore'])->name('brand.store');
    Route::get('/edit/{id}', [BrandController::class, 'BrandEdit'])->name('brand.edit');
    Route::post('/update', [BrandController::class, 'BrandUpdate'])->name('brand.update');
    Route::get('/delete/{id}', [BrandController::class, 'BrandDelete'])->name('brand.delete');
});

// Category
Route::prefix('category')->group(function(){
    Route::get('/view', [CategoryController::class, 'CategoryView'])->name('all.category'); 
    Route::get('/add', [CategoryController::class, 'CategoryAdd'])->name('category.add');
    Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');
    Route::post('/update', [CategoryController::class, 'CategoryUpdate'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');
    Route::get('/ajax/{brand_id}', [CategoryController::class, 'GetCategory']);
});

//Sub Category
Route::prefix('subcategory')->group(function(){
    Route::get('/view', [SubcategoryController::class, 'SubcategoryView'])->name('all.subcategory'); 
    Route::get('/add', [SubcategoryController::class, 'SubcategoryAdd'])->name('subcategory.add');
    Route::post('/store', [SubcategoryController::class, 'SubcategoryStore'])->name('subcategory.store');
    Route::get('/edit/{id}', [SubcategoryController::class, 'SubcategoryEdit'])->name('subcategory.edit');
    Route::post('/update', [SubcategoryController::class, 'SubcategoryUpdate'])->name('subcategory.update');
    Route::get('/delete/{id}', [SubcategoryController::class, 'SubcategoryDelete'])->name('subcategory.delete');
    Route::get('/ajax/{category_id}', [SubcategoryController::class, 'GetSubCategory']);
});

// Products
Route::prefix('product')->group(function(){
    Route::get('/view', [ProductController::class, 'ProductView'])->name('all.product'); 
    Route::get('/add', [ProductController::class, 'ProductAdd'])->name('product.add');
    Route::post('/store', [ProductController::class, 'ProductStore'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'ProductEdit'])->name('product.edit');
    Route::post('/update', [ProductController::class, 'ProductUpdate'])->name('product.update');
    Route::get('/delete/{id}', [ProductController::class, 'ProductDelete'])->name('product.delete');
    Route::get('/ajax/{subcategory_id}', [ProductController::class, 'GetProducts']);
    Route::get('/products_galleries/{id}', [ProductController::class, 'ProductGalleryDelete'])->name('product.products_galleries.delete');
    Route::post('/image/update', [ProductController::class, 'ProductGalleryUpdate'])->name('update-product-gallery');
    Route::get('/inactive/{id}', [ProductController::class, 'ProductInactive'])->name('product.inactive');
    Route::get('/active/{id}', [ProductController::class, 'ProductActive'])->name('product.active');
    
});

// Media
Route::prefix('media')->group(function(){
    Route::get('/view', [MediaController::class, 'MediaView'])->name('all.media'); 
    Route::get('/add', [MediaController::class, 'MediaAdd'])->name('media.add');
    Route::post('/store', [MediaController::class, 'MediaStore'])->name('media.store');
    Route::get('/edit/{id}', [MediaController::class, 'MediaEdit'])->name('media.edit');
    Route::post('/update', [MediaController::class, 'MediaUpdate'])->name('media.update');
    Route::get('/delete/{id}', [MediaController::class, 'MediaDelete'])->name('media.delete');
});

// Banner
Route::prefix('banner')->group(function(){
    Route::get('/view', [BannerController::class, 'BannerView'])->name('all.banner'); 
    Route::get('/add', [BannerController::class, 'BannerAdd'])->name('banner.add');
    Route::post('/store', [BannerController::class, 'BannerStore'])->name('banner.store');
    Route::get('/edit/{id}', [BannerController::class, 'BannerEdit'])->name('banner.edit');
    Route::post('/update', [BannerController::class, 'BannerUpdate'])->name('banner.update');
    Route::get('/delete/{id}', [BannerController::class, 'BannerDelete'])->name('banner.delete');
    Route::get('/subcategory/{id}', [BannerController::class, 'BannerViewInSubcategory'])->name('banner.by_subcategory'); 
});

// Business Location
Route::prefix('business_location')->group(function(){
    Route::get('/view', [BusinessLocationController::class, 'BusinessLocationView'])->name('all.business_location'); 
    Route::get('/add', [BusinessLocationController::class, 'BusinessLocationAdd'])->name('business_location.add');
    Route::post('/store', [BusinessLocationController::class, 'BusinessLocationStore'])->name('business_location.store');
    Route::get('/edit/{id}', [BusinessLocationController::class, 'BusinessLocationEdit'])->name('business_location.edit');
    Route::post('/update', [BusinessLocationController::class, 'BusinessLocationUpdate'])->name('business_location.update');
    Route::get('/delete/{id}', [BusinessLocationController::class, 'BusinessLocationDelete'])->name('business_location.delete');
});

// Setting
// Country
Route::prefix('country')->group(function(){
    Route::get('/view', [CountryController::class, 'CountryView'])->name('all.country'); 
    Route::get('/add', [CountryController::class, 'CountryAdd'])->name('country.add');
    Route::post('/store', [CountryController::class, 'CountryStore'])->name('country.store');
    Route::get('/edit/{id}', [CountryController::class, 'CountryEdit'])->name('country.edit');
    Route::post('/update', [CountryController::class, 'CountryUpdate'])->name('country.update');
    Route::get('/delete/{id}', [CountryController::class, 'CountryDelete'])->name('country.delete');
});




// Frontend All Routes
// Homepage Route

// Multi Language All Routes

Route::middleware(['Language'])->group(function () {
    Route::get('/language/english', [LanguageController::class, 'English'])->name('english.language');
    Route::get('/language/thai', [LanguageController::class, 'Thai'])->name('thai.language');
    Route::get('/language/chinese', [LanguageController::class, 'Chinese'])->name('chinese.language');
    
    // Static Page All Routes
    Route::get('/', [IndexController::class, 'index']);
    Route::get('/homepage', [IndexController::class, 'homepage'])->name('homepage');
    Route::get('/aboutus', [PageController::class, 'AboutUsPage'])->name('page.about_us');
    Route::get('/our-business', [PageController::class, 'OurBusinessPage'])->name('page.our_business');
    Route::get('/reach-us', [PageController::class, 'ContactUsPage'])->name('page.reach_us');

    // Brand
    Route::get('/brands', [PageController::class, 'BrandIndexPage'])->name('page.brands');
    Route::get('/brand-hygiene', [PageController::class, 'BrandHygienePage'])->name('page.brand_hygiene');
    Route::get('/brand-vixol', [PageController::class, 'BrandVixolPage'])->name('page.brand_vixol');
    Route::get('/brand-ivy', [PageController::class, 'BrandIvyPage'])->name('page.brand_ivy');
    Route::get('/brand-whiz', [PageController::class, 'BrandWhizPage'])->name('page.brand_whiz');
    Route::get('/brand-dance', [PageController::class, 'BrandDancePage'])->name('page.brand_dance');
    Route::get('/brand-focus', [PageController::class, 'BrandFocusPage'])->name('page.brand_focus');

    // InterBusiness
    Route::get('/inter-business', [InterBusinessController::class, 'InterBusinessPage'])->name('page.inter_business');

    // Products
    // Subcategory Page
    Route::get('/subcategory_view/{category_id}', [PageController::class, 'SubcategoryView'])->name('page.subcategory_view');


});
