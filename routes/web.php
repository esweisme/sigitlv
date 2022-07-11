<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SitemapController;

use App\Models\Post;

Route::get('/', function () {
    return view('front.home');
});

Route::get('/blog',[PostController::class,'blog']);
Route::get('/catatan',[PostController::class,'note']);
Route::get('/category/{slug}',[PostController::class,'category']);
Route::get('/tag/{slug}',[PostController::class,'tag']);

Route::get('/kontak',[PesanController::class,'index']);
Route::post('/kontak',[PesanController::class,'store']);


Route::get('/login', function () {
    return view('admin.login');
})->name('signin');

Route::get('/tes/{id}', function ($id) {
    $posts = Post::find($id);
    echo $posts->user->username." ".$posts->user->email;
	// foreach($posts->tags as $tag){
	// 	echo $tag->tag.", ";
	// }


});

Route::post('/logincek',[LoginController::class,'postlogin'])->name('postlogin');


Route::get('/sitemap.xml',[SitemapController::class,'index']);

//Route::get('/catatan/{slug}',[PostController::class,'single']);


Route::group(['middleware' => ['auth']], function ()
{
	
	Route::group(['middleware' => ['cekrole:operator,admin']], function () {
		Route::get('/dashboard', [LoginController::class,'dashboard']);
		Route::get('/admin/post',[PostController::class,'index']);
		Route::get('/admin/post/create',[PostController::class,'tambahpostform']);
		Route::post('/admin/post/store',[PostController::class,'simpanpost']);
		Route::get('/admin/post/edit/{id}',[PostController::class,'editpostform']);
		Route::post('/admin/post/edit/{id}',[PostController::class,'updatepost']);
		Route::post('/admin/deletepost/{id}',[PostController::class,'delete']);
		Route::get('/admin/pesan',[PesanController::class,'lihatpesan']);
		Route::get('/logout',[LoginController::class,'logout']);
		Route::post('/uploadimgtiny',[PostController::class,'upload']);

		Route::get('/admin/tag',[TagController::class,'index']);
		Route::post('/admin/tag/store',[TagController::class,'store']);
		Route::post('/admin/tag/update/{id}',[TagController::class,'update']);
		Route::post('/admin/tag/destroy/{id}',[TagController::class,'destroy']);
    });

    Route::group(['middleware' => ['cekrole:admin']], function () {
		Route::get('/admin/pesan',[PesanController::class,'lihatpesan']);
    });
	
	// Route::get('/dashboard', [LoginController::class,'dashboard']);
	// Route::get('/admin/post',[PostController::class,'index']);
	// Route::get('/admin/post/create',[PostController::class,'tambahpostform']);
	// Route::post('/admin/post/store',[PostController::class,'simpanpost']);
	// Route::get('/admin/post/edit/{id}',[PostController::class,'editpostform']);
	// Route::post('/admin/post/edit/{id}',[PostController::class,'updatepost']);
	// Route::post('/admin/deletepost/{id}',[PostController::class,'delete']);
	
});

Route::get('/{slug}',[PostController::class,'single']);