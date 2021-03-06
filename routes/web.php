<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UploadVideoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('channels', ChannelController::class);

Route::get('videos/{video}/comments', [CommentController::class, 'index']);
Route::get('comments/{comment}/replies', [CommentController::class, 'show']);
Route::get('videos/{video}', [VideoController::class, 'show'])->name('videos.show');
Route::put('videos/{video}', [VideoController::class, 'updateViews']);
Route::put('videos/{video}/update', [VideoController::class, 'update'])->middleware(['auth'])->name('videos.update');

Route::middleware(['auth'])->group(function (){
    Route::post('comments/{video}', [CommentController::class, 'store']);
    Route::post('votes/{entityId}/{type}', [VoteController::class, 'vote']);
    Route::post('channels/{channel}/videos', [UploadVideoController::class, 'store']);
    Route::get('channels/{channel}/videos', [UploadVideoController::class, 'index'])->name('channel.upload');
    Route::resource('channels/{channel}/subscriptions', SubscriptionController::class)->only(['store', 'destroy']);
});
