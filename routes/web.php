<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\VerifController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\MyBooksController;

Route::get('/', [BookController::class, 'index'])->name('index.show');
Route::get('/books/{slug}', [BookController::class, 'show'])->name('books.show');

Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');

Route::post('/books/{id}/mark-read', [BookController::class, 'markRead'])->name('books.markRead');

Route::get('/genres/create', [GenreController::class, 'create'])->name('genres.create');
Route::post('/genres', [GenreController::class, 'store'])->name('genres.store');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('email/verif/{code}', [VerifController::class,'verif'])->name('verification.verif');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::post('/wishlist', [WishlistController::class,'store'])->name('wishlist.store');
Route::delete('/wishlist/{id}', [WishlistController::class,'destroy'])->name('wishlist.destroy');

Route::get('/my-books', [MyBooksController::class,'index'])->name('mybooks.index');

/* 
// Login Routes
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

// Register Routes
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

 */
/* Route::get('/email/verify', [VerificationController::class, 'notice'])
    ->middleware(['auth'])
    ->name('verification.notice');

Route::get('email/verify/{id}/{hash}', 'App\Http\Controllers\Auth\VerificationController@verify')->name('verification.verify');


Route::post('/email/verification-notification', [VerificationController::class, 'send'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send'); */
