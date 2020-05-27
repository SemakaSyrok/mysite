<?php

namespace App\Frontend;

class Helper
{
    public static $messageNumber = [
        1 => 'Hello!
Send me login and password to Video Management System.',
        2 => 'Hello!
Send me login and password to Hotel Management System'
    ];

    static public function getMessage($num)
    {
        try {
            return self::$messageNumber[$num];
        } catch (\Exception $e) {
            return '';
        }
    }


}
