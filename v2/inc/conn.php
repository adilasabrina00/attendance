<?php
date_default_timezone_set('Asia/Kuala_Lumpur');
session_start();

$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'logindb';

$con = new mysqli($host, $username, $password, $dbname);

function active_menu($menu1, $menu2)
{
    if ($menu1 == $menu2) echo ' class="active"';
}

# senarai bulan
for ($m = 1; $m < 13; $m++) {
    $listbulan [$m] = date('F', mktime(0, 0, 0, $m));
}

function tarikh($tarikh)
{
    $tarikh = substr($tarikh, 0, 10);
    list($tahun, $bulan, $hari) = explode('-', $tarikh);
    return "$hari-$bulan-$tahun";
}

function masa($tarikh)
{
    $masa = substr($tarikh, 10, 6);
    list($jam, $minit) = explode(':', $masa);
    $jam = intval($jam);
    $ampm = 'PM';
    if ($jam > 12) {
        $ampm = 'PM';
        $jam -= 12;
    } elseif ($jam < 12) {
        $ampm = 'AM';
    }
    return "$jam:$minit $ampm";
}

