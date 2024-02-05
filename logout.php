<?php
include("connection.php");
?>
<?php
session_start();
if(isset($_SESSION['email'])){
    session_unset();
    session_destroy();
    header("Location:./login.php");
}else{
    echo "okay";
}
?>
