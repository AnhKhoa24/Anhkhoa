
<?php

$s = $_POST['so'];

$gio = floor($s / 3600);
$phut = floor(($s % 3600) / 60);
$giay = $s % 60;

echo($gio." giờ ".$phut." phút " .$giay." giây" );