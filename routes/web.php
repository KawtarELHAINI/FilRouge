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
// Route::resource('categories', CategoryController::class);


// Route::get('/Categories', [CategoryController::class, 'view'])->name('categories');
// Route::post('/Categories', [CategoryController::class, 'create'])->name('addCategorie');
// Route::delete('/Categories/{category}', [CategoryController::class, 'delete'])->name('deleteCategorie');
// //still not working
// Route::put('/Categorie', [CategoryController::class, 'update'])->name('updateCategorie');

// // Route::prefix('admin')->group(function () {
//     Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
//     Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
//     Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
//     Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
//     Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
//     Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
// });


// Route::get('/categories', [CarCategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/create', [CarCategoryController::class, 'create'])->name('categories.create');
// Route::post('/categories', [CarCategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories/{category}/edit', [CarCategoryController::class, 'edit'])->name('categories.edit');
// Route::put('/categories/{category}', [CarCategoryController::class, 'update'])->name('categories.update');
// Route::delete('/categories/{category}', [CarCategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/admin/statistiques' , function()
{
    return view('admin.statistiques');
});

// Route::get('/admin/category' , function()
// {
//     return view('admin/categories');
// });

Route::get('/admin/cars' , function()
{
    return view('admin.cars');
});

Route::get('/admin/users' , function()
{
    return view('admin.users');
});

Route::get('/admin/test' , function()
{
    return view('admin.test');
});



// Route::get('/annonces', [AnnonceController::class, 'viewAll'])->name('admin.annonces');
// Route::get('/statistique', [UserController::class, 'statistics'])->name('statistique');
// // Route::get('/Allannonces', [AnnonceController::class, 'adStats'])->name('adstats');
// Route::get('/Allannonces', [AnnonceController::class, 'viewAll'])->name('viewAll');
// Route::delete('/Allannonces/{annonce}', [AnnonceController::class, 'delete'])->name('deleteAd');
// // });
//     Route::get('/Users', [UserController::class, 'viewUsers'])->name('users');
//     Route::get('/users/search', [UserController::class, 'searchUsers'])->name('users.search');
//     Route::put('/ban/user/{userId}',  [UserController::class, 'banUser'])->name('ban.user');
//     Route::put('/Unban/user/{userId}',  [UserController::class, 'unbanUser'])->name('unban.user');
// // Route::middleware('auth', 'advertiser')->group(function () {
// Route::get('/dashboard', [AnnonceController::class, 'viewlandlord'])->name('landlord.dashboard');
// Route::post('/create', [AnnonceController::class, 'create'])->name('addAnnonce');
// Route::put('/annonce/{id}', [AnnonceController::class, 'create'])->name('annonces.update');

// // });



// Route::post('/dashboard/search', [AnnonceController::class, 'search'])->name('search');
// Route::get('/annonces', [AnnonceController::class, 'show'])->name('show.annonce');



// Route::middleware('auth', 'banned')->group(function () {

    Route::get('/home', [AnnonceController::class, 'viewClient'])->name('home');
    // Route::get('/', [AnnonceController::class, 'viewvisiteur'])->name('home1');

    Route::post('/annonce/search', [AnnonceController::class, 'viewClient'])->name('events.search');
    Route::get('/details/{id}', [AnnonceController::class, 'showDetails'])->name('details');


    // Route::middleware('advertiser')->group(function () {
        Route::get('/dashboard', [AnnonceController::class, 'viewlandlord'])->name('landlord.dashboard');
        Route::get('/create', [AnnonceController::class, 'createAnnonce'])->name('addAnnonce');
        Route::post('/create', [AnnonceController::class, 'create'])->name('addAnnonce');
        Route::get('/annonce/{id}/edit', [AnnonceController::class, 'EditAnnoce'])->name('annonces.edit');
        Route::put('/annonce/{id}/update', [AnnonceController::class, 'update'])->name('annonces.update');


    // Route::middleware('admin')->group(function () {
        Route::get('/Categories', [CategoryController::class, 'view'])->name('categories');
        Route::post('/Categories', [CategoryController::class, 'create'])->name('addCategorie');
        Route::delete('/Categories/{category}', [CategoryController::class, 'delete'])->name('deleteCategorie');
        //still not working
        Route::put('/Categorie', [CategoryController::class, 'update'])->name('updateCategorie');
        Route::get('/annonces', [AnnonceController::class, 'viewAll'])->name('admin.annonces');
        Route::get('/Users', [UserController::class, 'viewUsers'])->name('users');
        Route::get('/users/search', [UserController::class, 'searchUsers'])->name('users.search');
        Route::put('/ban/user/{userId}',  [UserController::class, 'banUser'])->name('ban.user');
        Route::put('/Unban/user/{userId}',  [UserController::class, 'unbanUser'])->name('unban.user');
        Route::get('/statistique', [UserController::class, 'statistics'])->name('statistique');
        // Route::get('/Allannonces', [AnnonceController::class, 'adStats'])->name('adstats');
        Route::get('/Allannonces', [AnnonceController::class, 'viewAll'])->name('viewAll');
        Route::delete('/Allannonces/{annonce}', [AnnonceController::class, 'delete'])->name('deleteAd');
        // Route::get('/annonces', [UserController::class, 'stats'])->name('stats');



            Route::post('/annonces/reserve/{annonce}', [ReservationController::class, 'reserve'])->name('annonces.reserve');
            Route::post('/reservations/ticket/{id}', [ReservationController::class, 'generateTicket'])->name('annonces.ticket');
            Route::post('/showticket/{event}', [ReservationController::class, 'showTicket'])->name('showticket');
            
            
            
Route::get('/utilisateur.index' , function()
{
    return view('utilisateur.index');
});