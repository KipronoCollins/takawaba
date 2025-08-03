<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'home']);
Route::get('about', [MainController::class, 'about']);
Route::get('ceoMessage', [MainController::class, 'ceoMessage']);
Route::get('policy', [MainController::class, 'policy']);
Route::get('board', [MainController::class, 'board']);
Route::get('managementTeam', [MainController::class, 'management']);
Route::get('contact', [MainController::class, 'contact']);
Route::get('lab', [MainController::class, 'lab']);
Route::get('sources', [MainController::class, 'sources']);
Route::get('serviceArea', [MainController::class, 'serviceArea']);
Route::get('sewer', [MainController::class, 'sewer']);
Route::get('waterServices', [MainController::class, 'waterServices']);
Route::get('photoGallery', [MainController::class, 'photoGallery']);


