<?php
include("../../connection.php");
?>
<?php
$editData=$_GET['data'];
$select="SELECT *FROM `add_staff` WHERE `id`='$editData'";
$run=mysqli_query($connection,$select);
$fetch=mysqli_fetch_assoc($run);
echo json_encode($fetch);
?>