<?php 
require('bootstrap.php');

if (!isset($_SESSION['logUser'])) {
   header('location:index.php');
}

require('View/view.welcome.php');
?>