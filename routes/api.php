<?php

use App\Http\Controllers\Admin\UserControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//=================================================
//                  User
//=================================================
Route::group(['prefix' => 'users'], function(){
    Route::get('/', [UserControler::class, 'index']);
    Route::post('store', [UserControler::class, 'store']);
});


