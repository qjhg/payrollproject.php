<?php
include("../../connection.php");
?>

<?php
include("../components/header.php");
?>
<?php
include("../components/sidebar.php");
?>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#myModal" id="modalShow">Add Staff</button>
            <div id="myModal" class="modal fade  modal-lg" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4 mb-4" id="myModalLabel">Add Staff</h5>
                            <button type="button" class="btn-close mb-4" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body">

                            <form class="row g-3 needs-validation" id="dataform" novalidate>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label"><strong>Name</strong></label>
                                    <input type="text" class="form-control" id="validationCustom01" value="" name="name" placeholder="Enter Your Name" requiredrequired>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label"><strong>Email</strong></label>
                                    <input type="email" class="form-control" id="validationCustom02" value="" name="email" placeholder="Enter Your Email" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label"><strong>Contact</strong></label>
                                    <input type="number" class="form-control" id="validationCustom02" value="" name="contact" placeholder="Enter Your Contact">
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label"><strong>Country</strong></label>
                                    <input type="text" class="form-control" id="validationCustom02" value="" name="country" placeholder="Enter Your Country">
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label"><strong>State</strong></label>
                                    <input type="text" class="form-control" id="validationCustom02" value="" name="state" placeholder="Enter Your State" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label"><strong>City</strong></label>
                                    <input type="text" class="form-control" id="validationCustom02" value="" name="city" placeholder="Enter Your City" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom04" class="form-label"><strong>Address</strong></label>
                                    <textarea name="address" id="" cols="30" rows="1" class="form-control" placeholder="Enter Your Address" required></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label"><strong>Department</strong></label>
                                    <select class="form-select" id="validationTooltip04" name="department" required>
                                        <option value="" selected disabled>--Select Option--</option>
                                        <option value="">Development</option>
                                        <option>Graphic Desigining</option>
                                        <option>Degitel Markiting</option>

                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Contract Period</label>
                                    <select class="form-select" id="validationTooltip04" name="contractPeriod" required>
                                        <option value="" selected disabled>--Select Option--</option>
                                        <option value="">one month</option>
                                        <option>2 month</option>
                                        <option>3 month</option>
                                        <option>6 month</option>
                                        <option>1 year</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label"><strong>Join Date</strong></label>
                                    <input type="date" class="form-control" id="validationCustom02" value="" name="joinDate">
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label"><strong>Sallery</strong></label>
                                    <input type="text" class="form-control" id="validationCustom02" value="" name="sallery" placeholder="Enter your Sallery">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">

                            <button type="button" name="addStaff" class="btn btn-primary " id="addStaff">Add Staff</button>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <!-- container-fluid -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">View Staff</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="example" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th data-ordering="false">SR No.</th>
                                    <th data-ordering="false">Name</th>
                                    <th data-ordering="false">Email</th>
                                    <th data-ordering="false">Contact</th>
                                    <th>Detail</th>

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select = "SELECT *FROM `add_staff`";
                                $query = mysqli_query($connection, $select);
                                while ($fetch = mysqli_fetch_assoc($query)) {

                                ?>
                                    <tr>
                                        <td><?php echo $fetch['id'] ?></td>
                                        <td><?php echo $fetch['name'] ?></td>
                                        <td><?php echo $fetch['email'] ?></td>
                                        <td><?php echo $fetch['contact'] ?></td>
                                        <td>
                                            <button class="btn btn-primary" id="detailStaff" data-detail=<?php echo $fetch['id'] ?>>Detail</button>
                                        </td>

                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">

                                                    <li><a class="dropdown-item edit-item-btn" id="editrecord" data-edit="<?php echo $fetch['id'] ?>">
                                                            <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn" id="deleterecord" data-id=<?php
                                                                                                                            echo $fetch['id']
                                                                                                                            ?>>
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                <?php
                                }


                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->


        <!-- Default Modals -->

        <div id="detailModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Staff Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <div class="modal-body">
                        <p>Country : <strong id="detailCountry"> </strong></p>
                        <p>State : <strong id="detailState"> </strong></p>
                        <p>City : <strong id="detailCity"> </strong></p>
                        <p>Address : <strong id="detailAddress"> </strong></p>
                        <p>Department : <strong id="detailDepartment"> </strong></p>
                        <p>Contract Period : <strong id="detailContract-Period"> </strong></p>
                        <p>JoinDate : <strong id="detailJoinDate"></strong></p>
                        <p>Sallery : <strong id="detailSallery"></strong></p>
                    </div>


                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
</div>

<!-- <////////--------------editdata--------------//////> -->

<!-- Default Modals -->
<div id="editStaff" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Edit Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <div class="modal-body">

                    <form class="row g-3 needs-validation" id="Updatestaff" novalidate>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label"><strong>Name</strong></label>
                            <input type="text" class="form-control" id="updateName" value="" name="edit_name" placeholder="Enter Your Name" requiredrequired>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label"><strong>Email</strong></label>
                            <input type="email" class="form-control" id="updateEMAIL" value="" name="edit_email" placeholder="Enter Your Email" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label"><strong>Contact</strong></label>
                            <input type="number" class="form-control" id="updateCONTACT" value="" name="edit_contact" placeholder="Enter Your Contact">
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label"><strong>Country</strong></label>
                            <input type="text" class="form-control" id="updateCOUNTRY" value="" name="edit_country" placeholder="Enter Your Country">
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label"><strong>State</strong></label>
                            <input type="text" class="form-control" id="updateSTATE" value="" name="edit_state" placeholder="Enter Your State" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label"><strong>City</strong></label>
                            <input type="text" class="form-control" id="updateCITY" value="" name="edit_city" placeholder="Enter Your City" required>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom04" class="form-label"><strong>Address</strong></label>
                            <textarea name="edit_address" id="updateADDRESS" cols="30" rows="1" class="form-control" placeholder="Enter Your Address" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label"><strong>Department</strong></label>
                            <select class="form-select" id="updateDEPARTMENT" name="edit_department" required>
                                <option value="" selected disabled>--Select Option--</option>
                                <option value="Development">Development</option>
                                <option value="Graphic Desigining">Graphic Desigining</option>
                                <option value="Degitel Markiting">Degitel Markiting</option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Contract Period</label>
                            <select class="form-select" id="updateCONTRACTPERIOD" name="edit_contractPeriod" required>
                                <option value="" selected disabled>--Select Option--</option>
                                <option value="">one month</option>
                                <option>2 month</option>
                                <option>3 month</option>
                                <option>6 month</option>
                                <option>1 year</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label"><strong>Join Date</strong></label>
                            <input type="date" class="form-control" id="updateJOINDATE" value="" name="joinDate">
                        </div>
                        <input type="hidden" name="edit_id" id="updateID" value="">
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label"><strong>Sallery</strong></label>
                            <input type="text" class="form-control" id="updateSALLERY" value="" name="sallery" placeholder="Enter your Sallery">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary " name="" id="updatebutton">Update Staff</button>
            </div>

        </div>
    </div>
</div>

<?php
include("../components/footer.php");
?>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    
    $(document).ready(function() {
        $(document).on("click", "#modalShow", function() {
            $("#myModal").modal("show");

        })
        $(document).on("click", "#addStaff", function(e) {
            e.preventDefault();
            var formdata = new FormData(dataform);
            $.ajax({
                url: "./registration.php",
                method: "POST",
                data: formdata,
                contentType: false,
                processData: false,
                success: function(resp) {
                    if (resp == 200) {
                        $("#myModal").modal("hide");
                        
                        window.location.reload();
                    } else {
                        alert("not added successfully");
                    }
                },
                error: function() {
                    alert(error)
                }
            })
        })
        $(document).on("click", "#deleterecord", function(e) {
            e.preventDefault();
            var staffData = $(this).data('id');
            var deletedata = this;
            $.ajax({
                url: "./DeleteRecord.php",
                method: "GET",
                data: {
                    "staffData": staffData
                },
                success: function(response) {
                    if (response == 200) {
                        $(this).closest("tr").fadeOut();
                        window.location.reload();
                    } else {
                        alert("not delete the data");
                    }
                },
                error: function(error) {
                    alert(error);
                },
            })

        })
        $(document).on("click", "#detailStaff", function() {
            var detailId = $(this).data('detail');
            $.ajax({
                url: "./detailstaff.php",
                method: "GET",
                data: {
                    "detailId": detailId
                },
                dataType: "JSON",
                success: function(resp) {
                    $("#detailModal").modal("show")
                    $("#detailCountry").text(resp.country);
                    $("#detailState").text(resp.state);
                    $("#detailCity").text(resp.city);
                    $("#detailAddress").text(resp.address);
                    $("#detailDepartment").text(resp.department);
                    $("#detailContract-Period").text(resp.contractperiod);
                    $("#detailJoinDate").text(resp.joinDate);
                    $("#detailSallery").text(resp.sallery);
                }
            })
        })
        $(document).on("click", "#editrecord", function() {
            var data = $(this).data('edit');
            $.ajax({
                url: "./editstaff.php",
                method: "GET",
                data: {
                    "data": data
                },
                dataType: "JSON",
                success: function(response) {
                    $("#editStaff").modal("show");
                    $("#updateName").val(response.name);
                    $("#updateEMAIL").val(response.email);
                    $("#updateCONTACT").val(response.contact);
                    $("#updateCOUNTRY").val(response.country);
                    $("#updateADDRESS").val(response.address);
                    $("#updateCITY").val(response.city);
                    $("#updateCONTRACTPERIOD").val(response.contractperiod);
                    $("#updateDEPARTMENT").val(response.department);
                    $("#updateJOINDATE").val(response.joinDate);
                    $("#updateSALLERY").val(response.sallery);
                    $("#updateSTATE").val(response.state);
                    $("#updateID").val(response.id);

                },
                error: function(error) {
                    alert(error);
                }
            })
        })
        $(document).on("click", "#updatebutton", function() {
          var formdata=new FormData(Updatestaff);
          $.ajax({
            url:"updatestaff.php",
            method:"POST",    
            data:formdata,
            processData:false,
            contentType:false,
            success:function(response){
               if(response==200){
                $('#editStaff').modal('hide')
                window.location.reload();
               }
            },
            error:function(error){
                alert(error);
            }
          })
        })

    })
</script>