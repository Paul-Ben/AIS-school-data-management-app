<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Pay;
// use App\Models\Student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::middleware(['auth', 'verified'])->group(function () {
   
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Routes for student operations
Route::resource('students', StudentController::class);
Route::get('search', [StudentController::class, 'searchStudent'])->name('search');
Route::get('view', [StudentController::class, 'showStudent'])->name('view');
Route::get('view-students', [StudentController::class, 'viewStudent'])->name('view-students');
Route::get('search-class', [StudentController::class, 'searchClass'])->name('search-class');
Route::get('view-class', [StudentController::class, 'viewClass'])->name('view-class');

// Routes for payment operations
Route::resource('payments', PaymentController::class);
Route::get('addPayment', [PaymentController::class, 'showStudent'])->name('addPayment');
Route::get('all_payments', [PaymentController::class, 'all_payments'])->name('all_payments');
Route::get('class_payments_index', [PaymentController::class, 'class_payments_index'])->name('class_payments_index');
Route::get('class_payments', [PaymentController::class, 'class_payments'])->name('class_payments');

Route::resource('fees', FeeController::class);


Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('inregister', [RegisteredUserController::class, 'icreate'])->name('register_user');
Route::post('register-user', [RegisteredUserController::class, 'istore'])->name('register-user');

//Routes for receipt operations

Route::resource('receipts', RecieptController::class);
Route::get('receipt', [RecieptController::class, 'showReciept'])->name('receipt');

// Routes for results operations
Route::resource('results', ResultController::class);
Route::get('get-student', [ResultController::class, 'testme'])->name('get-student');
Route::get('testsearch', [ResultController::class, 'testsearch'])->name('testsearch');
Route::get('result-view', [ResultController::class, 'viewResultsearch'])->name('result-view');
Route::get('result-page', [ResultController::class, 'displayResult'])->name('result-page');
Route::get('search-class-result', [ResultController::class, 'searchclassresult'])->name('search-class-result');
Route::get('get-class-result', [ResultController::class, 'getclassresult'])->name('get-class-result');
Route::get('printpage', [ResultController::class, 'printresultpage'])->name('printpage');

// Route::get('bypass', [ResultController::class, 'bypass'])->name('bypass');

});

require __DIR__.'/auth.php';


