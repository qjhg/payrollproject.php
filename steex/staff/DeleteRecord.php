<?php
include("../../connection.php");
?>
<?php
$deleteId=$_GET['staffData'];
$delete="DELETE FROM `add_staff` WHERE `id`='$deleteId'";
$query=mysqli_query($connection,$delete);
if($query){
    echo 200;
}else{
    echo 300;
}
?>