<?php

use App\Http\Controllers\ManagementUserController;
use Illuminate\Routing\Route;

Route::resource('user', ManagementUserController::class);

Route::get("/home", function(){
    return view("home");
});