<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BodaController;

Route::get('/', [BodaController::class, 'invitacion'])->name('boda.invitacion');
