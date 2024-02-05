
<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <title>Forms Validation | Steex - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <script src="./steex/./assets/js/layout.js"></script>
    <link href="./steex/./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./steex/./assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="./steex/./assets/css/app.min.css" rel="stylesheet" type="text/css">
    <link href="./steex/./assets/css/custom.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 offset-2">
                        <div class="card shadow-lg">
                            <div class="card-header">
                                <h4 class="text-primary offset-5" style="font-size:26px"><strong>Log In</strong></h4>
                            </div>

                            <div class="card-body">


                                <form class=" offset-2 p-0" id="login_form">
                                    <div class="col-md-10">
                                        <label for="validationDefault02" class="form-label"><strong>Email</strong></label>
                                        <input type="email" class="form-control" id="validationDefault02" value="" name="login_email">
                                    </div>
                                    <div class="col-md-10">
                                        <label for="validationDefaultUsername" class="form-label"><strong>Password</strong></label>
                                        <input type="password" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="login_password">
                                    </div>
                                    <br>
                                    <div class="col-5">
                                        <button class="btn btn-primary mt-0" type="submit" name="submit" id="login_user">Login</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


                <!-- JAVASCRIPT -->
                <script src="./steex/./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="./steex/./assets/libs/simplebar/simplebar.min.js"></script>
                <script src="./steex/./assets/js/plugins.js"></script>
                <script src="./steex/./assets/libs/prismjs/prism.js"></script>

                <script src="./steex/./assets/js/pages/form-validation.init.js"></script>
                <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

                <script src="./steex/./assets/js/app.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

                <script>
                    $(document).ready(function() {
                        $(document).on("click","#login_user", function(e) {
                            e.preventDefault();
                            var form = new FormData(login_form);
                            $.ajax({
                                url: "./login2.php",
                                method: "POST",
                                contentType: false,
                                processData: false,
                                data:form,
                                success: function(response) {
                                   if(response==200){
                                    window.location.href='./steex./index.php';
                                   }else{
                                    alert('Username or Password is incorrect!');
                                   }
                                },

                                error: function(error) {
                                    alert(error)
                                }
                            })
                        })
                    })
                </script>

</body>

</html>