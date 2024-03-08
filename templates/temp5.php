<?php

$cache = '';
$get = fn() => $cache;
$set = fn($val) => $cache = $val;
$set('Hello');

var_dump($cache);
