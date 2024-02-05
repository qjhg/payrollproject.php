<?php
include("../../connection.php");
?>
<?php
$updateName= $_POST['edit_name'];
$updateEmail= $_POST['edit_email'];
$updateContact= $_POST['edit_contact'];
$updateCountry= $_POST['edit_country'];
$updateState= $_POST['edit_state'];
$updateCity= $_POST['edit_city'];
$updateAddress= $_POST['edit_address'];
$updatedepartment= $_POST['edit_department'];
$updatecontractperiod= $_POST['edit_contractPeriod'];
$updatedate= $_POST['joinDate'];
$updatesallery= $_POST['sallery'];
$updateid= $_POST['edit_id'];
$update="UPDATE `add_staff` SET `name`='$updateName' ,`email`='$updateEmail' ,`contact`='$updateContact',`country`='$updateCountry',`state`='$updateState',`city`='$updateCity',`address`='$updateAddress', `department`='$updatedepartment',`contractperiod`='$updatecontractperiod',`joinDate`='$updatedate',`sallery`='$updatesallery' where `id`='$updateid'";
$query=mysqli_query($connection,$update);
if($query){
    echo 200;
}else{
    echo 300;
}



?>