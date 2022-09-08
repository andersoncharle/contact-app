<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

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
//return view('contact');
    return redirect('home');
});


Route::get('/about/{id}',function ($id){
    return view("about",[
        'id'=>$id,
        'name'=>['firstname'=>'anderson','middlename'=>'mone','lastname'=>'mitnick']
    ]);
});

Route::view('contact','contact');
// alternative for routes:: Route::view("url","page");
//Route::view("about/{id}","about");

Route::get('/users/{username}',[Users::class,'index']);

Route::get('home',[Users::class,'homeView']);
