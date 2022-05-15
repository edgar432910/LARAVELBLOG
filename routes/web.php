<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PdfController;
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