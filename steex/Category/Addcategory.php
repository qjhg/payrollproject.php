<?php
include("../../connection.php");
?>

<?php
include("../components/header.php");
?>
<?php
include("../components/sidebar.php");
?>
<div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title offset-4 fs-4" id="exampleModalgridLabel">Add Category</h5>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0);" id="form_data">
                    <div class="row g-3">
                        <div class="col-xxl-6">
                            <div>
                                <label for="firstName" class="form-label"><strong>Category Name</strong></label>
                                <input type="text" class="form-control" id="firstName" placeholder="Enter your name" name="name">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <label for="genderInput" class="form-label"><strong>Category Type</strong></label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category_type" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Income</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category_type" id="inlineRadio2" value="0">
                                    <label class="form-check-label" for="inlineRadio2">Expense</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div>
                                <label for="emailInput" class="form-label"><strong>Category Description</strong></label>
                                <textarea class="form-control" id="" cols="30" rows="2" name="category_description"></textarea>
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit" id="submit_category">Add Category</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <div class="card card-height-100 border-0 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row g-0 p-4">
                                <div class="col-6 ">
                                    <h3 class="">Add Category</h3>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                        Add Category
                                    </button>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div>
                </div><!--end col-->

            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Basic Datatables</h5>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>

                                        <th data-ordering="false">SR No.</th>

                                        <th data-ordering="false">Category Name</th>
                                        <th data-ordering="false">Category Type</th>
                                        <th data-ordering="false">category_description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $select = "SELECT * FROM `add_category`";
                                    $res = mysqli_query($connection, $select);
                                    while ($fetch = mysqli_fetch_assoc($res)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $fetch['category_id'] ?></td>
                                            <td><?php echo $fetch['category_name'] ?></td>
                                            <td><?php
                                                if ($fetch['category_type'] == 0) {
                                                ?>

                                                    <span class="badge badge-label bg-primary"><i class="mdi mdi-circle-medium"></i>Expense</span>
                                                <?php
                                                } else {
                                                ?>
                                                    <span class="badge badge-label bg-primary"><i class="mdi mdi-circle-medium"></i>Income</span>
                                                <?php
                                                }

                                                ?>
                                            </td>
                                            <td><?php echo $fetch['category_description'] ?></td>
                                            <td>

                                                <?php
                                                if ($fetch['category_status'] == 0) {
                                                ?>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="statusChange" data-status="<?php echo $fetch['category_id'] ?>">
                                                        <label class="form-check-label" for="SwitchCheck1"><span id="textChange_<?php echo $fetch['category_id'] ?>">In-Active</span>
                                                        </label>
                                                    </div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="statusChange" data-status="<?php echo $fetch['category_id'] ?>" checked>
                                                        <label class="form-check-label" for="SwitchCheck1"><span id="textChange_<?php echo $fetch['category_id'] ?>">Active</span> </label>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger category_delete" id="<?php echo $fetch['category_id'] ?>">Delete</button>
                                                <button class="btn btn-info category_edit" id="<?php echo $fetch['category_id'] ?>">Edit</button>

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
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <!-- <////////-------view TABLE/////////------------>


    <div class="modal fade" id="edit_modal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fs-3" id="exampleModalgridLabel">Edit Category</h5>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0);" id="updateModal">
                        <div class="row g-3">
                            <div class="col-xxl-6">
                                <div>
                                    <label for="firstName" class="form-label"><strong>Category Name</strong></label>
                                    <input type="text" class="form-control" id="edit_name" placeholder="Enter your name" name="edit_name">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label for="genderInput" class="form-label"><strong>Category Type</strong></label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edit_type" id="edit_type" value="1">
                                        <label class="form-check-label" for="inlineRadio1">Income</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edit_type" id="edit_type1" value="0">
                                        <label class="form-check-label" for="inlineRadio2">Expense</label>
                                    </div>

                                </div>
                            </div>
                            <input type="hidden" name="edit_id" id="cat_id" value="" />
                            <div class="col-xxl-6">
                                <div>
                                    <label for="emailInput" class="form-label"><strong>Category Description</strong></label>
                                    <textarea class="form-control" id="edit_description" cols="30" rows="2" name="edit_description"></textarea>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="edit" id="updateCategory">Update Category</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
    include("../components/footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function($) {
            $(document).on("click", "#submit_category", function(e) {
                e.preventDefault();
                var data = new FormData(form_data);
                $.ajax({
                    url: "./registration.php",
                    method: "POST",
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response == 200) {
                            window.location.reload();
                        } else {
                            alert('Something went wrong! Please try again later')
                        }
                    },
                    error: function(error) {
                        alert(error);
                    }
                });

            })
            $(document).on("click", ".category_delete", function(e) {
                e.preventDefault();
                var id = $(this).attr("id");
                var delete_id = this;
                $.ajax({
                    url: "./delete.php",
                    method: "GET",
                    data: {
                        "id": id
                    },
                    success: function(response) {
                        if (response == 200) {
                            $(delete_id).closest("tr").fadeOut();
                        } else {
                            alert("Error in deleting the category!");
                        }
                    },
                    error: function(error) {
                        alert(error);
                    }
                })
            })
            $(document).on("click", ".category_edit", function() {
                var id = $(this).attr("id");
                $.ajax({
                    url: "./editcategory.php",
                    method: "GET",
                    data: {
                        "id": id
                    },
                    dataType: "JSON",
                    success: function(response) {
                        $("#edit_modal").modal("show");
                        $("#cat_id").val(response.id);
                        $("#edit_name").val(response.category_name);
                        if (response.category_type == 1) {
                            $('#edit_type').prop('checked', true);
                        } else {
                            $('#edit_type1').prop('checked', true);

                        }

                        $("#edit_description").val(response.category_description);

                        //   alert(response['category_name']);
                    },
                    error: function(error) {
                        alert(error)
                    }
                })
            })
            $(document).on("click", "#updateCategory", function(e) {
                e.preventDefault();
                var dataform = new FormData(updateModal);
                $.ajax({
                    url: "./update.php",
                    method: "POST",
                    data: dataform,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response == 200) {
                            $("#edit_modal").modal("hide");
                            window.location.reload();
                        } else {
                            alert("Error in updating the data")
                        }
                    },
                    error: function(error) {
                        alert(error);
                    },
                })
            });
            $(document).on("change", "#statusChange", function() {
                var data = $(this).data('status');
                $.ajax({
                    url: "./switch.php",
                    method: "POST",
                    data: {
                        "data": data
                    },
                    dataType: "JSON",
                    success: function(resp) {
                        $("#textChange_" + resp.id).empty();
                        if (resp.category_status == 1) {
                            $("#textChange_" + resp.id).html("In-active");
                        } else {
                            $("#textChange_" + resp.id).html("Active");

                        }
                    },
                    error: function(error) {
                        alert("Something went wrong!");
                    }
                })
            })
        })
    </script>

</div>
<?php
include("../components/footer.php");
?>