<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/about', function () {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...";
    $author = "Developed by: Your Name";
    return view('home.about')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("description", $description)
      ->with("author", $author);
})->name("home.about");

Route::get('/contact', function () {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $email = "nohave@email.com";
    $address = "742 de Evergreen Terrace";
    $number = "999999999";
    return view('home.contact')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("email", $email)
      ->with("address", $address)
      ->with("number", $number);
})->name("home.contact");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
