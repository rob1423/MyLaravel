<?php
Route::get('/admin-dashboard', function () {
    return "Welcome Admin";
})->middleware(['auth:sanctum', 'role:admin']);