<?php
include("../../connection.php");
?>

<?php
$name=$_POST['name'];
$type=$_POST['category_type'];
$description=$_POST['category_description'];
$category_status=1;
$insert="INSERT INTO `add_category` (`category_name`,`category_type`,`category_description`,`category_status`) VALUES ('$name','$type','$description','$category_status')";
$query=mysqli_query($connection,$insert);
if($query){
    echo 200;
}else{
    echo 300;
}
?>