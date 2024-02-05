<?php
include("../../connection.php");
?>
<?php
$id=$_GET['id'];
$delete="DELETE FROM `add_category` WHERE `category_id`='$id'";
$result=mysqli_query($connection,$delete);
if($result){
    echo 200;
}else{
    echo 300;
}
?>