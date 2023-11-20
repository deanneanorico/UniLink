<?php
    session_start();

    if(isset($_SESSION['id'])) {
        if($_SESSION['privelege'] == "Faculty" || $_SESSION['privelege'] == "Associate Dean" || $_SESSION['privelege'] == "Dean") {
            header("location: ./faculty_assocdean");
            exit();
        } else if($_SESSION['privelege'] == "Admin") {
            header("location: ./admin");
            exit();
        } else if($_SESSION['privelege'] == "Head") {
            header("location: ./head");
            exit();
        } else if($_SESSION['privelege'] == "VCDEA") {
            header("location: ./vcdea");
            exit();
}
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Unilink - Login</title>
    <link rel="shortcut icon" type="image/png" href="../imgs/BSU.png" alt="Logo" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
<style>
        .form-group {
            position: relative;
        }

        #togglePassword {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-gradient-primary" style="background-image: url('imgs/BSU-Campus.jpg'); background-size: 100% 115%;">

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">

            <div class="col-sm-12 col-md-9 col-lg-7 ">

                <div class="card o-hidden border-0 shadow-sm" style="border-radius: 5;">

                    <div class="card-body p-2">

                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"
                                style="background-image: url('imgs/UNIversity LINkage.png'); background-repeat: no-repeat;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                            <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link to reset your password!</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="medium" href="index.php">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <script>
    function togglePassword() {
        var passwordInput = document.getElementById("exampleInputPassword");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            document.getElementById("togglePassword").innerHTML = "👁️"; // Change to open eye icon
        } else {
            passwordInput.type = "password";
            document.getElementById("togglePassword").innerHTML = "👁️"; // Change to closed eye icon
        }
    }
</script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>