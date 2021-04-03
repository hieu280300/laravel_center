<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
    Route::get('/list', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/show/{id}', [CategoryController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
    Route::get('/list', [PostController::class, 'index'])->name('index');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/store', [PostController::class, 'store'])->name('store');
    Route::get('/show/{id}', [PostController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [PostController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('destroy');
});
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/list', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/show/{id}', [UserController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('destroy');
});

Route::get('/sign_form', function () {
    return view('signup');
});
Route::post('/signup', function (Request $request) {
    // $dataRequest=($request->all());
    // $dataInsert=[
    //     'first_name' => $dataRequest['first_name'],
    //     'utm']=>$dataRequest['utm'],
    // ];
    // $request=$request->except('_token');
    // dd($request);
    // if (
    //     $request->hasFile('profile_picture') &&
    //     $request->file('profile_picture')->isValid()
    // ) {
    //     echo "FILE ON";
    //     $extension = $request->thumbnail->extension();
    //     $file_name = 'thumbnail_' . time() . '.' . $extension;
    //     var_dump($file_name);
    //     $path = $request->thumbnail->storeAs('images', $file_name);
    //     var_dump($path);
    // }
    if ($request->hasFile('profile_picture') 
        && $request->file('profile_picture')->isValid()) {
            echo 'FILE OK';
            // upload file to server
            $extension = $request->profile_picture->extension();
            $fileName = 'profile_picture_' . time() . '.' . $extension;
            var_dump($fileName);
            // save folder /public/images/$fileName
            $path = $request->profile_picture->storeAs('images', $fileName);
            var_dump($path);
    }
});
// Route::get('/trangchu',function(){
//     return view('pages.trangchu');
// });
require __DIR__ . '/auth.php';
