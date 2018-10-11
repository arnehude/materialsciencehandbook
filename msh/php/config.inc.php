<?php

$_MYSQLI['server'] = "";
$_MYSQLI['username'] = '';
$_MYSQLI['database'] = '';
$_MYSQLI['password'] = "";
$_MYSQLI['port'] = 3306;

define("MYSQLI_HOST", $_MYSQLI['server']);
define("MYSQLI_USER", $_MYSQLI['username']);
define("MYSQLI_BASE", $_MYSQLI['database']);
define("MYSQLI_PASS", $_MYSQLI['password']);
define("MYSQLI_PORT", $_MYSQLI['port']);

$mysqli = new mysqli(MYSQLI_HOST, MYSQLI_USER, MYSQLI_PASS, MYSQLI_BASE);
