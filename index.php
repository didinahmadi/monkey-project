<?php

include __DIR__ . '/vendor/autoload.php';

use BananaProject\Hello;

$hello = new Hello;

echo '<h1 style="text-align:center;">';
$hello->say();
echo '</h1>';