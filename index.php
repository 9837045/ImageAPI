<?php
declare (strict_types=1);
if (!isset($_GET['like'])) {
    require("fireworks.html");
    exit;
}

$lib = $_GET['like'];

$src = file_get_contents(__DIR__ . "/src/" . $lib . ".txt");

if (!$src) {
    require("welcome.html");
    exit;
}

$list = explode(PHP_EOL, trim($src));

//随机图像
$imageName = $list[mt_rand(0, count($list) - 1)];

//302临时重定向
header("Location: {$imageName}");