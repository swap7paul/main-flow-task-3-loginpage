<?php
session_start();

session_unset();
session_destroy();

header("location: login.php");
exit;
?>
 <?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
?> 
