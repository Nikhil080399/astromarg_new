<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\About_UsController;
use App\Http\Controllers\frontend\Astro_ServicesController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\Astromarg_SolutionController;
use App\Http\Controllers\frontend\Chandal_YogaController;
use App\Http\Controllers\frontend\ColorsController;
use App\Http\Controllers\frontend\DaanController;
use App\Http\Controllers\frontend\DharmaController;
use App\Http\Controllers\frontend\GemstonesController;
use App\Http\Controllers\frontend\Grahan_YogController;
use App\Http\Controllers\frontend\Hasta_MudraController;
use App\Http\Controllers\frontend\HavanController;
use App\Http\Controllers\frontend\Kalsarp_DoshController;
use App\Http\Controllers\frontend\Mangal_DoshController;
use App\Http\Controllers\frontend\MantraController;
use App\Http\Controllers\frontend\MetalsController;
use App\Http\Controllers\frontend\Nakshatra_DoshController;
use App\Http\Controllers\frontend\Numerological_SolutionController;
use App\Http\Controllers\frontend\Pitru_DoshController;
use App\Http\Controllers\frontend\PlantsController;
use App\Http\Controllers\frontend\PoojaController;
use App\Http\Controllers\frontend\RudrakshaController;
use App\Http\Controllers\frontend\Sarp_DoshController;
use App\Http\Controllers\frontend\StotraController;
use App\Http\Controllers\frontend\TantraController;
use App\Http\Controllers\frontend\Vastu_ConsulationController;
use App\Http\Controllers\frontend\Vish_YogController;
use App\Http\Controllers\frontend\VratController;
use App\Http\Controllers\frontend\YantraController;

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
Route::get('/',[HomeController::class, 'index'])->name('/');
Route::get('/about-us',[About_UsController::class, 'index'])->name('about-us');
Route::get('/astromarg-solution',[Astromarg_SolutionController::class, 'index'])->name('astromarg-solution');
Route::get('/vastu-consulation',[Vastu_ConsulationController::class, 'index'])->name('vastu-consulation');
Route::get('/numerological-solution',[Numerological_SolutionController::class, 'index'])->name('numerological-solution');
Route::get('/astro-services',[Astro_ServicesController::class, 'index'])->name('astro-services');
Route::get('/blog',[BlogController::class, 'index'])->name('blog');
Route::get('/gemstones',[GemstonesController::class, 'index'])->name('gemstones');
Route::get('/rudraksha',[RudrakshaController::class, 'index'])->name('rudraksha');
Route::get('/metals',[MetalsController::class, 'index'])->name('metals');
Route::get('/colors',[ColorsController::class, 'index'])->name('colors');
Route::get('/hasta-mudra',[Hasta_MudraController::class, 'index'])->name('hasta-mudra');
Route::get('/plants',[PlantsController::class, 'index'])->name('plants');
Route::get('/dharma',[DharmaController::class, 'index'])->name('dharma');
Route::get('/daan',[DaanController::class, 'index'])->name('daan');
Route::get('/vrat',[VratController::class, 'index'])->name('vrat');
Route::get('/havan',[HavanController::class, 'index'])->name('havan');
Route::get('/kalsarp-dosh',[Kalsarp_DoshController::class, 'index'])->name('kalsarp-dosh');
Route::get('/sarp-dosh',[Sarp_DoshController::class, 'index'])->name('sarp-dosh');
Route::get('/pitru-dosh',[Pitru_DoshController::class, 'index'])->name('pitru-dosh');
Route::get('/mangal-dosh',[Mangal_DoshController::class, 'index'])->name('mangal-dosh');
Route::get('/chandal-yoga',[Chandal_YogaController::class, 'index'])->name('chandal-yoga');
Route::get('/vish-yog',[Vish_YogController::class, 'index'])->name('vish-yog');
Route::get('/grahan-yog',[Grahan_YogController::class, 'index'])->name('grahan-yog');
Route::get('/nakshatra-dosh',[Nakshatra_DoshController::class, 'index'])->name('nakshatra-dosh');
Route::get('/tantra',[TantraController::class, 'index'])->name('tantra');
Route::get('/mantra',[YantraController::class, 'index'])->name('mantra');
Route::get('/yantra',[HavanController::class, 'index'])->name('yantra');
Route::get('/pooja',[PoojaController::class, 'index'])->name('pooja');
Route::get('/stotra',[StotraController::class, 'index'])->name('stotra');







Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
