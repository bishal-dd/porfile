<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\user\LoginController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\ProjectController;
use App\Http\Controllers\user\MessageController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/", [HomeController::class, "home"])->name(
    "home"
);
Route::get("/project", [ProjectController::class, "project"])->name(
    "project"
);

Route::get('/login', function () {
    return view('users/login');
});

Route::post("/userlogin", [LoginController::class, "userlogin"])->name(
    "userlogin"
);

Route::post("/message", [MessageController::class, "add_message"])->name(
    "add_message"
);


Route::group(["middleware" => ["admin"]], function () {

    Route::get("/dashboard", [DashboardController::class, "dashboard"])->name(
        "dashboard"
    );

    Route::get("/logout", [LoginController::class, "logout"])->name("logout");

    // Event Functions
    Route::get("/dashboard/add_event", [
        EventController::class,
        "get_event",
    ])->name("get_event");

    Route::post("/dashboard/add_event", [
        EventController::class,
        "add_event",
    ])->name("add_event");

    Route::post("/dashboard/edit_event", [
        EventController::class,
        "edit_event",
    ])->name("edit_event");

    Route::post("/dashboard/delete_event/{id}", [
        EventController::class,
        "delete_event",
    ])->name("delete_event");


        // FeedBack Functions

        Route::get("/dashboard/view_feedback", [
            MessageController::class,
            "view_feedback",
        ])->name("viewFeedback");

});
