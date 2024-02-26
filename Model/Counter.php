<?php
require_once 'vendor/autoload.php';
require_once 'config.php';

class Counter {
    private static $file = FILE_PATH;

    public static function getCount() {
        if (file_exists(self::$file)) {
            return intval(file_get_contents(self::$file));
        } else {
            return 0;
        }
    }

    public static function incrementCount() {
        $count = self::getCount();
        $count++;
        file_put_contents(self::$file, $count);
    }
}
