<?php

use App\Http\Controllers\Setting\Admin\EmployeeController;
use App\Http\Controllers\Setting\Employee\ProfileController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\DealsController;
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


/*
|--------------------------------------------------------------------------
| Laravel Breeze
|--------------------------------------------------------------------------
|
| Authentication routes provided by Breeze
*/
require __DIR__ . '/auth.php';

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return redirect('home');
    });

    // Home
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // Leads
    
    Route::resource('leads', LeadsController::class);

    // Contacts
    Route::resource('contacts', ContactsController::class);

    // Activities
    Route::resource('activities', ActivitiesController::class);

    // Deals
    Route::resource('deals', DealsController::class);

    // Products
    Route::get('/products', function(){
        return view ('products');
    })->name('products');

    // Deals
    


    Route::prefix('settings')->group(function () {
        // Profile
        Route::get('profile', [ProfileController::class, 'index']);
        Route::put('profile', [ProfileController::class, 'update']);

        // Change password
    });




    /*
     |--------------------------------------------------------------------------
     | Admin Role Routes
     |--------------------------------------------------------------------------
    */
    Route::middleware(['can:access-settings'])->group(function () {
        Route::prefix('settings')->group(function () {
            Route::resource('employees', EmployeeController::class);
        });
    });
});
