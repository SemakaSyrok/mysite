<?php


namespace App\Custom;


use Illuminate\Notifications\Notification;

class NotificationPrepare
{
    public static function get($notification)
    {
        switch ($notification->type) {
            case \App\Notifications\NewBadIp::class:
                echo "Bad request form {$notification->data['ip']}"; break;
            case \App\Notifications\MessageIncome::class:
                echo "New request from {$notification->data['mail']}"; break;
        }
    }
}
