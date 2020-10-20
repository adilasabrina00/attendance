<?php
date_default_timezone_set('Asia/Kuala_Lumpur');
session_start();

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'logindb';

$con = new mysqli($host, $username, $password, $dbname);

function active_menu($menu1, $menu2)
{
    if ($menu1 == $menu2) echo ' class="active"';
}
