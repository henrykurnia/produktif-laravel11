<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManagementUsercontroller;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\backend\PengalamanKerjaController;
use App\Http\Controllers\backend\PendidikanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ApiPendidikanController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});


// Acara 3
Route::get('foo', function(){
    return 'Hello World';
});

Route::get('user/{id}', function ($id) {
    return 'User' .$id;
} );

Route::get('post/{post}/comments/{comment}', function ($postId, $commentId) {
     return "Post ID: $postId, Comment ID: $commentId";

});

Route::get('/user', [UserController::class, 'index']);

Route::view('/profile', 'profile'); // Menampilkan form
Route::post('/profile', [ProfileController::class, 'store']); // Menangani form submit

Route::redirect('/here', '/there');

Route::redirect('/here', 'there', 301);
Route::view('/welcome2', 'welcome');
Route::view('/welcome3', 'welcome')->name('Taylor');
Route::get('user/acara3/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/acara3/{name?}', function ($name = "John") {
    return $name;
});
Route::get('user//acara3/{name}', function ($name) {

})->where('name', '[A-Za-z]+');
Route::get('user/{id}', function ($id) { })->where('id', '[0-9]+');
Route::get('user/{id}{name}', function ($id, $name) { })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
Route::get('user/{id}', function ($id) {
});
Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');

// Acara 4
Route::get('/user/{id}/profile', function ($id) {
    return "Profil user dengan ID $id";
})->name('profile');

Route::get('/generate-url', function () {
    $url = route('profile', ['id' => 5]);
    return "URL ke profile: $url";
});

Route::get('/redirect-profile', function () {
    return redirect()->route('profile', ['id' => 5]);
});

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/first', function () {
    });
    Route::get('/user/profile', function () {
    });
});
Route::
        namespace('Admin')->group(function () { });

Route::domain('{account).myapp.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
    });
});
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
    });
});
Route::name('admin')->group(function () {
    Route::get('users', function () {
    })->name('users');
});

//Acara 7
Route::resource('/homeacara7', HomeController::class);

//Acara 8
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('product', ProductController::class);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Acara 12
Route:: get('admin/profile', function () {
    //
})->middleware('auth');

Route::get('/', function (){
    //
})->middleware('first', 'second');

Route::get('admin/profile', function () {
    //
})->middleware(CheckAge::class);

Route:: get('/', function () {
    //
})->middleware('web');

Route::group(['middleware'=> ['web']], function (){
    //
});

Route::middleware(['web', 'subscribed'])->group(function (){
    //
});

Route::put('post/{id}', function ($id){
    //
})->middleware('role:editor');