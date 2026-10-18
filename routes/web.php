<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;


Route::get('/', function () {
    return view('Home',[
        "title"=> "Home",
    ]);

});


Route::get('/contact', function () {
    return view('Contact', [
        "title"=> "Contact",
    ]);

});

Route::get('/profile', function () {
    return view('Profile', [
        "title"=> "Profile",
        "name" => "viky",
        "nim" =>13242520051,
        "prodi" => "Teknologi Informasi",
        "gambar"    => "Eisa1.jpg",
    ]);
    
});



Route::get('/berita', function () {

    return view('Berita', [
        "title"=> "Berita",
        "beritas" => Berita::ambilberita(),
    ]);
    
});


Route::get('/berita/{Slug}', function ($Slug) {
     return view('beritatunggal', [
        "title"=> Berita::getTitle($Slug),
        "berita" => Berita::getBerita($Slug),
    ]);
    
});





