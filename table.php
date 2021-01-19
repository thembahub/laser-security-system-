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
    <title>Tables</title>

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
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div style="display:<?php echo $confirmModal; ?>">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Delete!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <a href="table.php"><span aria-hidden="true">&times;</span></a>
            
            </button>
        </div>
        <div class="modal-body text-center">
            <p style="margin: 5%;">Are you sure you want to delete this record!</p>
            <form methos="POST">
                <a href="table.php?deleteUser=<?php echo $_GET['deleteID']; ?>" type="submit" class="btn btn-danger" style="width: 100px;" >Yes</a>
                <a href="table.php" class="btn btn-info" style="width: 100px;">No</a>
            </form>
        </div>
        <br>
        </div>
    </div>
    </div>
    <div class="page-wrapper" style="display:<?php echo $mainTable; ?>">
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
                            <form class="form-header" action="" method="POST">
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
                <div class="section__content section__content">
                    <div class="container-fluid">
                        <div class=" ">
                            <div class="card-body">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <div class="alert alert-danger" style="display: <?php echo $alertRecordDelete; ?>" role="alert">
                                        Record Deleted!
                                    </div>
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>name</th>
                                                <th>surname</th>
                                                <th>department</th>
                                                <th>campus</th>
                                                <th>email</th>
                                                <th>date</th>
                                                <th>access</th>
                                                <th class="bg-info text-center">More</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($rowAselectAllUsers  = $resultselectAllUsers->fetch_assoc()) : ?>
                                                <tr>
                                                    <td id="userId"><?php echo $rowAselectAllUsers['Id']; ?></td>
                                                    <td><?php echo $rowAselectAllUsers['name']; ?></td>
                                                    <td><?php echo $rowAselectAllUsers['surname']; ?></td>
                                                    <td class="process"><?php echo $rowAselectAllUsers['department']; ?></td>
                                                    <td><?php echo $rowAselectAllUsers['campus']; ?></td>
                                                    <td><?php echo $rowAselectAllUsers['email']; ?></td>
                                                    <td><?php echo $rowAselectAllUsers['datecreated']; ?></td>
                                                    <td><?php echo $rowAselectAllUsers['access']; ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a onclick="hideButtonOptions()" type="button" href="updateUserForm.php?updateUserInfo=<?php echo $rowAselectAllUsers['Id']; ?>" style="padding-left: 5px;">
                                                                Edit
                                                            </a>
                                                            <a href="table.php?deleteID=<?php echo $rowAselectAllUsers['Id']; ?>" style="padding-left: 5px;" class="text-danger">
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
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
    <!-- Modal Confirm-->
    <div class="modal fade" id="confirmDetele" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-light" id="staticBackdropLabel">Warning!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <form method="POST">
                        <br>
                        <h4><?php echo $x; ?></h4>
                        <p>Are you sure you want to delete this record!</p>
                        <br>
                        <button type="button" style="width: 100px;" name="btnYes" class="btn btn-danger" data-dismiss="modal">YES</button>
                        <button type="button" style="width: 100px;" name="btnNo" class="btn btn-info" data-dismiss="modal">No</button>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add user modal -->
    <!-- Button trigger modal -->

    <div class="modal fade" id="deleteModalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Delete!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-center">
            <p style="margin: 5%;">Are you sure you want to delete this record!</p>
            <form methos="POST">
                <a href="table.php?deleteUser=<?php echo $modalUser; ?>" class="btn btn-danger" style="width: 100px;" >Yes</a>
                <button type="button" class="btn btn-info" data-dismiss="modal" style="width: 100px;">No</button>
            </form>
        </div>
        <br>
        </div>
    </div>
    </div>
 
    <!-- Button trigger modal -->
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
    <script src=js/controls.js> </script> </body> </html> <!-- end document-->