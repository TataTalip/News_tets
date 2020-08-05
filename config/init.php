<?php

    $host = false;
    if(isset($_SERVER['HTTP_HOST'])) {
        $host = $_SERVER['HTTP_HOST'];
    }
    $allowed_host = 'http://news/index.php';

    //$app_path = preg_path("#[^/]+$#", '', $allowed_host);
   // $app_path = preg_path('/public/', '', $app_path);
