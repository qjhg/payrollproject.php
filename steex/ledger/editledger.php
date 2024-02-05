<?php
include("../../connection.php");
?>
<?php
$edit_row= $_GET['edit_data'];
$select="SELECT * FROM `add_ledger` WHERE  `id`='$edit_row'";
$query=mysqli_query($connection,$select);
$fetch=mysqli_fetch_assoc($query);
echo json_encode($fetch);
?>