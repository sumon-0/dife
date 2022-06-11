<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\QuestionController;

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
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');
    return 'DONE'; //Return anything
});


Route::get('/', [HomeController::class,'index']);
Route::get('/fire-safety', [HomeController::class,'fire_safety'])->name('fire-safety');
Route::post('/osh-tool', [HomeController::class,'store_company_details']);
Route::get('/fire-safety/{id}', [HomeController::class, 'get_question'])->name('get_questions');
Route::post('/submit-answer', [HomeController::class,'submit_answer'])->name('submit_answer');
Route::get('/feedback', [HomeController::class,'feedback'])->name('feedback');
Route::post('/submit_feedback', [HomeController::class,'submit_feedback'])->name('submit_feedback');



Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/category', [CategoryController::class,'index'])->name('category.index');
    Route::get('/category-create', [CategoryController::class,'create'])->name('category.create');
    Route::post('/category-store', [CategoryController::class,'store'])->name('category.store');
    Route::post('/category-destroy', [CategoryController::class,'destroy'])->name('category.destroy');

    Route::get('/questions', [QuestionController::class,'index'])->name('questions.index');
});



require __DIR__.'/auth.php';
