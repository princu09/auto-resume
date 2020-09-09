<?php

session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        require '_dbconnect.php';

        $user_img = $_POST["user_img"];
        $user_name = $_POST["user_name"];
        $user_about = $_POST["user_about"];
        $user_cv = $_POST["user_cv"];
        $facebook = $_POST["facebook"];
        $instagram = $_POST["instagram"];
        $twitter = $_POST["twitter"];
        $linkedin = $_POST["linkedin"];

        if ((($user_img) && ($user_name) && ($user_about) && ($user_cv) && ($facebook) && ($instagram) && ($twitter) && ($linkedin)) == !NULL) {
            
            $_SESSION['user_img'] = $user_img;
            $_SESSION['user_name'] = $user_name;
            $_SESSION['user_about'] = $user_about;
            $_SESSION['user_cv'] = $user_cv;
            $_SESSION['facebook'] = $facebook;
            $_SESSION['instagram'] = $instagram;
            $_SESSION['twitter'] = $twitter;
            $_SESSION['linkedin'] = $linkedin;

            header("Location: welcome2.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Title Page-->
    <title>NFG Resume</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="page-wrapper bg-gra-01 p-t-70 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Enter Resume Info</h2>
                    <form action="welcome.php" method="POST">

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Image For BG (url)" name="user_img">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Your Name" name="user_name">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Enter About Us" name="user_about">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Enter CV Link" name="user_cv">
                        </div>

                        <h5 style="margin-bottom: 20px; color: grey;">Enter Username Only (@princu.09)</h5>

                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-3" type="text" placeholder="Facebook" name="facebook">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-3" type="text" placeholder="Instagram" name="instagram">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-3" type="text" placeholder="Twitter" name="twitter">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-3" type="text" placeholder="Linkedin" name="linkedin">
                                </div>
                            </div>
                        </div>


                        <div class="p-t-10">
                            <button class="btn btn--pill btn--orange" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->