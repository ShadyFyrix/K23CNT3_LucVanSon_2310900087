<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\SinhVienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewdemoController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SessionLoginController;
use App\Http\Controllers\KhoaController;
use App\Http\Controllers\MonHocController;

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
//lab 7 database
route::get('/khoa',[KhoaController::class,'index'])
->name('khoa.index');

route::get('/khoa/detail/{makh}',[KhoaController::class,'detail'])
->name('khoa.detail');

route::get('/khoa/create',[KhoaController::class,'create'])
->name('khoa.create');

route::post('/khoa/create',[KhoaController::class,'createSubmit'])
->name('khoa.createSubmit');

Route::get('/khoa/edit/{MaKH}', [KhoaController::class, 'edit'])
->name('khoa.edit');

Route::post('/khoa/update/{MaKH}', [KhoaController::class, 'update'])
->name('khoa.update');

Route::post('/khoa/delete/{MaKH}', [KhoaController::class, 'delete'])
->name('khoa.delete');
//lab 8 Query builder 
#lab8
# Môn Học
Route::get('/monhoc',[MonHocController::class,'getMonHocs'])
->name('monhoc.list');
#chi tiet
Route::get('/monhoc/detail/{mamh}',[MonHocController::class,'getmonhoc'])
->name('monhoc.detail');
# sửa
Route::get('/monhoc/edit/{mamh}',[MonHocController::class,'edit'])
->name('monhoc.edit');
#sửa->submit
Route::post('/monhoc/edit',[MonHocController::class,'editSubmit'])
->name('monhoc.editsubmit');
#delete
Route::delete('/monhoc/delete/{mamh}', [MonHocController::class, 'delete'])
->name('monhoc.delete');
#insert
Route::get('/monhoc/insert',[MonHocController::class,'insert'])
->name('monhoc.insert');
#insertSubmit
Route::post('/monhoc/insert',[MonHocController::class,'insertSubmit'])
->name('monhoc.insertsubmit');
//lab 9 model 
Route::get('/sinhvien', [SinhVienController::class, 'index'])
->name('sinhvien.index');

Route::get('/sinhvien/create', [SinhVienController::class, 'create'])
->name('sinhvien.create');

Route::post('/sinhvien', [SinhVienController::class, 'store'])
->name('sinhvien.store');

Route::get('/sinhvien/{maSV}/edit', [SinhVienController::class, 'edit'])
->name('sinhvien.edit');

Route::put('/sinhvien/{maSV}', [SinhVienController::class, 'update'])
->name('sinhvien.update');

Route::delete('/sinhvien/{maSV}', [SinhVienController::class, 'delete'])
->name('sinhvien.delete');

Route::get('/sinhvien/{maSV}', [SinhVienController::class, 'detail'])
->name('sinhvien.detail');





