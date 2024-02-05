<?php
include("../../connection.php");
?>
<?php
$value = $_POST['dataValue'];
if ($value !== "") {
    $select = "SELECT * FROM `add_category` WHERE `category_type`='$value'";
    $query = mysqli_query($connection, $select);
    $html = "";
    $html .= "<option value='' selected disabled>Select Category</option>";
    while ($allfetch = mysqli_fetch_assoc($query)) {
        $html .= "<option value='{$allfetch['category_id']}'>{$allfetch['category_name']}</option>";
    }
    echo $html;
}

?>