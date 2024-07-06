<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SocialAuthController;
// 這些語句引入控制器，以便在路由定義中使用它們。
use Illuminate\Support\Facades\Route;
// 引入 Laravel 的 Route 類，用來定義路由。

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// 當用戶訪問根路徑 / 時，返回 welcome 視圖。
Route::get('/', function () {
    return view('welcome');
});


// 當用戶訪問 /dashboard 時，返回 dashboard 視圖。
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// 使用 auth 和 verified 中間件(Middleware)來確保只有已認證和已驗證的用戶才能訪問這個路由。


// 使用 auth 中間件保護這組路由，確保只有認證過的用戶才能訪問這些路由。
// 定義了一組路由來處理用戶配置文件的編輯、更新和刪除操作。
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Socialite 第三方社群登入
Route::get('login/{provider}', [SocialAuthController::class, 'redirectToProvider']);
Route::get('login/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);



// 定義了一組資源路由，用來處理帳戶的 CRUD 操作。這些路由會自動映射到 AccountController 中的相應方法。
Route::resource('accounts', AccountController::class);
// 這行程式碼會自動生成七個路由，每個路由對應一個 HTTP 方法和 URI 模式，並調用 AccountController 中的相應方法。


require __DIR__.'/auth.php';
// 引入 auth.php 文件中的路由定義，這個文件通常包含了 Laravel Breeze 或 Laravel Jetstream 等包生成的身份驗證路由。
// 將 routes 目錄中的 auth.php 文件包含到 web.php 中，並執行其內容。
