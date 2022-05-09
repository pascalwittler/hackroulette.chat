<?php

class Http
{
    public static function error404()
    {
        header('HTTP/2 404 Not Found', true, 404);
        echo '404 Not Found';
    }

    public static function error501()
    {
        header('HTTP/2 501 Not Implemented', true, 501);
        echo '501 Not Implemented';
    }
}
