<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\ProfileController;
>>>>>>> master
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

<<<<<<< HEAD
Route::get('/dev',function(){
    return view('dev');
});

Route::get('/company',function(){
    return view('company');
});
=======
//yet to decide whether to use /dashboard or the new /admin in
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        //sample link that return view, to get compoment from there
        Route::view('/buttons', 'admin.buttons')->name('admin.buttons');
        Route::view('/cards', 'admin.cards')->name('admin.cards');
        Route::view('/charts', 'admin.charts')->name('admin.charts');
        Route::view('/forms', 'admin.forms')->name('admin.forms');
        Route::view('/modals', 'admin.modals')->name('admin.modals');
        Route::view('/tables', 'admin.tables')->name('admin.tables');

        //sample link that return view, to get compoment from there
        Route::group(['prefix' => 'pages', 'as' => 'admin.page.'], function () {
            Route::view('/404-page', 'admin.pages.404')->name('404');
            Route::view('/blank-page', 'admin.pages.blank')->name('blank');
            Route::view('/create-account-page', 'admin.pages.create-account')->name('create-account');
            Route::view('/forgot-password-page', 'admin.pages.forgot-password')->name('forgot-password');
            Route::view('/login-page', 'admin.pages.login')->name('login');

        });

        //proposed new backend
        Route::view('/admin','admin.index')->name('admin.home');

});

require __DIR__.'/auth.php';


// Route::get('/dev',function(){
//     return view('dev');
// });

// Route::get('/company',function(){
//     return view('company');
// });
>>>>>>> master

Route::get('/jobs',function(){
    return view('jobs');
});

Route::get('/events',function(){
    return view('events');
<<<<<<< HEAD
});
=======
});


>>>>>>> master
