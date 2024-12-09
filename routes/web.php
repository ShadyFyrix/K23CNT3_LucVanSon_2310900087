<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewdemoController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SessionLoginController;
//chap 1 - Router

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [ProductController::class, 'index']);


Route::get(uri:'/Here', action: function (){
    Return '<h1> Hello There </h1>';
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/welcome/{name?}', function ($name='Son') {
    return "<h1> Hey, $name";
});
//chap 2 -- AccountsController
Route::get('/acc',[AccountController::class,'index'])
->name('account.index');

Route::get('/acc-create', [AccountController::class, 'create' ]) 
->name('account.create');

Route::get('/acc-show',[AccountController::class,'showData'])
->name('acc.show');

Route::get('/acc-showlist',[AccountController::class,'list'])
->name('acc.list');

Route::get('/acc-getAll',[AccountController::class,'getALLAccount']);
//Chap 3 - Views
Route::get('/view', function () {
    return view('view',['name'=>'Son The Shady']);
});
Route::get('/view2', function () {
    return view('view2', ['name'=>'Welcome back, Shady',
                                      'arr'=>[1,3,5,7,9]         
                                    ]);
});
Route::get('/view3',function(){
    return view('admin.view3',['name'=>["MyLoveEyja","The Shady","BetterCallShady"],
                                            'arr'=>[10,15,12,1,22,30],
                                            'users'=>[],
                                          ]);
});
Route::get('/view4',[ViewdemoController::class,'view4'])
->name('viewdemo.view4');

Route::get('/view5',[ViewdemoController::class,'view5'])
->name('viewdemo.view5');
Route::get('/view6',function(){
    return view('view6');
});
//chap4 blade
Route::get('/home1',function(){
    return view('index');
    });
    Route::get('/about-us',function(){
    return view('about');
    });
    Route::get('/contact',function(){
    return view('contact');
    });
//chap5 
/*route::get('/user', function(Request $request){
    Return $request->  path();
});
*/
route::get('/user', function(Request $request){
    Return $request->fullUrl();
});
/*
Route::get('/login',[LoginController::class,'index'])->name('login.index');

Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');
*/
Route::get('/registration', [RegistrationController::class, 'showForm'])->name('registration.form');

Route::post('/registration', [RegistrationController::class, 'submitForm'])->name('registration.submit');

Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.form');

Route::post('/reservation', [ReservationController::class, 'submit'])->name('reservation.submit');
//lab 6 _ session 
Route::get('/session/get', [SessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set', [SessionController::class,'storeSessionData'])->name('session.set');
Route::get('/session/delete', [SessionController::class,'deleteSessionData'])->name('session.delete');

Route::get('/login',[SessionLoginController::class,'login'])->name('session.login');
Route::get('/logout',[SessionLoginController::class,'logout'])->name('session.logout');
Route::post('/login',[SessionLoginController::class,'loginSubmit'])->name('session.submit');


