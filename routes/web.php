<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminPostsController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\TinyMce;
use App\Http\Controllers\Admin\AdminCommentController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\MakeAdminController;
use App\Http\Controllers\Back\BackController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SocialShareButtonsController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/blog/{blog:slug}',[HomeController::class, 'post'])->name('post.single');
Route::get('/category/{category:slug}', [HomeController::class, 'category'])->name('home.category');

Route::get('/page/{slug}', [HomeController::class, 'page'])->name('home.page');

Route::post('/subscribe',[SubscribeController::class, 'store'])->name('add.subscribe');
Route::GET('/search',[HomeController::class,'search'])->name('search.post');
Route::post('/comment-submit/{post}',[PostController::class, 'addComment'])->name('add.comment');



//Route::get('/arbitrage-calculator',[HomeController::class, 'arc'])->name('home.arc');
//Route::get('/arbitrage-guide',[HomeController::class, 'arcguide'])->name('home.arcguide');
//Route::get('/arbitrage-opportunities',[HomeController::class, 'oop'])->name('home.oop');
//Route::get('/contact',[HomeController::class, 'contact'])->name('home.contact');
//Route::get('/faq',[HomeController::class, 'faq'])->name('home.faq');
//
//
//
//Route::get('/blogs',[HomeController::class, 'blogs'])->name('blog');
//
//Route::get('/blog/{blog:slug}',[PostController::class, 'showBlog'])->name('blog.show');
//

//
//Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('category.show');
//Route::get('/tag/{tag:name}', [TagController::class, 'show'])->name('tags.show');






   //------------Admin Dashboard Routes------------


Route::prefix('admin')->name('admin.')->middleware('auth','isadmin')->group(function (){

    Route::get('/',[DashboardController::class, 'index'])->name('index');

    Route::resource('/posts', AdminPostsController::class);

    Route::get('/category/show', [AdminCategoryController::class, 'index'])->name('category.show');
    Route::get('/category/create', [AdminCategoryController::class, 'create'])->name('category.create');
    Route::get('/category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('category.edit');
    Route::get('/category/delete/{id}', [AdminCategoryController::class, 'delete'])->name('category.delete');
    Route::post('/category/store', [AdminCategoryController::class, 'store'])->name('category.store');
    Route::post('/category/update', [AdminCategoryController::class, 'update'])->name('category.update');


    //Route::get('/admin/post/create',[AdminPostsController::class, 'create'])->name('post.create');
    Route::get('/admin/post/show',[AdminPostsController::class, 'index'])->name('post.show');
    //Route::get('/', AdminPostsController::class);
    Route::post('/upload_tinymce_image', [TinyMce::class, 'upload_tinymce_image'])->name('upload_tinymce_image');


    Route::get('/comments/show',[AdminCommentController::class, 'show'])->name('comments.show');

    Route::get('/comments/delete/{id}',[AdminCommentController::class, 'delete'])->name('comments.delete');

    Route::get('/user/show',[AdminUserController::class, 'index'])->name('user.show');
    Route::post('/user/update',[AdminUserController::class, 'update'])->name('user.update');
    Route::post('/user/admin/update',[AdminUserController::class, 'adminUpdate'])->name('user.admin');

    Route::get('/user/show/list',[AdminSettingController::class, 'index'])->name('user.showlist');
    Route::get('/user/show/delete/{id}',[AdminSettingController::class, 'delete'])->name('user.delete');
    Route::get('/user/show/edit/{id}',[AdminSettingController::class, 'edit'])->name('user.edit');

    Route::post('/user/show/update/{id}',[AdminSettingController::class, 'update'])->name('user.editupdate');

    Route::get('/admin/show',[MakeAdminController::class,'index'])->name('admin.show');

    Route::get('/admin/show/edit/{id}',[MakeAdminController::class,'edit'])->name('admin.edit');
    Route::post('/admin/show/update/{id}',[MakeAdminController::class,'update'])->name('admin.update');

    Route::get('/admin/show/create',[MakeAdminController::class,'create'])->name('admin.create');
    Route::get('/admin/show/delete/{id}',[MakeAdminController::class,'delete'])->name('admin.delete');
    Route::post('/admin/show/store',[MakeAdminController::class,'store'])->name('admin.store');

    //subscriber
    Route::get('/admin/subscriber/show',[SubscribeController::class, 'index'])->name('subscriber');
    Route::get('/admin/subscriber/delete/{id}',[SubscribeController::class, 'destroy'])->name('subscriber.delete');

    Route::get('admin/website/settings/', [SettingController::class, 'index'])->name('admin.setting');
    Route::post('admin/website/settings/update', [SettingController::class, 'updateSetting'])->name('update.setting');

    Route::get('/social-media-share', [SocialShareButtonsController::class,'ShareWidget']);



    Route::get('/social/show', [SocialController::class, 'index'])->name('social.show');
    Route::get('/social/create', [SocialController::class, 'create'])->name('social.create');
    Route::get('/social/edit/{id}', [SocialController::class, 'edit'])->name('social.edit');
    Route::get('/social/delete/{id}', [SocialController::class, 'delete'])->name('social.delete');
    Route::post('/social/store', [SocialController::class, 'store'])->name('social.store');
    Route::post('/social/update', [SocialController::class, 'update'])->name('social.update');

    Route::get('/page/show', [PageController::class, 'show'])->name('page.show');
    Route::get('/page/create', [PageController::class, 'index'])->name('page.create');
    Route::get('/page/edit/{id}', [PageController::class, 'edit'])->name('page.edit');
    Route::get('/page/delete/{id}', [PageController::class, 'delete'])->name('page.delete');
    Route::post('/page/store', [PageController::class, 'store'])->name('page.store');
    Route::post('/page/update', [PageController::class, 'update'])->name('page.update');






});



Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
