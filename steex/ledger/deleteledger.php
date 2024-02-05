<?php
include("../../connection.php");
?>
<?php
$delete=$_GET['id'];
$data="DELETE FROM `add_ledger` WHERE `id`='$delete'";
$query=mysqli_query($connection,$data);
if($query){
    echo 200;
}else{
    echo 300;
}
?>