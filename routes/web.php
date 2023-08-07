<?php

use App\Http\Controllers\Frontend\FileOperationController;
use App\Http\Controllers\Frontend\HomeController;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
route::get('test',function(){
    return phpinfo();

});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
//     ],
//     function () {
//     }
// );



Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/all', [HomeController::class, 'all'])->name('all');
Route::get('/Geocast', [HomeController::class, 'voice'])->name('voice');
Route::get('/single/{id}', [HomeController::class, 'single'])->name('single');
Route::get('/voicesingle/{id}', [HomeController::class, 'voicesingle'])->name('voicesingle');
Route::get('/Geo-gallery', [HomeController::class, 'getGeoGallaey'])->name('geo_gallary');
Route::get('/geo-library', [HomeController::class, 'getGeoLibrary'])->name('geo_library');
Route::get('/about-initiativ', [HomeController::class, 'getAboutInitiativ'])->name('about_initiativ');
Route::get('/about-foundr', [HomeController::class, 'getAboutFounder'])->name('about_foundr');

route::prefix('geo-library/file/')->group(function(){

    route::get('show/{id}',[FileOperationController::class,'showFile'])->name('file.show');
    route::get('download/{id}',[FileOperationController::class,'download'])->name('file.download');

});

route::prefix('geo-gallary/file/')->group(function(){

    route::get('download/{id}',[FileOperationController::class,'downloadVideo'])->name('video.download');

});


require __DIR__ . '/auth.php';
Route::get('/cat/{id}', [HomeController::class, 'cat'])->name('cat');
