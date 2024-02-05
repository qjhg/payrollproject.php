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

            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#myModal" id="modalShow">Add Ledger</button>
            <div id="myModal" class="modal fade  modal-md" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4 " id="myModalLabel">Add Ledger</h5>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3 needs-validation" id="formSubmit" novalidate>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2">
                                        <label for="customCheckbox2" class="custom-control-label">Is-income
                                            category</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Category Type : <span class="text-muted" id="category_t">(Income)</span></label>
                                    <select name="category_type" id="select_category" class="form-control select2">
                                        <option>Select Option ....</option>

                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="validationCustom02" value="" name="date" placeholder="Enter Your date" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="validationCustom02" value="" name="price" placeholder="Enter Your price">
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="" name="description" placeholder="Enter Your Description">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">

                            <button type="button" name="addStaff" class="btn btn-primary " id="addledger">Add Ledger Entry</button>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">View</h5>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                        <thead>
                            <tr>

                                <th data-ordering="false">id </th>
                                <th data-ordering="false">cat_id</th>
                                <th data-ordering="false">date</th>
                                <th data-ordering="false">price</th>
                                <th data-ordering="false">description</th>
                                <th data-ordering="false">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select = "SELECT * FROM `add_ledger` INNER JOIN `add_category` ON `add_ledger`.`cat_id`=`add_category`.`category_id`";
                            $query = mysqli_query($connection, $select);
                            while ($fetch = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td><?php echo $fetch['id'] ?></td>
                                    <td><?php echo $fetch['category_name'] ?></td>
                                    <td><?php echo $fetch['date'] ?></td>
                                    <td><?php echo $fetch['price'] ?></td>
                                    <td><?php echo $fetch['description'] ?></td>
                                    <td>
                                        <button class="btn btn-danger" id="deleteledger" data-id=<?php echo $fetch['id'] ?>>Delete</button>
                                        <button class="btn btn-info" id="editledger" data-edit=<?php echo $fetch['id'] ?>>Update</button>

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
</div>



<div class="container-fluid">

            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#myModal" id="">Add Ledger</button>
            <div id="editmodal" class="modal fade  modal-md" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4 " id="myModalLabel">Add Ledger</h5>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3 needs-validation" id="update_category" novalidate>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="">
                                        <label for="customCheckbox2" class="custom-control-label">Is-income
                                            category</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Category Type : <span class="text-muted" id="category_t">(Income)</span></label>
                                    <select name="category_type" id="update_category" class="form-control select2">
                                        <option>Select Option ....</option>

                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="update_date" value="" name="edit_date" placeholder="Enter Your date" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="update_price" value="" name="edit_price" placeholder="Enter Your price">
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="update_description" value="" name="edit_description" placeholder="Enter Your Description">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">

                            <button type="button" name="edit_ledger" class="btn btn-primary " id="update_staff">Update Ledger</button>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


        </div>

<?php
include("../components/footer.php");
?>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $(document).on("change", "#customCheckbox2", function(e) {
            e.preventDefault();
            var dataValue;
            if ($(this).prop('checked')) {
                var dataValue = 1;
            } else {
                $(this).prop('checked', false);
                var dataValue = 0;
            }
            $.ajax({
                url: "./category.php",
                method: "POST",
                data: {
                    dataValue: dataValue
                },
                success: function(response) {
                    $("#select_category").empty();
                    $("#select_category").append(response);
                },
                error: function(error) {
                    // alert(error);
                }
            })

        })
        $(document).on("click", "#addledger", function(e) {
            e.preventDefault();
            var form = new FormData(formSubmit)
            $.ajax({
                url: "./registration.php",
                method: "POST",
                data: form,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response == 200) {
                        $("#myModal").modal('hide');
                        window.location.reload();
                    } else {
                        alert("Something went wrong!");
                    }
                },
                error: function(error) {
                    alert("Error");
                }
            })
        })
        $(document).on("click", "#deleteledger", function(e) {
            e.preventDefault();
            var data = $(this).data('id');
            var Drecord = this;
            $.ajax({
                url: "./deleteledger.php",
                method: "GET",
                data: {
                    id: data
                },
                success: function(response) {
                    if (response == 200) {
                        $("Drecord").closest("tr").fadeOut();
                        window.location.reload();
                    }
                },
                error: function(error) {
                    alert(error)
                }
            })
        })
        $(document).on("click", "#editledger", function() {
          var edit_data= $(this).data('edit');
          $.ajax({
            url:"./editledger.php",
            method:"GET",
            dataType:"JSON",
            data:{"edit_data":edit_data},
            success:function(response){
               $("#editmodal").modal('show');
               $("#update_description").val(response.description);
               $("#update_price").val(response.price);
               $("#update_date").val(response.date);

               
            },
            error:function(error){
                alert("Error");
            }
          })
        })

    })
</script>