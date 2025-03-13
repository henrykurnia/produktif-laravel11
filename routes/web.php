<?php

use Illuminate\Support\Facades\Route;

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