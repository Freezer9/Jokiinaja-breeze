<?php

use App\Http\Controllers\CheckInvoiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormTransaksiController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GameTypeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use App\Http\Livewire\GuestProduct;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');

Route::middleware('guest')->group(function () {
    Route::view('/index', 'guest.index')->name('index');
    Route::view('/checkinvoice', 'guest.checkinvoice')->name('checkinvoice');
    Route::view('/calculator', 'guest.calculator')->name('calculatorjoki');
    Route::view('/contactus', 'guest.contact')->name('contactus');

    // Invoice Check
    Route::get('/checkinvoice/{invoice_name}', [CheckInvoiceController::class, 'show'])->name('invoice.show');
    Route::post('/checkinvoice', [CheckInvoiceController::class, 'check'])->name('invoice.check');

    // Chat Invoice
    Route::post('/chat/post', [ChatController::class, 'postChat'])->name('chat.post');

    // Contact Check
    Route::get('/contactus/{invoice_name}', [ContactController::class, 'show'])->name('contact.show');
    Route::post('/contactus', [ContactController::class, 'check'])->name('contact.check');

    // Pilih Tipe Game
    Route::get('/game/{game_type}', GameTypeController::class);

    // Pilih Spesifik Game
    Route::get('/game/{game_type}/{game_name}', GameController::class);

    // Form Transaksi
    Route::get('/form-transaksi/{seller_id}/{product_id}', [FormTransaksiController::class, 'index']);
    Route::post('/transactions/{product_id}', [FormTransaksiController::class, 'store'])->name('transaction.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/main', HomeController::class)->name('main');
    Route::get('/transactions', [InvoiceController::class, 'index'])->name('transactions.index');
    Route::get('/transactions/{transaction_id}', [InvoiceController::class, 'show'])->name('transactions.show');
    Route::resource('/products', ProductController::class);

    // Seller
    Route::get('/seller/{seller_id}', [SellerController::class, 'edit'])->name('seller.edit');
    Route::put('/seller', [SellerController::class, 'update'])->name('seller.update');

    Route::view('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
