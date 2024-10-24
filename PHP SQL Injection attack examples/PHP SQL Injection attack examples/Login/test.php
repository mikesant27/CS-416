<?php
$userName = $_POST['user_name'];
$pw = $_POST['password'];
$statement = "SELECT * FROM users WHERE name = '" + $userName + "' AND password = '" + $pw + "';";