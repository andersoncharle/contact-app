<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

Route::get('/contacts',[ContactController::class,'index'])->name('contact.index');
