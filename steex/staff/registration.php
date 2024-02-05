<?php
include("../../connection.php");
?>
<?php
if(isset($_POST['sallery'])){
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$address=$_POST['address'];
$department=$_POST['department'];
$contractPeriod=$_POST['contractPeriod'];
$joinDate=$_POST['joinDate'];
$sallery= $_POST['sallery'];
    $insert="INSERT INTO `add_staff`(`name`,`email`,`contact`,`country`,`state`,`city`,`address`,`department`,`contractperiod`,`joinDate`,`sallery`) VALUES ('$name','$email','$contact','$country','$state','$city','$address','$department','$contractPeriod','$joinDate','$sallery')";
    $query=mysqli_query($connection,$insert);
    if($query){
        echo 200;
    }else{
        echo 300;
    }
}






?>