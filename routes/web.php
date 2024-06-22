<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionsController;

 
Route::get('/', function () {
    return view('home');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->prefix('dashboard')->group(function () {
        Route::get('', 'index')->name('dashboard');
        Route::get('/api', 'api')->name('dashboard.api');
    });
 
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::controller(CategoryController::class)->prefix('categories')->group(function () {
        Route::get('', 'index')->name('categories');
        Route::get('create', 'create')->name('categories.create');
        Route::post('store', 'store')->name('categories.store');
        Route::get('show/{id}', 'show')->name('categories.show');
        Route::get('edit/{id}', 'edit')->name('categories.edit');
        Route::put('edit/{id}', 'update')->name('categories.update');
        Route::delete('destroy/{id}', 'destroy')->name('categories.destroy');
    });

    Route::controller(SupplierController::class)->prefix('suppliers')->group(function () {
        Route::get('/', [SupplierController::class, 'index'])->name('suppliers');
        Route::get('/create', [SupplierController::class, 'create'])->name('suppliers.create');
        Route::post('/', [SupplierController::class, 'store'])->name('suppliers.store');
        Route::get('/{supplier}', [SupplierController::class, 'show'])->name('suppliers.show');
        Route::get('/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
        Route::put('/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update');
        Route::delete('/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');
    });
    
    
   

    Route::controller(TransactionsController::class)->prefix('transactions')->group(function () {
        Route::get('/', [TransactionsController::class, 'index'])->name('transactions.index');
        Route::get('/create', [TransactionsController::class, 'create'])->name('transactions.create');
        Route::post('/', [TransactionsController::class, 'store'])->name('transactions.store');
        Route::get('/{transaction}', [TransactionsController::class, 'show'])->name('transactions.show');
        Route::get('/{transaction}/edit', [TransactionsController::class, 'edit'])->name('transactions.edit');
        Route::put('/{transaction}', [TransactionsController::class, 'update'])->name('transactions.update');
        Route::delete('/{transaction}', [TransactionsController::class, 'destroy'])->name('transactions.destroy');
    });


 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});


