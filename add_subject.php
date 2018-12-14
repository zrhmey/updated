<?php
include('db_connection.php');

$error = "<br>";

 if( isset($_POST['add_subject']) ) {
    $subject_title= ($_POST['subject_title']);
    $subject_description= ($_POST['subject_description']);
    $subject_about= ($_POST['subject_about']);
    $teacher_id = "1";

    
    if (empty($subject_title)|empty($subject_description)|empty($subject_about)) {
            $error= 'Please fillup all the fields below';
        }

    else{
        $add_subject_query = "INSERT into subject(course_title, course_description, course_about, teacher_id) VALUES('$subject_title','$subject_description', '$subject_about', '$teacher_id')";
        if ($result = mysqli_query($dbconn, $add_subject_query)) {
             header("Location: teacher_course.php");
        }
    }

}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Online Classroom | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->

                        <div class="classynav">
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Username</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="teacher_home.php">Home</a>
                                            <a class="dropdown-item" href="#">Profile</a>
                                            <a class="dropdown-item" href="index.php">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="img/bg-img/t1.png" alt="">
                                </div>
                            </div>
                        </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### List of Subjects ##### -->
    
    <div class="announcement-page-area section-padding-100">
        <div class="container">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Add Subject</h3>
                </div>
            </div>
            <div class="page-content">
                <h7 class="text text-danger"><?php echo $error;?></h7>
               <form method="POST">
                   <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Subject Title</span>
                        </div>
                        <input type="text" name="subject_title" class="form-control" placeholder="E.g CMSC 56" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">Subject Description</span>
                        </div>
                        <input type="text" name="subject_description" class="form-control" placeholder="Discrete Mathematics" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">About</span>
                        </div>
                        <textarea name="subject_about" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <br/>
                    <button name="add_subject" class="btn btn-primary">Add Subject</button> 
               </form>
            </div>
        </div>
    </div>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.php"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>