<?php @session_start(); ?>
<?php include 'php/mainVar.php'; ?>
<?php include 'php/adminlogin.php'; ?>
<?php include 'php/admincontrol.php'; ?>
<?php include 'php/search.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper" style="display:<?php echo $mainContent ?>;">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <i class="fas fa-user-secret fa-3x"></i>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="fas fa-user-plus"></i>Add User</a>
                        </li>
                        <li>
                            <a href="admin.php">
                                <i class="fas fa-lock"></i>Admin</a>
                        </li>
                        <li>
                            <a href="labcontrol.php">
                                <i class="fas fa-lock"></i>Lab control</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <i class="fas fa-user-secret fa-3x"></i><a style="margin-bottom: 200px; color: black;">Lab Contol</a>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="fas fa-user-plus"></i>Add User</a>
                        </li>
                        <li>
                            <a href="admin.php">
                                <i class="fas fa-lock"></i>Admin</a>
                        </li>
                        <li>
                            <a href="labcontrol.php">
                                <i class="fas fa-lock"></i>Lab control</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop sticky-top">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit" name="searchBtn">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <i class="fas fa-user-circle fa-2x"></i>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $rowAdminOnline['username']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <i class="fas fa-user-circle fa-4x"></i>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $rowAdminOnline['username']; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $rowAdminOnline['email']; ?></span>
                                                </div>
                                                <br>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Admin Id
                                                        <span class="badge badge-primary badge-pill"><?php echo '##$100' . $rowAdminOnline['admin_id']; ?></span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Username
                                                        <span class="badge badge-primary badge-pill"><?php echo $rowAdminOnline['username']; ?></span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Control
                                                        <span class="badge badge-primary badge-pill"><?php echo $rowAdminOnline['control']; ?></span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Gender
                                                        <span class="badge badge-primary badge-pill"><?php echo $rowAdminOnline['Gender']; ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item text-center">

                                                    <form method="POST">
                                                        <button onclick="logoutFunction()" class="btn" name="btnLogout" type="submit"><i class="zmdi zmdi-power" style="font-size: 40px; color: rgb(50, 121, 168);"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>

                                </div>
                                <br>
                                <table class="table table-borderless table-data3" style="display: <?php echo $searchResults; ?>;">
                                    <?php if (isset($resultAllSearchedRecords)) : ?>
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>username</th>
                                                <th>status</th>
                                                <th>login_time</th>
                                                <th>lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php while ($rowAllSearchedRecords = $resultAllSearchedRecords->fetch_assoc()) : ?>
                                                <tr>
                                                    <td id="userId"><?php echo $rowAllSearchedRecords['lab_id']; ?></td>
                                                    <td><?php echo $rowAllSearchedRecords['username']; ?></td>
                                                    <td><?php echo $rowAllSearchedRecords['status']; ?></td>
                                                    <td><?php echo $rowAllSearchedRecords['login_time']; ?></td>
                                                    <td><?php echo $rowAllSearchedRecords['lab_name']; ?></td>

                                                </tr>
                                            <?php endwhile; ?>

                                        </tbody>
                                    <?php else : ?>
                                        <div class="alert alert-danger" role="alert" style="display: <?php echo $displayError; ?>;">
                                            No records found!
                                        </div>

                                    <?php endif; ?>
                                </table>
                            </div>
                        </div>
                        <div class="row m-t-25" style="display: <?php echo $displayDashBord; ?>;">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix text-center">
                                            <div class="icon ">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <div class="text">

                                                <span>Total users</span>
                                            </div>
                                            <br>
                                            <div class="text text-light">
                                                <span style="color:white;"><?php echo $numUsers; ?></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text-center">
                                                <i class="fas fa-desktop fa-3x" style="color: white;"></i>
                                            </div>
                                            <hr>
                                            <div class="text">
                                                <span>LAB A <span class="text-light"><?php echo $adminLabA; ?></span> </span><br>
                                                <span>LAB B <span class="text-light"><?php echo $adminLabB; ?></span> </span><br>
                                                <span>LAB C <span class="text-light"><?php echo $adminLabC; ?></span> </span><br>
                                                <span>LAB D <span class="text-light"><?php echo $adminLabD; ?></span> </span><br>
                                                <span>LAB E <span class="text-light"><?php echo $adminLabE; ?></span> </span><br>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix text-center">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <br>
                                            <div class="text">
                                                <span>Recent login</span>
                                            </div>
                                            <div class="text-light">

                                                <p><?php // 
                                                    ?></p>
                                                <p><?php // 
                                                    ?></p>

                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-chart text-center" style="color: white; padding-bottom: 180px;">
                                            <i class="fas fa-shield-alt fa-9x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 LapControl. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <!-- Login section -->
    <div class="page-wrapper" style="display:<?php echo $mainLogin ?>;">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="alert alert-danger" role="alert" style="display: <?php echo $errorAlertEmail; ?>;">
                        User does not exist!
                    </div>
                    <div class="alert alert-danger" role="alert" style="display: <?php echo $errorAlertPassword; ?>;">
                        Wrong password!
                    </div>
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <i class="fas fa-user-secret fa-3x"></i><br>
                                LAB CONTROL SYSTEM
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="login-checkbox">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" name="btnLogin" type="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/control.js"></script>

</body>

</html>
<!-- end document-->