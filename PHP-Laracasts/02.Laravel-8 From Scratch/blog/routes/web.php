<?php
use App\Http\Controllers\PostController;
use App\Models\Catagory;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/', [PostController::class,'index'])->name('home');
Route::get('posts/{post:slug}',[PostController::class,'show'] );

Route::get('authors/{author:username}', function (\App\Models\User $author) {
    return view('posts.index',[
    'posts'=>$author->posts
]);
    
});