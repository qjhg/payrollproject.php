<?php
include("../../connection.php");
?>
<?php
$detdetail = $_GET['detailId'];
$select = "SELECT * FROM `add_staff` WHERE `id`='$detdetail'";
$query = mysqli_query($connection, $select);
$fetch = mysqli_fetch_assoc($query);
echo json_encode($fetch);
?>