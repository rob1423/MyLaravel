<?php
use App\Models\User;
use App\Notifications\TestNotification;

Route::get('/send-notification', function () {

    $user = User::first();

    $user->notify(new TestNotification());

    return "Notification Sent!";

});