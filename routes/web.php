<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

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

Route::get('/', [InquiryController::class, 'index'])->name('index');
Route::post('inquiry', [InquiryController::class, 'postInquiry'])->name('inquiry');
Route::get('confirm', [InquiryController::class, 'showConfirm'])->name('confirm');
Route::post('confirm', [InquiryController::class, 'postConfirm'])->name('confirm.post');
