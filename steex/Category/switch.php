<?php
include("../../connection.php");
?>
<?php
$switch = $_POST['data'];
$update = "SELECT * FROM `add_category` WHERE `category_id`='$switch'";
$query = mysqli_query($connection, $update);
$fetch = mysqli_fetch_assoc($query);
$switchStatus = $fetch['category_status'];
if ($switchStatus == 0) {
    $statusUpdate = 1;
} else {
    $statusUpdate = 0;
}
$update = "UPDATE `add_category` SET `category_status`='$statusUpdate' WHERE `category_id`='$switch'";
$query1 = mysqli_query($connection,$update);
if ($fetch) {
   echo json_encode($fetch,true);
} else {
    echo 300;
}

?>