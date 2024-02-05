<?php
include("connection.php");
?>
<?php
session_start();
$email = $_POST['login_email'];
$password = $_POST['login_password'];
$select = "SELECT * FROM `authentication_project` WHERE `email`='$email'";
$run = mysqli_query($connection, $select);
$fetch = mysqli_fetch_assoc($run);
$fetch_password = $fetch['password'];
if ($password == $fetch_password) {
    echo 200;
    $_SESSION['email'] = $fetch['email'];
} else {
    echo 300;
}

?>
