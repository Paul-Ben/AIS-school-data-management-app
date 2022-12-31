<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\Grade1_6_resultsController;
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
Route::get('promoteStudent', [StudentController::class, 'promoteStudent'])->name('promoteStudent');
Route::post('promote', [StudentController::class, 'promote'])->name('promote');

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
Route::post('add_grade_result', [Grade1_6_resultsController::class, 'store'])->name('add_grade_result');
Route::get('showgraderesult', [ResultController::class, 'showgrade'])->name('showgraderesult');
Route::get('selectclass', [ResultController::class, 'selectclass'])->name('selectclass');

//grade result handles
Route::get('viewGrade1Results/{id}', [ResultController::class, 'viewGrade1Results'])->name('viewGrade1Results');
Route::get('editGradeResult/{id}', [ResultController::class, 'editGradeResult'])->name('editGradeResult');
Route::post('updateGradeResult/{id}', [ResultController::class, 'updateGradeResult'])->name('updateGradeResult');
Route::delete('deleteGradeResult/{id}', [ResultController::class, 'deleteGradeResult'])->name('deleteGradeResult');
//preschool result handles
Route::get('viewPreSchResults/{id}', [ResultController::class, 'viewPreSchResults'])->name('viewPreSchResults');
Route::get('editPreSchResults/{id}', [ResultController::class, 'editPreSchResults'])->name('editPreSchResults');
Route::post('updatePreSchResult/{id}', [ResultController::class, 'updatePreSchResult'])->name('updatePreSchResult');
Route::delete('deletePreSchResult/{id}', [ResultController::class, 'deletePreSchResult'])->name('deletePreSchResult');
//kg1 result handles
Route::get('viewKg1Results/{id}', [ResultController::class, 'viewKg1Results'])->name('viewKg1Results');
Route::get('editKg1Results/{id}', [ResultController::class, 'editKg1Results'])->name('editKg1Results');
Route::post('updateKg1Result/{id}', [ResultController::class, 'updateKg1Result'])->name('updateKg1Result');
Route::delete('deleteKg1Result/{id}', [ResultController::class, 'deleteKg1Result'])->name('deleteKg1Result');
// Kg2 result handles
Route::get('viewKg2Results/{id}', [ResultController::class, 'viewKg2Results'])->name('viewKg2Results');
Route::get('editKg2Results/{id}', [ResultController::class, 'editKg2Results'])->name('editKg2Results');
Route::post('updateKg2Result/{id}', [ResultController::class, 'updateKg2Result'])->name('updateKg2Result');
Route::delete('deleteKg2Result/{id}', [ResultController::class, 'deleteKg2Result'])->name('deleteKg2Result');

//kg3 results handles
Route::get('viewKg3Results/{id}', [ResultController::class, 'viewKg3Results'])->name('viewKg3Results');
Route::get('editKg3Result/{id}', [ResultController::class, 'editKg3Result'])->name('editKg3Result');
Route::post('updateKg3Result/{id}', [ResultController::class, 'updateKg3Result'])->name('updateKg3Result');
Route::delete('deleteKg3Result/{id}', [ResultController::class, 'deleteKg3Result'])->name('deleteKg3Result');

// Routes for Subjects
Route::resource('subjects', SubjectController::class);
Route::get('viewSubjectsbyClass', [SubjectController::class, 'viewSubjectsbyClass'])->name('viewSubjectsbyClass');

// Route::get('bypass', [ResultController::class, 'bypass'])->name('bypass');

});

require __DIR__.'/auth.php';


