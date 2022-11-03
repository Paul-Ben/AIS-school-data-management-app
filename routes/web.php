<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\PaymentController;
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

Route::resource('students', StudentController::class);

Route::resource('payments', PaymentController::class);
Route::resource('fees', FeeController::class);
Route::get('addPayment', [PaymentController::class, 'showStudent'])->name('addPayment');
Route::get('search', [StudentController::class, 'searchStudent'])->name('search');
Route::get('view', [StudentController::class, 'showStudent'])->name('view');
Route::get('view-students', [StudentController::class, 'viewStudent'])->name('view-students');
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('inregister', [RegisteredUserController::class, 'icreate'])->name('register_user');
Route::post('register-user', [RegisteredUserController::class, 'istore'])->name('register-user');
Route::resource('receipts', RecieptController::class);
Route::get('receipt', [RecieptController::class, 'showReciept'])->name('receipt');


});

require __DIR__.'/auth.php';


