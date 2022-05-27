<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PdfController;

use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\SpotifyController;
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




Route::get('posts',[PostController::class,'index'])->middleware(['admi'])->name('posts.index');
Route::get('blog',[PostController::class,'invitados'])->name('blog');
Route::get('blog/{post}',[PostController::class,'invitadosshow'])->name('blog.show');

Route::get('posts/create',[PostController::class,'create'])->name('posts.create')->middleware(['admi']);

Route::post('posts',[PostController::class,'store'])->name('posts.store')->middleware(['admi']);

Route::get('posts/{post}',[PostController::class,'show'] )->name('posts.show')->middleware(['admi']);

Route::get('posts/{post}/edit', [PostController::class,'edit'] )->name('posts.edit')->middleware(['admi']);

Route::get('prosperamente', [PostController::class,'mostrar'] )->middleware(['auth'])->name('prosperamente');


Route::delete('posts/{post}',[PostController::class,'destroy'])->name('posts.destroy')->middleware(['admi']);
Route::get('posts/image/{imagen_name}', [PostController::class,'getImage'] )->name('posts.imagen');

Route::get('admin',[AdminController::class,'index'])->middleware(['admi'])->name('users.index');
Route::delete('admin/{user}',[AdminController::class,'destroy'])->name('user.destroy')->middleware(['admi']);
Route::get('admin/usuarios',[AdminController::class,'usuarios'])->name('usuarios')->middleware(['admi']);

Route::get('pdfs',[PdfController::class,'index'])->name('pdfs.index')->middleware(['admi']);

Route::get('pdfs/create',[PdfController::class,'create'])->name('pdfs.create')->middleware(['admi']);
Route::post('pdfs',[PdfController::class,'store'])->name('pdfs.store');
Route::get('pdfs/image/{imagen_name}', [PdfController::class,'getImage'] );
Route::get('pdfs/pdf/{imagen_name}', [PdfController::class,'getPdf'] )->name('pdfs.pdf');
Route::delete('pdfs/{pdf}',[PdfController::class,'destroy'])->name('pdfs.destroy')->middleware(['admi']);;


// controladores youtube
Route::get('youtube',[YoutubeController::class,'index'])->name('youtube.index')->middleware(['admi']);
Route::post('youtube',[YoutubeController::class,'store'])->name('youtube.store');
 Route::get('youtube/create',[YoutubeController::class,'create'])->name('youtube.create')->middleware(['admi']);
 Route::delete('youtube/{youtube}',[YoutubeController::class,'destroy'])->name('youtube.destroy')->middleware(['admi']);

 Route::get('youtube/{youtube}/edit',[YoutubeController::class,'edit'])->name('youtube.edit')->middleware(['admi']);
 Route::put('youtube/{youtube}',[YoutubeController::class,'update'])->name('youtube.update')->middleware(['admi']);

// controladores spotify
Route::get('spotify',[SpotifyController::class,'index'])->name('spotify.index')->middleware(['admi']);
Route::post('spotify',[SpotifyController::class,'store'])->name('spotify.store')->middleware(['admi']);
Route::get('spotify/image/{imagen_name}', [SpotifyController::class,'getImage'] )->middleware(['admi']);
 Route::get('spotify/create',[SpotifyController::class,'create'])->name('spotify.create')->middleware(['admi']);
Route::delete('spotify/{spotify}',[SpotifyController::class,'destroy'])->name('spotify.destroy')->middleware(['admi']);



Route::get('/', function () {
    return view('pag.index');
})->name('inicio');

//landing
Route::get('/Elfindeltunel', function () {
    return view('landing.elfindeltunel'); 
})->name('findeltunel');


Route::get('/sobremi', function () {
    return view('pag.Sobremi');
});
Route::get('/Colegiodevida', function () {
    return view('landing.Colegiodevida'); 
})->name('Colegiodevida');




require __DIR__.'/auth.php';