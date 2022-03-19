<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Models\Product;

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
    return view('home');
});

Route::get('/check-date',[TestController::class,"gateTest"]);
Route::get("rss-feed",function(){

});

Route::get('sitemap', function(){
     $site = App::make('sitemap');

     $site->add(URL::to('/'),date("y-m-d h:i:s"),1,'daily');
     $site->store('xml','sitemap');
});