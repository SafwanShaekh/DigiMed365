<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>DigiMed365</title>
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Health Care Medical Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="DigiMed365">
    <meta name="generator" content="DigiMed365 Novena HTML Template v1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.php" />

    <!-- 
  Essential stylesheets
  =====================================-->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@digimed365.com</a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Karachi, Pakistan </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 ">
                    <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="urdu/index.php">

                                <span class="h4">DigiMed365 in اردو</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images\logo.jpg" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="departments.php">Department</a>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="doctors.php">Doctors</a>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="labs.php">Laboritories</a>

                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <?php
                        if (isset($_SESSION['user_id'])) {
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont-user" aria-hidden="true"></i>
                                    <?php echo ($_SESSION['user_name']);  ?></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                    <li><a class="dropdown-item" href="user-dashboard\dashboard.php"><i class="icofont-chart-flow" aria-hidden="true"></i> Dashboard</a></li>
                                    <li><a class="dropdown-item" href="appointments.php"><i class="icofont-page" aria-hidden="true"></i> Book an Appointment</a></li>
                                    <li><a class="dropdown-item" href="logout.php"><i class="icofont-logout" aria-hidden="true"></i> Logout</a></li>

                                    <!-- <li class="dropdown dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                            <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                            <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                            
                        <?php
                        } else {
                        ?>
                            <li class="nav-item"><a class="nav-link" href="login.php"><i class="icofont-user" aria-hidden="true"></i>
                                    Join DigiMed365</a></li>
                        <?php
                        }

                        ?>


                    </ul>
                </div>
            </div>
        </nav>
    </header>