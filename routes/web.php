<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;

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
Route::middleware('guest')->group(function (){
    Route::get('/', function () {
        return view('home1');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/register', function () {
        return view('register');
    });
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'show'])->name('logins');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::middleware('auth', 'admin')->group(function (){
    Route::get('/statistique', [UserController::class, 'statistics'])->name('statistique');
    Route::get('/Categories', [CategoryController::class, 'view'])->name('categories');
    Route::post('/Categories', [CategoryController::class, 'create'])->name('addCategorie');
    Route::delete('/Categories/{category}', [CategoryController::class, 'delete'])->name('deleteCategorie');
    //still not working
    Route::put('/Categorie', [CategoryController::class, 'update'])->name('updateCategorie');
      
    Route::get('/admin_annonce_ref/{id}', [AdminController::class, 'ArchiverAnnonce'])->name('admin.annonceref');
    Route::get('/admin_annonce_acc/{id}', [AdminController::class, 'dearchiverAnnonce'])->name('admin.annonceacc');

    Route::get('/admin_users_desactivate/{id}', [AdminController::class, 'desactivateUser'])->name('admin.users.desa');
    Route::get('/admin_users_activate/{id}', [AdminController::class, 'activateUser'])->name('admin.users.acti');
    Route::get('/annonces', [AnnonceController::class, 'viewAll'])->name('admin.annonces');
    Route::get('/Users', [UserController::class, 'viewUsers'])->name('users')->middleware('auth');
    Route::get('/users/search', [UserController::class, 'searchUsers'])->name('users.search');
    Route::get('/Allannonces', [AnnonceController::class, 'viewAll'])->name('viewAll');


});

Route::middleware('auth', 'client')->group(function (){
    Route::get('/home', [AnnonceController::class, 'viewClient'])->name('home');
    Route::post('/annonce/search', [AnnonceController::class, 'viewClient'])->name('events.search');
    Route::get('/details/{id}', [AnnonceController::class, 'showDetails'])->name('details');
    Route::get('/annonces/{id}/reserve', [AnnonceController::class, 'showReserveForm'])->name('annonces.reserveForm');
    Route::post('/annonces/{id}/reserve', [ReservationController::class, 'reserve'])->name('annonces.reserve');
    
});


Route::middleware('auth', 'renter')->group(function (){
    Route::get('/dashboard', [AnnonceController::class, 'viewlandlord'])->name('landlord.dashboard');
        Route::get('/create', [AnnonceController::class, 'createAnnonce'])->name('addAnnonce');
        Route::post('/create', [AnnonceController::class, 'create'])->name('addAnnonce');
        Route::get('/annonce/{id}/edit', [AnnonceController::class, 'EditAnnoce'])->name('annonces.edit');
        Route::put('/annonce/{id}/update', [AnnonceController::class, 'update'])->name('annonces.update');
});












Route::middleware('auth')->group(function (){
  
        Route::put('/ban/user/{userId}',  [UserController::class, 'banUser'])->name('ban.user');
        Route::put('/Unban/user/{userId}',  [UserController::class, 'unbanUser'])->name('unban.user');
        Route::delete('/Allannonces/{annonce}', [AnnonceController::class, 'delete'])->name('deleteAd');
      
    });


