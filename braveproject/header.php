<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="css/dashstyles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="bootstrap/js/bootstrap.min.js"> </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!--        The Menu will be here-->
        <div class="col-3 bg-primary ">
            <ul class="nav flex-column">
                <li class="nav-item navstyles">
                    <i class="fa fa-ravelry fa-3x text-white"></i>
                    <span class="h4 text-white"> BRAVE ADMIN </span>

                </li>

                <hr>

                <li class="nav-item navstyles">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fa fa-dashboard text-white "> </i>
                        <span class="text-white">  Dashboard </span>
                    </a>
                </li>

                <hr>

                <li class="nav-item navstyles">
                    <a class="nav-link" href="addstudent.php">
                        <i class="fa fa-users text-white"> </i>
                        <span class="text-white"> Participants </span>
                    </a>
                </li>
                <li class="nav-item navstyles">
                    <a class="nav-link" href="#">
                        <i class="fa fa-cogs text-white "> </i>
                        <span class="text-white">  Components </span>
                    </a>
                </li>
                <hr>

                <li class="nav-item navstyles">
                    <a class="nav-link" href="documents.php">
                        <i class="fa fa-file text-white"> </i>
                        <span class="text-white"> Documents </span>
                    </a>
                </li>
                <li class="nav-item navstyles">
                    <a class="nav-link" href="#">
                        <i class="fa fa-line-chart text-white"> </i>
                        <span class="text-white">  Charts </span>
                    </a>
                </li>
                <hr>

                <li class="nav-item navstyles">
                    <a class="nav-link" href="reset.php">
                        <i class="fa fa-wrench text-white"> </i>
                        <span class="text-white"> Settings </span>
                    </a>
                </li>
                <li class="nav-item navstyles">
                    <a class="nav-link" href="logout.php">
                        <i class="fa fa-mail-forward text-white"> </i>
                        <span class="text-white"> Logout </span>
                    </a>
                </li>



            </ul>



        </div>

        <!--The content will be here-->
        <div class="col-9 bg-light">

            <div class="row bg-white">

                <div class="col-7">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="col-6 form-control me-2" type="search" placeholder="Search here ..." aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>

                <div class="col-5">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-bell fa-lg "></i>
                                            <span class="badge rounded-pill bg-danger">5+</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-envelope fa-lg"></i>
                                            <span class="badge rounded-pill bg-danger">35+</span>
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            Jane Kamau |
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <img src="images/female.svg" alt="" class="rounded-circle float-end" width="50" height="50">
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>


            </div>

