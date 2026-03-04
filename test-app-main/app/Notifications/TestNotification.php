<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class TestNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Delivery channel
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Data stored in the notifications table
     */
    public function toArray(object $notifiable): array
    {
        return [
            'message' => 'This is a test notification'
        ];
    }
}