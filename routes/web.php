<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndexAudioController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\YearsController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
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
Route::redirect('/', '/index');
// Route::post('/logout', function () {
//     Auth::logout();
//     return redirect('/login');
// })->name('logout');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {p
    
// });
Route::middleware(['auth', 'admin'])->group(function () {
    // Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard', [AudioController::class,'dashboard'])->name('dashboard');

    Route::get('dashboard/video/index',[videoController::class,'index']);
    Route::get('dashboard/video/create',[VideoController::class,'create']);
    Route::post('dashboard/video/submit',[VideoController::class,'submit']);
    Route::get('dashboard/video/delete/{id}',[VideoController::class,'delete']);
    Route::get('dashboard/video/edit/{id}',[VideoController::class,'edit']);
    Route::post('dashboard/video/update',[VideoController::class,'update']);
    
    Route::get('dashboard/audio/index',[AudioController::class,'index']);
    Route::get('dashboard/audio/create',[AudioController::class,'create']);
    Route::post('dashboard/audio/submit',[AudioController::class,'submit']);
    Route::get('dashboard/audio/delete/{id}',[AudioController::class,'delete']);
    Route::get('dashboard/audio/edit/{id}',[AudioController::class,'edit']);
    Route::post('dashboard/audio/update',[AudioController::class,'update']);
    
    Route::get('dashboard/user/index',[UserController::class,'index']);
    Route::get('dashboard/user/create',[UserController::class,'create']);
    Route::post('dashboard/user/submit',[UserController::class,'submit']);
    Route::get('dashboard/user/delete/{id}',[UserController::class,'delete']);
    Route::get('dashboard/user/edit/{id}',[UserController::class,'edit']);
    Route::post('dashboard/user/update',[UserController::class,'update']);
    
    Route::get('dashboard/categories/index',[CategoriesController::class,'index']);
    Route::get('dashboard/categories/create',[CategoriesController::class,'create']);
    Route::post('dashboard/categories/submit',[CategoriesController::class,'submit']);
    Route::get('dashboard/categories/delete/{id}',[CategoriesController::class,'delete']);
    Route::get('dashboard/categories/edit/{id}',[CategoriesController::class,'edit']);
    Route::post('dashboard/categories/update',[CategoriesController::class,'update']);
    
    Route::get('dashboard/artist/index',[ArtistController::class,'index']);
    Route::get('dashboard/artist/create',[ArtistController::class,'create']);
    Route::post('dashboard/artist/submit',[ArtistController::class,'submit']);
    Route::get('dashboard/artist/delete/{id}',[ArtistController::class,'delete']);
    Route::get('dashboard/artist/edit/{id}',[ArtistController::class,'edit']);
    Route::post('dashboard/artist/update',[ArtistController::class,'update']);
    
    Route::get('dashboard/album/index',[AlbumController::class,'index']);
    Route::get('dashboard/album/create',[AlbumController::class,'create']);
    Route::post('dashboard/album/submit',[AlbumController::class,'submit']);
    Route::get('dashboard/album/delete/{id}',[AlbumController::class,'delete']);
    Route::get('dashboard/album/edit/{id}',[AlbumController::class,'edit']);
    Route::post('dashboard/album/update',[AlbumController::class,'update']);
    
    Route::get('dashboard/year/index',[YearsController::class,'index']);
    Route::get('dashboard/year/create',[YearsController::class,'create']);
    Route::post('dashboard/year/submit',[YearsController::class,'submit']);
    Route::get('dashboard/year/delete/{id}',[YearsController::class,'delete']);
    Route::get('dashboard/year/edit/{id}',[YearsController::class,'edit']);
    Route::post('dashboard/year/update',[YearsController::class,'update']);
});
Route::middleware(['auth'])->group(function () {
});

    Route::get('index',[AudioController::class,'indexAudio']);
    Route::get('play2/{id}',[AudioController::class,'play2']);
    Route::get('musics',[AudioController::class,'musics']);
    Route::get('playmusic/{id}',[AudioController::class,'playmusic']);
    Route::get('pm/{id}',[AudioController::class,'pm']);
    
    Route::get('/musicartist/{id}/songs', [ArtistController::class,'artistSongs'])->name('artists.songs');
    Route::get('/videoartist/{id}/songs', [ArtistController::class,'artistVideo'])->name('videos.songs');
    
    Route::get('/albums/{album}', [AlbumController::class, 'showSongs'])->name('albums.songs');
    Route::get('album/{id}/songs', [AlbumController::class, 'showalbumSongs'])->name('albumvideos.songs');
    
    Route::get('/yearsongs/{year}', [YearsController::class,'yearSongs'])->name('years.songs');
    // Route::get('/yearvideosongs/{year}', [YearsController::class,'yearVideoSongs'])->name('yearvideosongs');
    
    Route::get('/yearvideosongs/{year}', [YearsController::class,'yearVideoSongs'])->name('yearvideosongs');
    
    Route::get('categories',[CategoriesController::class,'categories']);
    
    Route::get('cateartist',[CategoriesController::class,'cateartist']);
    Route::get('catealbum',[CategoriesController::class,'catealbum']);
    Route::get('cateyears',[CategoriesController::class,'cateyears']);
    
    Route::get('catevideoartist',[CategoriesController::class,'catevideoartist']);
    Route::get('catevideoalbum',[CategoriesController::class,'catevideoalbum']);
    Route::get('catevideoyears',[CategoriesController::class,'catevideoyears']);
    
    Route::get('/songs/{album}', [AudioController::class,'showSongs'])->name('songs');
    Route::get('/artistsongs/{artist}', [AudioController::class,'showSongsByArtist'])->name('songs.by.artist');
    Route::get('/genresongs/{genre}', [AudioController::class,'showSongsBygenre'])->name('songs.by.genre');
    Route::get('/languagesongs/{language}', [AudioController::class,'showSongsBylanguage'])->name('songs.by.language');
    Route::get('/yearsongs/{year}', [AudioController::class,'showYearSongs'])->name('yearsongs');
    Route::get('playmusic/{id}', [AudioController::class,'playmusic'])->name('playmusic');
    
    Route::get('play1/{id}',[VideoController::class,'play1']);
    Route::get('videos',[VideoController::class,'videos']);
    Route::get('playvideo/{id}',[VideoController::class,'playvideo']);
    
    Route::get('/videosongs/{album}', [VideoController::class,'showVideoSongs'])->name('videosongs');
    Route::get('/videoartists/{artist}', [VideoController::class,'showVideoArtists'])->name('videoartists');
    Route::get('/videoyears/{year}', [VideoController::class,'showVideoYears'])->name('videoyears');
    Route::get('/videolanguages/{language}', [VideoController::class,'showVideoLanguage'])->name('videolanguages');
    Route::get('/videogenres/{genre}', [VideoController::class,'showVideoBygenre'])->name('video.by.genre');
    Route::get('playvideo/{id}', [VideoController::class,'playvideo'])->name('playvideo');
    
    // Route::get('musicdetails',[ReviewController::class,'musicreview']);
    
    Route::get('/search', [SearchController::class,'search'])->name('search');
    Route::get('contact',[ContactController::class,'index']);
    Route::get('contact',[ContactController::class,'create']);
    Route::post('contact/submit',[ContactController::class,'submit']);
    
    Route::post('audio_reviews_submit',[ReviewController::class,'audio_reviews_submit']);
    Route::post('musicdetails/{review}',[ReviewController::class,'audio_reviews_update'])->name('audio_reviews_update');
    Route::post('videodetails/{review}',[ReviewController::class,'video_reviews_update'])->name('video_reviews_update');
    Route::post('video_reviews_submit',[ReviewController::class,'video_reviews_submit']);
    Route::get('contact', function () {return view('contact');});
    Route::get('about', function () {return view('about');});


// Route::put('/reviews/{review}', [ReviewController::class,'update'])->name('update');