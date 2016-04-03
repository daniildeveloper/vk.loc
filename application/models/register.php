<?php
$host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    include_once '../models/model_auth.php';
    $ma = new Model_Auth();
    $ma->Register();

    header("location: $host");



