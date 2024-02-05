<?php
include("../../connection.php");
?>
<?php
$update_id= $_POST['edit_id'];
$update_name= $_POST['edit_name'];
$update_type= $_POST['edit_type'];
$update_description=$_POST['edit_description'];
$update="UPDATE `add_category` SET `category_name`='$update_name',`category_type`='$update_type',`category_description`='$update_description' WHERE`category_id`='$update_id'";
$query=mysqli_query($connection,$update);
if($query){
    echo 200;
}else{
    echo 300;
}


?>