<?php

use App\Http\Controllers\AkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EditController;

Route::get("/register",[RegisterController::class,"index"])->name("register");
Route::post("/register",[RegisterController::class,"store"]);

Route::get("/Akun/{id}/edit",[EditController::class,"index"])->name("edit.profile");
Route::patch("/Akun/{id}/edit",[EditController::class,"edit"]);

Route::get("/users/{user:username}/posts",[UserPostController::class,"index"])->name("user.posts");
Route::delete("/users/{id}",[UserController::class,"destroy"])->name("destroy.user");

Route::get("/logout",[LogoutController::class,"store"])->name("logout");

Route::get("/login",[LoginController::class,"index"])->name("login");
Route::post("/login",[LoginController::class,"store"]);

Route::get("/Akun",[AkunController::class,"index"])->name("akun");


// Route::patch("/Akun",[AkunController::class,"index"])->name("akun");


Route::get("/beranda",[BerandaController::class,"index"])->name("beranda");
Route::post("/beranda",[BerandaController::class,"store"]);
Route::delete("/beranda/{id}",[BerandaController::class,"destroy"])->name("post.delete");

Route::post("/beranda/{id}/likes",[LikeController::class,"store"])->name("beranda.likes");
Route::delete("/beranda/{id}/likes",[LikeController::class,"destroy"])->name("beranda.likes");