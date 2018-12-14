<?php
    require "db_connection.php";

    $error = "<br>";

    if(isset($_POST['add_announcement'])) {
        $announcement_number = $_POST['announcement_number'];
        $announcement_title = $_POST['announcement_title'];
        $announcement_content = $_POST['announcement_content'];
        $announcement_date = $_POST['date_made'];

        // $add_announcement_query = "INSERT into subject_announcement(subject_id, announcement_number, announcement_title, announcement_date, announcement_content) VALUES('1','$announcement_number', '$announcement_title', '$date_made', '$announcement_content')";

        $querry = $dbconn->query("INSERT into subject_announcement(subject_id, announcement_number, title, content, date_made) VALUES('1','$announcement_number', '$announcement_title', '$announcement_content', '$date_made')");
        
        header("Location: teacher_course.php");


        // if($add_announcement_connect = new mysqli($dbconn, $add_announcement_query)) {
        //    header("Location: teacher_course.php");
        // } else {
        //     echo("error");
        // }
    }
?>

<!DOCTYPE html>
<html lang="en">`

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Online Classroom | Quiz</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/expand.css">
    <link rel="stylesheet" href="css/bootstrap-toggle.min.css">
    <script src="js/getdate.js"></script>


    <!-- https://stephanwagner.me/auto-resizing-textarea -->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">


        <!-- Navbar Area -->
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
                            <ul>
                                <li><a href="teacher_home.php">Home</a></li>
                            </ul>

                            <!-- Register / Login -->
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
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="teacher_home.php">Home</a></li>
                <li class="breadcrumb-item"><a href="teacher_course.php">Courses</a></li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Single Course Intro Start ##### -->
   <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg-img/bg1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <!-- ##### Example: Management System ##### -->
                        <h2>Course Description</h2>
                        <!-- ##### Example: CMSC 152 ##### -->
                        <h3>Course Title</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Single Course Intro End ##### -->

    <div class="student-quiz-content section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="section-heading">
                        <h3>Create New Announcement</h3>
                    </div>        
               </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12 border rounded">
                    <div style="padding: 20px 12px 50px 12px;">
                        <form method="post" action="teacher_announcement.php">
                            <input type="hidden" id="announcement_number" name="announcement_number" />
                            <input type="hidden" id="date_made" name="date_made" />
                            <div class="offset-md-2 col-md-8 input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Announcement Title:</div>
                                </div>
                                <!-- <input data-autoresize type="text" class="form-control expand_this" id="announcement_title" name="announcement_title"> -->
                                <textarea data-autoresize rows="1" class="form-control expand_this" id="announcement_title" name="announcement_title"></textarea>
                            </div>
                            <br>

                            <div class="offset-md-1 col-md-10 input-group">
                                <div class="input-group row">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Message:</span>
                                    </div>
                                    <textarea data-autoresize rows="2" class="form-control expand_this" id="announcement_content" name="announcement_content"></textarea>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-success pull-right" name="add_announcement" value="SUBMIT"/>
                        </form>
                    </div>
                </div>

                <div style="margin-top:12px;">
                    <a href="teacher_course.php" class="btn clever-btn">Back</a>
                </div>
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

        <!-- Bottom Footer Area -->
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
    <!-- Toggle -->
    <script src="js/bootstrap-toggle.min.js"></script>
    <script src="js/expand.js"></script>
</body>

</html>