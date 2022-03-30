<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Super_Admin\Super_AdminController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Super_Admin\APIController;
use App\Http\Controllers\Super_Admin\HeaderController;
use App\Http\Controllers\Super_Admin\BannerController;
use App\Http\Controllers\Super_Admin\ServiceController;
use App\Http\Controllers\Super_Admin\TeamController;
use App\Http\Controllers\Super_Admin\NewsController;
use App\Http\Controllers\Super_Admin\CEOController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Super_Admin\AuthController;
use App\Http\Controllers\Super_Admin\IdeaController;
use App\Http\Controllers\Super_Admin\MenuController;
use App\Http\Controllers\Super_Admin\FooterController;
use App\Http\Controllers\Super_Admin\PicnicController;


//.......................Frontend Controller..................
Route::get('/', [FrontendController::class, 'index']);
Route::get('/search/',[FrontendController::class,'search'])->name('search');

Route::get('Gallery/picnic',[FrontendController::class,'picnic']);

//.......................auth route for all Role..................

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

//...........................Route for Super_Admin............................

Route::group(['middleware' => ['auth', 'role:Super_Admin']], function () {
    Route::get('/dashboard/Super_Admin', 'App\Http\Controllers\DashboardController@Super_Admin')->name('dashboard.Super_Admin');

    Route::get('/signout', [Super_AdminController::class, 'signout']);



    //................Service Route......................

    Route::get('service', [ServiceController::class, 'index']);
    Route::get('service/form', [ServiceController::class, 'form'])->name('service.form');
    Route::POST('service/Insert', [ServiceController::class, 'store'])->name('service.Insert');
    Route::delete('service/Delete/{id}', [ServiceController::class, 'delete'])->name('service.Delete');
    Route::get('service/Edit/{id}', [ServiceController::class, 'edit'])->name('service.Edit');
    Route::post('service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::get('service/status/{status}/{id}', [ServiceController::class, 'status']);


    //................Header Route......................

    Route::get('header', [HeaderController::class, 'index']);
    Route::get('header/form', [headerController::class, 'form'])->name('header.form');
    Route::POST('header/Insert', [HeaderController::class, 'store'])->name('header.Insert');
    Route::get('header/Delete/{id}', [HeaderController::class, 'delete'])->name('header.Delete');
    Route::get('header/Edit/{id}', [HeaderController::class, 'edit'])->name('header.Edit');
    Route::post('header/update/{id}', [HeaderController::class, 'update'])->name('header.update');
    Route::get('header/status/{status}/{id}', [HeaderController::class, 'status']);

    //................Color Route......................

    Route::get('color', [ColorController::class, 'index']);
    Route::get('color/form', [ColorController::class, 'form'])->name('color.form');
    Route::POST('color/Insert', [ColorController::class, 'store'])->name('color.Insert');
    Route::get('color/Delete/{id}', [ColorController::class, 'delete'])->name('color.Delete');
    Route::get('color/Edit/{id}', [ColorController::class, 'edit'])->name('color.Edit');
    Route::post('color/update/{id}', [ColorController::class, 'update'])->name('color.update');
    Route::get('color/status/{status}/{id}', [ColorController::class, 'status']);

    //................Team Route......................

    Route::get('team', [TeamController::class, 'index']);
    Route::get('team/form', [TeamController::class, 'form'])->name('team.form');
    Route::POST('team/Insert', [TeamController::class, 'store'])->name('team.Insert');
    Route::get('team/Delete/{id}', [TeamController::class, 'delete'])->name('team.Delete');
    Route::get('team/Edit/{id}', [TeamController::class, 'edit'])->name('team.Edit');
    Route::post('team/update/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::get('team/status/{status}/{id}', [TeamController::class, 'status']);
    Route::get('team/detail/{name}',[TeamController::class,'details']);

    //................News Route......................

    Route::get('news', [NewsController::class, 'index']);
    Route::get('news/form', [NewsController::class, 'form'])->name('news.form');
    Route::POST('news/Insert', [NewsController::class, 'store'])->name('news.Insert');
    Route::get('news/Delete/{id}', [NewsController::class, 'delete'])->name('news.Delete');
    Route::get('news/Edit/{id}', [NewsController::class, 'edit'])->name('news.Edit');
    Route::post('news/update/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::get('news/status/{status}/{id}', [NewsController::class, 'status']);

    Route::get('news/{id}', [NewsController::class, 'details']);


    //................News Comment Route......................

    Route::post('comments', [NewsController::class, 'comment']);

    Route::get('comment', [NewsController::class, 'comment_detail']);

    Route::get('comment/status/{status}/{id}', [NewsController::class, 'comment_status']);
    Route::get('comment/Delete/{id}', [NewsController::class, 'comment_delete']);


    //................Banner Route......................

    Route::get('banner', [BannerController::class, 'index']);
    Route::get('banner/form', [BannerController::class, 'form'])->name('banner.form');
    Route::POST('banner/Insert', [BannerController::class, 'store'])->name('banner.Insert');
    Route::get('banner/Delete/{id}', [BannerController::class, 'delete'])->name('banner.Delete');
    Route::get('banner/Edit/{id}', [BannerController::class, 'edit'])->name('banner.Edit');
    Route::post('banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::get('banner/status/{status}/{id}', [BannerController::class, 'status']);

    //................Banner Route......................

    Route::get('ceo', [CEOController::class, 'index']);
    Route::get('ceo/form', [CEOController::class, 'form'])->name('ceo.form');
    Route::POST('ceo/Insert', [CEOController::class, 'store'])->name('ceo.Insert');
    Route::get('ceo/Delete/{id}', [CEOController::class, 'delete'])->name('ceo.Delete');
    Route::get('ceo/Edit/{id}', [CEOController::class, 'edit'])->name('ceo.Edit');
    Route::post('ceo/update/{id}', [CEOController::class, 'update'])->name('ceo.update');
    Route::get('ceo/status/{status}/{id}', [CEOController::class, 'status']);


// ....................Idea.....................................

Route::post('insert',[IdeaController::class,'store']);

    Route::get('display', [APIController::class, 'display']);



    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

// ....................Password Change.....................................

Route::get('password',[AuthController::class,'index']);
Route::post('change_password',[AuthController::class,'change']);

// ....................Menu Route.....................................

Route::get('menu', [MenuController::class, 'index']);
Route::get('menu/form', [MenuController::class, 'form'])->name('menu.form');
Route::POST('menu/Insert', [menuController::class, 'store'])->name('menu.Insert');
Route::get('menu/Delete/{id}', [MenuController::class, 'delete'])->name('menu.Delete');
Route::get('menu/Edit/{id}', [MenuController::class, 'edit'])->name('menu.Edit');
Route::post('menu/update/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::get('menu/status/{status}/{id}', [MenuController::class, 'status']);


// ....................Footer Route.....................................

Route::get('footer', [FooterController::class, 'index']);
Route::get('footer/form', [FooterController::class, 'form'])->name('footer.form');
Route::POST('footer/Insert', [FooterController::class, 'store'])->name('footer.Insert');
Route::get('footer/Delete/{id}', [FooterController::class, 'delete'])->name('footer.Delete');
Route::get('footer/Edit/{id}', [FooterController::class, 'edit'])->name('footer.Edit');
Route::post('footer/update/{id}', [FooterController::class, 'update'])->name('footer.update');
Route::get('footer/status/{status}/{id}', [FooterController::class, 'status']);

// ....................Picnic Route.....................................

Route::get('picnic', [PicnicController::class, 'index']);
Route::get('picnic/form', [PicnicController::class, 'form'])->name('picnic.form');
Route::POST('picnic/Insert', [PicnicController::class, 'store'])->name('picnic.Insert');
Route::get('picnic/Delete/{id}', [PicnicController::class, 'delete'])->name('picnic.Delete');
Route::get('picnic/Edit/{id}', [PicnicController::class, 'edit'])->name('picnic.Edit');
Route::post('picnic/update/{id}', [PicnicController::class, 'update'])->name('picnic.update');
Route::get('picnic/status/{status}/{id}', [PicnicController::class, 'status']);

});


//.............................. Route For Admin..........................


Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    Route::get('/dashboard/Admin', 'App\Http\Controllers\DashboardController@Admin')->name('dashboard.Admin');


    Route::get('/logout', [AdminController::class, 'signout']);
});




require __DIR__ . '/auth.php';
