<?php
class basclass{
    public static $conter=0;

    public function __construct()
    {
        self::$conter++;
    }
}
new basclass();
new basclass();
new basclass();
echo basclass::$conter;