<?php
include("../../connection.php");
?>
<?php
$edit_id = $_GET['id'];
$select = "SELECT *FROM `add_category` WHERE `category_id`=$edit_id";
$query = mysqli_query($connection, $select);
$fetch = mysqli_fetch_assoc($query);
echo json_encode($fetch);
?>
