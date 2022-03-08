<?php 
require "bootstrap.php"; 



if (isset($_POST['reg_submit'])) {
    echo $registerUser->RegisterUser(); 
}


error_reporting(0);

require "view/view.index.php"; 
?>