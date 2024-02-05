<?php
include("connection.php");
?>
<?php
$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$cpassword= $_POST['cpassword'];
if(isset($_POST['name'])){
    if($password===$cpassword){
        $insert="INSERT INTO `authentication_project` (`name`,`email`,`password`,`confirm_password`) VALUES ('$name','$email','$password','$cpassword')";
        $query=mysqli_query($connection,$insert);
        if($query){
            echo 200;
        }else{
            echo 300;
        }
    }
}


?>