<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\SettingController;
// use Illuminate\Support\Facades\Artisan;



Route::get('/contact', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('frontend/blog');
});

Route::get('/blog-details', function () {
    return view('frontend/blog-details');
});

Route::get('/contact', [ContactController::class, 'contactpage'])->name('contact');
Route::post('/submit-contact-form', [ContactController::class, 'submitContactForm'])->name('contact.submit');
Route::get('/', [HomeController::class, 'homepage'])->name('home');
Route::get('/about', [HomeController::class, 'aboutpage'])->name('about.show');
Route::get('/hp_printer', [HomeController::class, 'hpprinterpage'])->name('hp_printer');
Route::get('/epson_printer', [HomeController::class, 'epsonprinterpage'])->name('epson_printer');
Route::get('/brother_printer', [HomeController::class, 'brotherprinterpage'])->name('brother_printer');
Route::get('/canon_printer', [HomeController::class, 'canonprinterpage'])->name('canon_printer');
Route::get('/installation_printer', [HomeController::class, 'installationprinterpage'])->name('installation_printer');
Route::get('/privacy_policy', [HomeController::class, 'privacypolicypage'])->name('privacy_policy');
Route::get('/refund_policy', [HomeController::class, 'refundpolicypage'])->name('refund_policy');
Route::get('/terms_policy', [HomeController::class, 'termspolicypage'])->name('terms_policy');


Route::delete('/contacts/{id}', [HomeController::class, 'destroy'])->name('contacts.destroy');

Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['userAccess']], function () {
Route::get('/dashboard', [HomeController::class, 'admindashboard'])->name('admindashboard');
Route::get('/contactadmin', [HomeController::class, 'contactindex'])->name('contactadmin');
Route::get('/homeadmin', [HomeController::class, 'homeindex'])->name('homeadmin');
Route::get('/settings', [HomeController::class, 'settingpage'])->name('settings');

Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blog');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{id}', [BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog/update/{id}', [BlogController::class,'update'])->name('blog.update');
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

Route::post('/settings/update', [SettingController::class, 'updateSetting'])->name('settings.update');
Route::post('/settings/new-meta', [SettingController::class, 'new_meta_add'])->name('settings.new_meta');
Route::get('settings/edit-meta/{id}', [SettingController::class, 'editSettingForm'])->name('settings.edit_meta');
Route::get('/setting', [SettingController::class,'index'])->name('settingg.index');
Route::post('/setting/update', [SettingController::class,'update'])->name('setting.update');
Route::get('/blog-category', [BlogCategoryController::class, 'index'])->name('blog-category');
Route::post('/blog-category/store', [BlogCategoryController::class, 'store'])->name('blog-category.store');
Route::get('/blog-category/edit/{id}', [BlogCategoryController::class,'edit'])->name('blog-category.edit');
Route::post('/blog-category/update/{id}', [BlogCategoryController::class,'update'])->name('blog-category.update');
Route::delete('/blog-category/destroy/{id}', [BlogCategoryController::class,'destroy'])->name('blog-category.destroy');
Route::post('/setting/update', [SettingController::class,'update'])->name('setting.update');
Route::get('/metapage', [SettingController::class, 'metaPage'])->name('metaPage');
Route::post('ckeditor/upload', [HomeController::class, 'file_upload'])->name('ckeditor.upload');

// For clearing caches etc.
// Route::get('/clear-cache', function() {
//     Artisan::call('cache:clear');
//     Artisan::call('config:clear');
//     Artisan::call('route:clear');
//     Artisan::call('view:clear');
//     return "Caches cleared!";
// });


});

