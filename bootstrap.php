<?php 
session_start();
require "config.php"; 
$config = require "config.php";
$configuration = $config['database'];
require "Class/Connection.php";
require "Class/Users.php";

$db = Connection::con($configuration);
$registerUser = new Users($db);
$logedUser = new Users($db);


?>