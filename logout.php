<?php
session_start();
if (isset($_SESSION['user'])) {
  session_destroy();
  echo true;
}else{
    header('Location: http://localhost:8080/ajax/login.php');
}
?>