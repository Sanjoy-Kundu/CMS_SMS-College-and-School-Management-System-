<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/admin/login', [AdminController::class, 'admin_login_page']);