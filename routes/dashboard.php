<?php

use App\Http\Controllers\Dashboard\AboutInitiativeController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\AdminProfileController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\FooterController;
use App\Http\Controllers\Dashboard\FounderSpeechController;
use App\Http\Controllers\Dashboard\GeoGallaryController;
use App\Http\Controllers\Dashboard\GeologylipraryController;
use App\Http\Controllers\Dashboard\ReviewController;
use App\Http\Controllers\Dashboard\VoiceController;
use App\Http\Controllers\Dashboard\MainCategoryController;
use Illuminate\Support\Facades\Hash;
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

// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
//     ],
//     function () {

//     }
// );
//

Route::prefix('admin')->middleware(['auth'])->name('dashboard.')->group(function () {

    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    ######################### Begin users Route     ########################
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('create', [UserController::class, 'create'])->name('users.create');
        Route::post('store', [UserController::class, 'store'])->name('users.store');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('update/{id}', [UserController::class, 'update'])->name('users.update');
        Route::get('delete/{id}', [UserController::class, 'destroy'])->name('users.delete');
        Route::get('changeStatus/{id}', [UserController::class, 'changeStatus'])->name('users.status');
    });
    ######################### End users Route      ########################

    ######################### Begin maincategories Route     ########################
    Route::group(['prefix' => 'maincategories'], function () {
        Route::get('/', [MainCategoryController::class, 'index'])->name('maincategories.index');
        Route::get('create', [MainCategoryController::class, 'create'])->name('maincategories.create');
        Route::post('store', [MainCategoryController::class, 'store'])->name('maincategories.store');
        Route::get('edit/{id}', [MainCategoryController::class, 'edit'])->name('maincategories.edit');
        Route::post('update/{id}', [MainCategoryController::class, 'update'])->name('maincategories.update');
        Route::get('delete/{id}', [MainCategoryController::class, 'destroy'])->name('maincategories.delete');
    });
    ######################### End maincategories Route      ########################
    ######################### Begin admins Route     ########################
    Route::group(['prefix' => 'admins'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admins.index');
        Route::get('create', [AdminController::class, 'create'])->name('admins.create');
        Route::post('store', [AdminController::class, 'store'])->name('admins.store');
        Route::get('edit/{id}', [AdminController::class, 'edit'])->name('admins.edit');
        Route::post('update/{id}', [AdminController::class, 'update'])->name('admins.update');
        Route::get('delete/{id}', [AdminController::class, 'delete'])->name('admins.delete');
    });
    ######################### End admins Route      ########################
    ######################### Begin reviews Route     ########################
    Route::group(['prefix' => 'reports'], function () {
        Route::get('/', [ReviewController::class, 'index'])->name('reviews.index');
        Route::get('create', [ReviewController::class, 'create'])->name('reviews.create');
        Route::post('store', [ReviewController::class, 'store'])->name('reviews.store');
        Route::get('edit/{id}', [ReviewController::class, 'edit'])->name('reviews.edit');
        Route::post('update/{id}', [ReviewController::class, 'update'])->name('reviews.update');
        Route::get('delete/{id}', [ReviewController::class, 'delete'])->name('reviews.delete');
    });
    ######################### End reviews Route      ########################
    ######################### Begin voices Route     ########################
    Route::group(['prefix' => 'voices'], function () {
        Route::get('/', [VoiceController::class, 'index'])->name('voices.index');
        Route::get('create', [VoiceController::class, 'create'])->name('voices.create');
        Route::post('store', [VoiceController::class, 'store'])->name('voices.store');
        Route::get('edit/{id}', [VoiceController::class, 'edit'])->name('voices.edit');
        Route::post('update/{id}', [VoiceController::class, 'update'])->name('voices.update');
        Route::get('delete/{id}', [VoiceController::class, 'delete'])->name('voices.delete');
    });
    ######################### End voices Route      ########################

    ######################### begin geo gallary     ##########################
    Route::group(['prefix' => 'geo.gallary'], function () {
        Route::get('/', [GeoGallaryController::class, 'index'])->name('geo_gallary.index');
        Route::get('create', [GeoGallaryController::class, 'create'])->name('geo_gallary.create');
        Route::post('store', [GeoGallaryController::class, 'store'])->name('geo_gallary.store');
        Route::get('edit/{id}', [GeoGallaryController::class, 'edit'])->name('geo_gallary.edit');
        Route::post('update/{id}', [GeoGallaryController::class, 'update'])->name('geo_gallary.update');
        Route::get('delete/{id}', [GeoGallaryController::class, 'delete'])->name('geo_gallary.delete');
    });
    ######################### end geo gallary       ###########################

 ######################### begin geo library     ##########################
 Route::group(['prefix' => 'geology.library'], function () {
    Route::get('/', [GeologylipraryController::class, 'index'])->name('geo_lib.index');
    Route::get('create', [GeologylipraryController::class, 'create'])->name('geo_lib.create');
    Route::post('store', [GeologylipraryController::class, 'store'])->name('geo_lib.store');
    Route::get('edit/{id}', [GeologylipraryController::class, 'edit'])->name('geo_lib.edit');
    Route::post('update/{id}', [GeologylipraryController::class, 'update'])->name('geo_lib.update');
    Route::get('delete/{id}', [GeologylipraryController::class, 'delete'])->name('geo_lib.delete');
});
######################### end geo library       ###########################

######################### begin aboutInitiative     ##########################
Route::group(['prefix' => 'aboutInitiative'], function () {
    Route::get('/', [AboutInitiativeController::class, 'index'])->name('aboutInitiative.index');
    Route::get('create', [AboutInitiativeController::class, 'create'])->name('aboutInitiative.create');
    Route::post('store', [AboutInitiativeController::class, 'store'])->name('aboutInitiative.store');
    Route::get('edit', [AboutInitiativeController::class, 'edit'])->name('aboutInitiative.edit');
    Route::post('update', [AboutInitiativeController::class, 'update'])->name('aboutInitiative.update');
    Route::get('delete', [AboutInitiativeController::class, 'delete'])->name('aboutInitiative.delete');
});
######################### end aboutInitiative       ###########################



######################### begin FounderSpeech     ##########################
Route::group(['prefix' => 'founder-speech'], function () {
    Route::get('/', [FounderSpeechController::class, 'index'])->name('founder_speech.index');
    Route::get('create', [FounderSpeechController::class, 'create'])->name('founder_speech.create');
    Route::post('store', [FounderSpeechController::class, 'store'])->name('founder_speech.store');
    Route::get('edit', [FounderSpeechController::class, 'edit'])->name('founder_speech.edit');
    Route::post('update', [FounderSpeechController::class, 'update'])->name('founder_speech.update');
    Route::get('delete', [FounderSpeechController::class, 'delete'])->name('founder_speech.delete');
});
######################### end FounderSpeech       ###########################




    // ######################### Begin brands Route     ########################
    // Route::group(['prefix' => 'brands'], function () {
    //     Route::get('/', [BrandController::class, 'index'])->name('brands.index');
    //     Route::get('create', [BrandController::class, 'create'])->name('brands.create');
    //     Route::post('store', [BrandController::class, 'store'])->name('brands.store');
    //     Route::get('edit/{id}', [BrandController::class, 'edit'])->name('brands.edit');
    //     Route::post('update/{id}', [BrandController::class, 'update'])->name('brands.update');
    //     Route::get('delete/{id}', [BrandController::class, 'delete'])->name('brands.delete');
    // });
    // ######################### End brands Route      ########################
    // ######################### Begin orders Route     ########################
    // Route::group(['prefix' => 'orders'], function () {
    //     Route::get('/', [OrderController::class, 'index'])->name('orders.index');
    //     Route::get('create', [OrderController::class, 'create'])->name('orders.create');
    //     Route::post('store', [OrderController::class, 'store'])->name('orders.store');
    //     Route::get('edit/{id}', [OrderController::class, 'edit'])->name('orders.edit');
    //     Route::post('update/{id}', [OrderController::class, 'update'])->name('orders.update');
    //     Route::get('delete/{id}', [OrderController::class, 'delete'])->name('orders.delete');
    // });
    // ######################### End orders Route      ########################

    Route::group(['prefix' => 'manageFront'], function () {
        Route::get('footer', [FooterController::class, 'footer'])->name('manageFront.footer');
        Route::get('editFooter/{id}', [FooterController::class, 'editFooter'])->name('manageFront.editFooter');
        Route::post('updateFooter/{id}', [FooterController::class, 'updateFooter'])->name('manageFront.updateFooter');
        Route::get('deleteFooter/{id}', [FooterController::class, 'deleteFooter'])->name('manageFront.deleteFooter');
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout', [AdminController::class, 'destroy'])->name('logout');
        Route::view('login', 'dashboard.auth.login')->name('auth.login');
    });
}); //end of dashboard routes


Route::prefix('admin')->middleware(['guest'])->group(function () {
    Route::get('login',  [AdminController::class, 'getLogin'])->name('dashboard.login');
    Route::post('login',  [AdminController::class, 'login'])->name('admin.login');
});

Route::middleware(['guest'])->prefix('admin-profile')->group(function () {
    Route::get('/show', [AdminProfileController::class,'index'])->name('admin.profile');
    Route::post('/update', [AdminProfileController::class,'update'])->name('admin.profile.update');
   
});
require __DIR__ . '/auth.php';
