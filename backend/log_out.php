<?php
session_start();
if(isset($_SESSION)){
    session_destroy();
    $message = 'logout Successfull';
            echo "<SCRIPT> //not showing me this
            alert('$message');
            window.location.replace('../Dashboard.php');
          </SCRIPT>";
}
?>