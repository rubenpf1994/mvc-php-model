<?php
    $string = file_get_contents(__DIR__."/config.json");
    $from_json = json_decode($string, true);
    DEFINE('TO', $from_json['email']);
    DEFINE('EMAIL', $from_json['email']);
    DEFINE('DATABASE', $from_json['database']);
    DEFINE('HOST', $from_json['host']);
    DEFINE('USER', $from_json['user']);
    DEFINE('PASSWORD', $from_json['password']);
?>