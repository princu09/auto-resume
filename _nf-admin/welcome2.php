<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        require '_dbconnect.php';
        
        session_start();
    
        $user_img = $_SESSION['user_img'];
        $user_name = $_SESSION['user_name'] ;
        $user_about = $_SESSION['user_about'] ;
        $user_cv = $_SESSION['user_cv'] ;
        $facebook = $_SESSION['facebook'] ;
        $instagram = $_SESSION['instagram'] ;
        $twitter = $_SESSION['twitter'] ;
        $linkedin = $_SESSION['linkedin'] ;

        $user_email = $_POST["user_email"];
        $user_tel = $_POST["user_tel"];
        $user_fax = $_POST["user_fax"];
        $user_addr1 = $_POST["user_addr1"];
        $user_addr2 = $_POST["user_addr2"];
        $user_city = $_POST["user_city"];
        $user_pincode = $_POST["user_pincode"];

        $sql = "INSERT INTO `resume-details` (`user-img`, `user-name`, `user-about`, `cvlink`, `facebook`, `instagram`, `twitter`, `linkedin`, `user-email`, `user-mobile`, `user-fax`, `user-addr1`, `user-addr2`, `user-city`, `user-pincode`, `timestamp`) VALUES ('$user_img', '$user_name', '$user_about', '$user_cv', '$facebook', '$instagram', '$twitter', '$linkedin', '$user_email', '$user_tel', '$user_fax', '$user_addr1', '$user_addr2', '$user_city', '$user_pincode', current_timestamp())";

        $result = mysqli_query($connect, $sql);

        if($result){
            header("Location: ../index.php");
        }else {
            echo "Error :(";
        }
    }

?>

<!-- INSERT INTO `resume-details` (`id`, `user-img`, `user-name`, `user-about`, `cvlink`, `facebook`, `instagram`, `twitter`, `linkedin`, `user-email`, `user-mobile`, `user-fax`, `user-addr1`, `user-addr2`, `user-city`, `user-pincode`, `timestamp`) VALUES (NULL, 'https://images.unsplash.com/photo-1508921340878-ba53e1f016ec?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80', 'Prince Patel', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos vero recusandae porro illo eveniet voluptates ipsa ipsam esse quia beatae laboriosam, culpa molestiae quidem architecto! Voluptatum praesentium modi reiciendis a voluptas optio reprehenderit nostrum numquam consequuntur quia recusandae, perspiciatis tempore provident, sint voluptates? Id obcaecati, pariatur dignissimos assumenda quos quae.', 'cv.pdf', 'NorthFoxGroup', 'NorthFoxGroup', 'NorthFoxGroup', 'NorthFoxGroup', 'admin@nfg.com', '1', '1', '1', '1', '1', '1', current_timestamp()); -->


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Title Page-->
    <title>NFG Resume</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
                    <h2 class="title">Enter Contact Detail</h2>
                    <form action="welcome2.php" method="POST">

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Your Email" name="user_email">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Your Mobile" name="user_tel">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Your Fax" name="user_fax">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Your Address Line 1"
                                name="user_addr1">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Your Address Line 2"
                                name="user_addr2">
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-3" type="text" placeholder="Your City" name="user_city">
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-3" type="tel" maxlength="5" placeholder="Your Pincode"
                                        name="user_pincode">
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