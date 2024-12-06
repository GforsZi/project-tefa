<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use App\Http\Controllers\Profile;
use App\Http\Controllers\Setting;
use App\Http\Controllers\Uploads;

Route::get("/", function () {
  return view("welcome", ["tittle" => "Landing page"]);
});

Route::get("/home", [Home::class, "show"]);
Route::get("/login", [Login::class, "show"]);
Route::get("/register", [Register::class, "show"]);
Route::get("/profile", [Profile::class, "show"]);
Route::get("/setting", [Setting::class, "show"]);
Route::get("/uploads", [Uploads::class, "show"]);
