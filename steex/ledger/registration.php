<?php
include("../../connection.php");
?>
<?php
$cat_type = $_POST['category_type'];
$date = $_POST['date'];
$price = $_POST['price'];
$description = $_POST['description'];
$insert = "INSERT INTO `add_ledger` (`cat_id`,`date`,`price`,`description`) VALUES ('$cat_type','$date','$price','$description')";
$query = mysqli_query($connection, $insert);
if ($query) {
    echo 200;
} else {
    echo 300;
}

?>