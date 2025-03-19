<?php
// Class to redirect user to a different page

namespace Helpers;

class HTTP
{
    static $base_url = "http://localhost/sessionsample/";

    static function redirect($path, $query = "")
    {
        $url = static::$base_url . $path;
        if ($query) $url .= "?$query";

        header("location: $url");
        exit();
    }
}