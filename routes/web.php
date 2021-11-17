<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\UserController;
use App\Models\Cat;
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

Route::get('/cats', [CatController::class, 'getCats']);
Route::get('/cats/{id}', [CatController::class, 'show']);

Route::get('/create/cat', [CatController::class, 'create'])->middleware('auth');
Route::post('/cats/store', [CatController::class, 'store'])->middleware('auth');

Route::get('/cats/{id}', [CatController::class, 'show']);
Route::get('/cats/edit/{id}', [CatController::class, 'edit'])->middleware('auth');
Route::post('/cats/update/{id}', [CatController::class, 'update'])->middleware('auth');
Route::get('/cats/delete/{id}', [CatController::class, 'destroy']);
Route::get('latest/cat/{cat}', [CatController::class, 'last']);
Route::get('search/cat', [CatController::class, 'search']);
//books
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

Route::get('book/create/{id}',[BookController::class, 'create']);
Route::post('book/store', [BookController::class, 'store']);
//Auth

Route::get('login', [AuthController::class, 'loginForm'])->middleware('guest');
Route::get('register', [AuthController::class, 'registerForm'])->middleware('guest');
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

//admin
Route::get('allusers', [UserController::class, 'index'])->middleware('auth','isAdmin');

















Route::get('/test', function () {
    // // aggregation function : mbst5dmsh feha ->get() 3lshaan hya bt calculate 7aga w btrg3 rakm mn 3ndha

    //     $cats=Cat::count('id');
    //     dd($cats);

    // $cats = Cat::avg('id');
    // dd($cats);

    // mesh aggregation functin bst5dm get () 3ady

    $cats=Cat::orderBy('id','DESC')->take(2)->get(); // take() bt3ml limit asht8al 3la ad eh mn eldata
    dd($cats);  // get btrg3 array of data lakn first() btrg3 object mesh lazm a3ml 3leeh for each
    foreach ($cats as $cat)
    {
        echo $cat->name;
    }
});
