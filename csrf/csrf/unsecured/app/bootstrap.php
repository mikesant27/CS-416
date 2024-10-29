<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$_SESSION['user_id'] = 1;

$db = new PDO('mysql:host=127.0.0.1;dbname=website', 'root', '');
