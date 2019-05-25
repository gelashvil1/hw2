<?php
require_once "router.php";
route('/', function () {
    return "Hello World";
});
route('/point', function () {
    return "Hello 3 points i'm losing you";
});
$action = $_SERVER['REQUEST_URI'];
dispatch($action);
?>