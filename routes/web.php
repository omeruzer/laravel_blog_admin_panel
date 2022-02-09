<?php

use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\AuthorController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CommentController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\admin\LogoController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\SidebarController;
use App\Http\Controllers\admin\SocialMedaiController;
use App\Http\Controllers\admin\StatisticController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\front\ArticleController as FrontArticleController;
use App\Http\Controllers\front\CategoryController as FrontCategoryController;
use App\Http\Controllers\front\HomeController as FrontHomeController;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// ADMİN PANEL

Route::group(['prefix'=>'admin'],function(){ 

    Route::redirect('/','/admin/login');
    Route::match(['get','post'],'/login',[UserController::class,'login'])->name('admin.login');
    Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');
    //Route::get('/master',[SidebarController::class,'index'])->name('admin.master');

    Route::group(['middleware'=>'auth'],function(){
        Route::get('/home',[HomeController::class,'index'])->name('admin.home');
        Route::get('/delete',[HomeController::class,'visitor'])->name('admin.visitor');    
    
        Route::group(['prefix'=>'settings'],function(){
            Route::get('/',[SettingController::class,'index'])->name('admin.setting');
            Route::post('/{id}',[SettingController::class,'update'])->name('admin.settings.update');
        });

        Route::group(['prefix'=>'contact'],function(){
            Route::get('/',[ContactController::class,'index'])->name('admin.contact');
            Route::post('/{id}',[ContactController::class,'update'])->name('admin.contacts.update');
        });
    
        Route::group(['prefix'=>'logo'],function(){
            Route::get('/',[LogoController::class,'index'])->name('admin.logo');
            Route::post('/{id}',[LogoController::class,'logo'])->name('admin.logo.update');
    
        });
    
        Route::group(['prefix'=>'socialmedia'],function(){
            Route::get('/',[SocialMedaiController::class,'index'])->name('admin.socialmedia');
            Route::post('/{id}',[SocialMedaiController::class,'update'])->name('admin.socialmedia.update');
        });
    
        Route::group(['prefix' => 'users'],function(){
            Route::get('/',[UserController::class,'index'])->name('admin.users');
            Route::get('/edit/{id}',[UserController::class,'edit'])->name('admin.edit.users');
            Route::post('/edit/{id}',[UserController::class,'save'])->name('admin.save.users');
            Route::get('/create',[UserController::class,'create'])->name('admin.create.users');
            Route::post('/create',[UserController::class,'create'])->name('admin.created.users');
            Route::get('/delete/{id}',[UserController::class,'delete'])->name('admin.delete.users');
        });
    
        Route::group(['prefix' => 'authors'],function(){
            Route::get('/',[AuthorController::class,'index'])->name('admin.authors');
            Route::get('/edit/{id}',[AuthorController::class,'edit'])->name('admin.edit.authors');
            Route::post('/edit/{id}',[AuthorController::class,'save'])->name('admin.save.authors');
            Route::get('/create',[AuthorController::class,'create'])->name('admin.create.authors');
            Route::post('/create',[AuthorController::class,'create'])->name('admin.created.authors');
            Route::get('/delete/{id}',[AuthorController::class,'delete'])->name('admin.delete.authors');
        });
    
        Route::group(['prefix' => 'categories'],function(){
            Route::get('/',[CategoryController::class,'index'])->name('admin.categories');
            Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('admin.edit.categories');
            Route::post('/edit/{id}',[CategoryController::class,'save'])->name('admin.save.categories');
            Route::get('/create',[CategoryController::class,'create'])->name('admin.create.categories');
            Route::post('/create',[CategoryController::class,'create'])->name('admin.created.categories');
            Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('admin.delete.categories');
        });
    
        Route::group(['prefix' => 'articles'],function(){
            Route::get('/',[ArticleController::class,'index'])->name('admin.articles');
            Route::get('/edit/{id}',[ArticleController::class,'edit'])->name('admin.edit.articles');
            Route::post('/edit/{id}',[ArticleController::class,'save'])->name('admin.save.articles');
            Route::get('/create',[ArticleController::class,'create'])->name('admin.create.articles');
            Route::post('/create',[ArticleController::class,'create'])->name('admin.created.articles');
            Route::get('/delete/{id}',[ArticleController::class,'delete'])->name('admin.delete.articles');
        });
    
        Route::group(['prefix' => 'messages'],function(){
            Route::get('/',[MessageController::class,'index'])->name('admin.messages');
            Route::get('/read/{id}',[MessageController::class,'read'])->name('admin.read.messages');
            Route::get('/delete/{id}',[MessageController::class,'delete'])->name('admin.delete.messages');
        });
    
        Route::group(['prefix' => 'comments'],function(){
            Route::get('/',[CommentController::class,'index'])->name('admin.comments');
            Route::get('/read/{id}',[CommentController::class,'read'])->name('admin.read.comments');
            Route::get('/delete/{id}',[CommentController::class,'delete'])->name('admin.delete.comments');
        });
    
        Route::group(['prefix' => 'statistic'],function(){
            Route::get('/',[StatisticController::class,'index'])->name('admin.statistic');
        });
    
    });

});
