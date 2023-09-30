<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SolarPumpController;
use App\Http\Controllers\GirdTieSystemController;
use App\Http\Controllers\OffGirdSystemController;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\VideoGalleryController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\RquirementController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear-cache', function () {
    // ...
    
    // Add the storage:link command here
    $exitCode = Artisan::call('storage:link');
    if ($exitCode === 0) {
        return 'Storage link created successfully.';
    } else {
        return 'Error creating storage link.';
    }
});


Route::get('/learn', function () {
    return view('frontend.learn');
})->name('learn');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/vision', function () {
    return view('frontend.vision_mission');
})->name('vision');

Route::get('/health', function () {
    return view('frontend.health');
})->name('health');

Route::get('/rooftop_details', function () {
    return view('frontend.rooftop_details');
})->name('rooftop_details');

Route::get('/blog_page', function () {
    return view('frontend.blog_page');
})->name('blog_page');


// solar pump
Route::get('/', [SolarPumpController::class, 'indexLatest'])->name('index');
Route::get('solar_pump_products', [SolarPumpController::class, 'index'])->name('solar_pump_products');
Route::post('solar_pump_products', [SolarPumpController::class, 'store']);
Route::get('solarPump/delete/{id}', [SolarPumpController::class, 'destroy']);
Route::get('solar_pump', [SolarPumpController::class, 'show'])->name('pump');
Route::get('get_pump_id', [SolarPumpController::class, 'get_pump_id']);
Route::get('product_detail', [SolarPumpController::class, 'product_detail'])->name('product_detail');
Route::get('solarPump/edit/{id}', [SolarPumpController::class, 'edit']);
Route::post('solarPump/update/{id}', [SolarPumpController::class, 'update'])->name('pump.update');


//Carousel
Route::get('carousel', [CarouselController::class, 'index'])->name('carousel');
Route::post('carousel', [CarouselController::class, 'store']);
Route::get('carousel/delete/{id}', [CarouselController::class, 'destroy']);


// solar grid tie
Route::get('grid_tie_system', [GirdTieSystemController::class, 'index'])->name('grid_tie_system');
Route::post('grid_tie_system', [GirdTieSystemController::class, 'store']);
Route::get('Gird_Tie_system/delete/{id}', [GirdTieSystemController::class, 'destroy']);
Route::get('rooftop', [GirdTieSystemController::class, 'show'])->name('grid');
Route::get('Gird_Tie_system/edit/{id}', [GirdTieSystemController::class, 'edit']);
Route::post('grid/update/{id}', [GirdTieSystemController::class, 'update'])->name('grid.update');

// solar off grid
Route::get('off_grid_system', [OffGirdSystemController::class, 'index'])->name('off_grid_system');
Route::post('off_grid_system', [OffGirdSystemController::class, 'store']);
Route::get('Off_Gird_system/delete/{id}', [OffGirdSystemController::class, 'destroy']);
Route::get('Off_Gird_system/edit/{id}', [OffGirdSystemController::class, 'edit']);
Route::post('offgrid/update/{id}', [OffGirdSystemController::class, 'update'])->name('offgrid.update');

// Enquiry Form
Route::get('admin/pages/enquiry', [EnquiryController::class, 'index'])->name('enquiry_form');
Route::post('admin/pages/enquiry', [EnquiryController::class, 'store']);
Route::get('enquiry/delete/{id}', [EnquiryController::class, 'destroy']);

// requirement Form
Route::get('admin/pages/requirement', [RquirementController::class, 'index'])->name('requirement_form');
Route::post('admin/pages/requirement', [RquirementController::class, 'store']);
Route::get('requirement/delete/{rquirement}', [RquirementController::class, 'destroy'])->name('requirement_delete');


// image gallery
Route::get('image_gallery', [ImageGalleryController::class, 'index'])->name('image_gallery');
Route::post('insert_imageGall', [ImageGalleryController::class, 'store']);
Route::get('Image_gallery/delete/{id}', [ImageGalleryController::class, 'destroy']);
Route::get('images', [ImageGalleryController::class, 'show'])->name('images');
Route::get('Image_gallery/edit/{id}', [ImageGalleryController::class, 'edit']);
Route::post('image/update/{id}', [ImageGalleryController::class, 'update'])->name('image.update');

// video gallery
Route::get('video_gallery', [VideoGalleryController::class, 'index'])->name('video_gallery');
Route::post('insert_video', [VideoGalleryController::class, 'store']);
Route::get('video_gallery/delete/{id}', [VideoGalleryController::class, 'destroy']);
Route::get('video', [VideoGalleryController::class, 'show'])->name('video');
Route::get('video_gallery/edit/{id}', [VideoGalleryController::class, 'edit']);
Route::post('video/update/{id}', [VideoGalleryController::class, 'update'])->name('video.update');

// interest dropdown for enquiry
Route::get('interest', [InterestController::class, 'index'])->name('interest');
Route::post('interest_cat', [InterestController::class, 'store']);
Route::get('interest/delete/{id}', [InterestController::class, 'destroy']);
Route::get('enquiry', [InterestController::class, 'show'])->name('enquiry');
Route::get('interest/edit/{id}', [InterestController::class, 'edit']);
Route::post('interest/update/{id}', [InterestController::class, 'update'])->name('interest.update');

// Blog
Route::get('blog', [BlogController::class, 'index'])->name('blog_back');
Route::post('blog', [BlogController::class, 'store']);
Route::get('Blog/delete/{id}', [BlogController::class, 'destroy']);
Route::get('blog_front', [BlogController::class, 'show'])->name('blog_front');
Route::get('Blog/edit/{id}', [BlogController::class, 'edit']);
Route::post('blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::get('/blog/{id}', [BlogController::class, 'blogPage'])->name('blog_page'); 

// login 
Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginController::class, 'login']);

Route::get('logout', [LoginController::class, 'logout']);
//  login 

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
// user 
Route::get('adduser', [UserController::class, 'index'])->middleware(['auth'])->name('adduser');

Route::post('register', [UserController::class, 'register'])->name('register');

Route::get('userlist', [UserController::class, 'show'])->middleware(['auth'])->name('userlist');

Route::get('user/delete/{id}', [UserController::class, 'delete']);

        // user 