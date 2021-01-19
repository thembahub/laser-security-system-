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
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
    <div class="page-wrapper">
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
                    <i class="fas fa-user-secret fa-3x"></i><a style="margin-bottom: 200px; color: black;">LabContol</a>
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

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div>
                            <div class="card">
                                <div class="alert alert-danger" role="alert" style="display: <?php echo $emailExistVar; ?> ;">
                                    A user exist with the email you enterd!
                                </div>
                                <div class="alert alert-success" role="alert" style="display: <?php echo $usercreatedalert; ?> ;">
                                    User created!
                                </div>
                                <div class="alert alert-danger" role="alert" style="display: <?php echo $userNumCheck; ?> ;">
                                    Make sure the name and surname only contains letters!
                                </div>
                                <div class="card-header">Add user to database</div>
                                <div class="jumbotron jumbotron-fluid" id="FormSelectionBtn">
                                    <div class="row text-center">
                                        <div class="col-sm-6">
                                            <div class="card-body">
                                                <button onclick="displayAll()" style="border-radius: 10px; width: 250px; padding: 50px" type="button" class="btn btn-dark"><i id="userIcon" class="fas fa-user-plus fa-7x text-light"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card-body">
                                                <a href="register.php?addAdmin=add" style="border-radius: 10px; width: 250px; padding: 50px;" type="button" class="btn btn-dark"><i id="userIcon" class="fas fa-lock fa-7x text-light"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body card-block" id="mainForm">
                                    <form method="POST">
                                        <div class="form-row">
                                            <div class="form-group col-md-6" id="nam">
                                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                                            </div>
                                            <div class="form-group col-md-6" id="sur">
                                                <input type="text" name="surname" class="form-control" placeholder="Surname" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" name="email" class="form-control" placeholder="Email@gmail.com" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="form-row" id="selectionInputs">
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Department</label>
                                                <select id="inputState" name="department" class="form-control" required>
                                                    <option selected>ICT</option>
                                                    <option>Humanities</option>
                                                    <option>Managment science</option>
                                                    <option>Science</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Gender</label>
                                                <select id="inputState" name="gender" class="form-control" required>
                                                    <option selected>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Campus</label>
                                                <select id="inputState" name="campus" class="form-control" required>
                                                    <option selected>Soshanguve</option>
                                                    <option>Pretoria</option>
                                                    <option>Acadia</option>
                                                    <option>Polokwane</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Access to lap</label>
                                                <select id="inputState" name="access" class="form-control" required>
                                                    <option selected>Enabled</option>
                                                    <option>Desabled</option>
                                                </select>
                                            </div>

                                        </div>
                                        <button type="submit" name="addUserBtn" class="btn btn-success" style="width: 100%;">Add User</button>
                                    </form>
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
    <script src="js/controls.js"></script>

</body>

</html>
<!-- end document-->