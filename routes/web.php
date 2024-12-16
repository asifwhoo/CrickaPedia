<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerController;

use App\Http\Controllers\StadiumController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\IconicMomentController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\BlogController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

//Route::get('/admindashboard', function () {
    //return view('admin/admindashboard2');
//});
Route::get('/admindashboard',[AdminController::class,'view']);


//Route::get('/add_player', function () {
   // return view('admin/add_player');
//});

Route::get('/add_player',[PlayerController::class,'add_player_view']);

Route::get('/add_player/view',[PlayerController::class,'view']);

Route::post('/player/store', [PlayerController::class, 'store'])->name('player.store');



Route::get('/add_blog', function () {
    return view('admin/add_blog');
});






Route::get('/add_iconic',[IconicMomentController::class,'add_iconic_view']);
Route::get('/add_iconic/view',[IconicMomentController::class,'iconic_view']);
Route::post('/iconic/store',[IconicMomentController::class,'store'])->name('iconic.store');
Route::get('/see_iconic',[IconicMomentController::class,'see_iconic']);

Route::get('/see_iconic2',[IconicMomentController::class,'see_iconic2']);

Route::delete('/iconic_moments/{id}', [IconicMomentController::class, 'destroy'])->name('iconic_moments.destroy');


//routes for adding stadiums:


Route::get('/add_stadium',[StadiumController::class,'add_stadium_view']);

Route::get('/add_stadium/view',[StadiumController::class,'view']);

Route::post('/stadium/store', [StadiumController::class, 'store'])->name('stadium.store');

Route::get('/see_stadium_details2',[StadiumController::class,'see_stadium_details2']);

Route::delete('/stadium/{id}', [StadiumController::class, 'destroy'])->name('stadium.destroy');




//routes for adding stadium ends here




Route::get('/show_player', function () {
    return view('admin/show_player');
});





//blogs


Route::get('/see_blogs',[BlogController::class,'create_blog_view']);

Route::get('/create_blog',[BlogController::class,'create_blog']);

Route::post('/create_blog/store',[BlogController::class,'store'])->name('create_blog.store');

Route::get('/create_blog/view',[BlogController::class,'create_blog_view']);



//routes for product


Route::get('/add_product',[ProductController::class,'add_product_view']);

Route::get('/add_product/view',[ProductController::class,'product_view']);

Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/show_product',[ProductController::class,'show_product']);

Route::get('/show_product2',[ProductController::class,'show_product2']);

Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

//routes for product ends here



//match details route






Route::get('/logout',[BlogController::class,'create_blog_view'])->name('see_blogs');

Route::get('/logout', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //Route::get('/dashboard', function () {
        //return view('dashboard');
   // })->name('dashboard');


   



   Route::get('/dashboard', [DashboardController::class, 'dashboard_view'])->name('dashboard');

   Route::get('/see_blogs',[BlogController::class,'create_blog_view'])->name('see_blogs');


    Route::get('/match_details', [DashboardController::class, 'dashboard_view'])->name('dashboard');



    Route::get('/see_iconic',[IconicMomentController::class,'see_iconic'])->name('see_iconic');

    

    Route::get('/see_stadium_details',[StadiumController::class,'see_stadium_details'])->name('see_stadium_details');


});
