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
    <title>Control</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="fontawesome-free-5.15.0-web/css/all.css" rel="stylesheet">
    <!--load all styles -->
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
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid bg-light">
                        <br>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">LAB_A</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">LAB_B</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">LAB_C</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="contactD-tab" data-toggle="tab" href="#contactD" role="tab" aria-controls="contactD" aria-selected="false">LAB_D</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contactE-tab" data-toggle="tab" href="#contactE" role="tab" aria-controls="contactE" aria-selected="false">LAB_E</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade <?php echo $labA_Tab; ?> " id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div>
                                    <div style="float: right; ">
                                        <h1>A</h1>
                                    </div>
                                    <form method="POST">
                                        <div style="float: left; margin-top: 1%; ">
                                            <!-- Default dropright button -->
                                            <div class="btn-group dropright">

                                                <div class="form-row align-items-center">
                                                    <div class="col-auto my-1">
                                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="filterInput">
                                                            <option selected>Fillter Records</option>
                                                            <option value="1">Today</option>
                                                            <option value="2">Week</option>
                                                            <option value="3">Month</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-auto my-1">
                                                        <button type="submit" name="filterSearchA" class="btn btn-light">Search</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div style="float:right; margin: 2%; margin-top: 0.5%;">
                                            <a href="php/pdfA.php?pdfLab=A" style="display: <?php echo $lockA; ?>;" type="submit" name="downl" class="btn btn-light">Download PDF <i class="fas fa-file-pdf text-danger"></i></i></a>
                                            <button style="display: <?php echo $lockA; ?>;" type="submit" name="labAlockdown" class="btn btn-light">Lock LAB A <i class="fas fa-unlock text-info"></i></button>
                                            <button style="display: <?php echo $UnlockA; ?>;" type="submit" name="labAUndown" class="btn btn-light">Unlock LAB A <i class="fas fa-lock text-info"></i></button>
                                            <button type="submit" name="labAdAll" class="btn btn-light">Delete all records <i class="fas fa-trash text-danger"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive m-b-40">
                                    <div class="alert alert-danger" style="display: <?php echo $labArecordDeleteAlert; ?>" role="alert">
                                        Record Deleted!
                                    </div>
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>username</th>
                                                <th>status</th>
                                                <th>login_time</th>
                                                <th>lab</th>
                                                <th class="bg-danger">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $modalAid = '';
                                            ?>
                                            <?php while ($rowlabAcontrol = $resultlabAcontrol->fetch_assoc()) : ?>
                                            
                                                <tr>
                                                    <td id="userId"><?php echo $rowlabAcontrol['lab_id']; ?></td>
                                                    <td><?php echo $rowlabAcontrol['username']; ?></td>
                                                    <td><?php echo $rowlabAcontrol['status']; ?></td>
                                                    <td><?php echo $rowlabAcontrol['login_time']; ?></td>
                                                    <td class="text-info"><?php echo $rowlabAcontrol['lab_name']; ?></td>
                                                    <td>
                                                        <?php $modalAid =  $rowlabAcontrol['lab_id']; ?>
                                                        <a class="text-danger" data-toggle="modal" data-target="#deleteModal">
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade <?php echo $labB_Tab; ?> " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div style="float: right; ">
                                    <h1>B</h1>
                                </div>
                                <form method="POST">
                                    <div style="float: left; margin-top: 1%; ">
                                        <!-- Default dropright button -->
                                        <div class="btn-group dropright">

                                            <div class="form-row align-items-center">
                                                <div class="col-auto my-1">
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="filterInput">
                                                        <option selected>Fillter Records</option>
                                                        <option value="1">Today</option>
                                                        <option value="2">Week</option>
                                                        <option value="3">Month</option>
                                                    </select>
                                                </div>
                                                <div class="col-auto my-1">
                                                    <button type="submit" name="filterSearchB" class="btn btn-light">Search</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div style="float:right; margin: 2%; margin-top: 0.5%;">
                                        <a href="php/pdfB.php?pdfLab=B" style="display: <?php echo $lockB; ?>;" type="submit" name="downl" class="btn btn-light">Download PDF <i class="fas fa-file-pdf text-danger"></i></i></a>
                                        <button style="display: <?php echo $lockB; ?>;" type="submit" name="labBlockdown" class="btn btn-light">Lock LAB B <i class="fas fa-unlock text-info"></i></button>
                                        <button style="display: <?php echo $UnlockB; ?>;" type="submit" name="labBUndown" class="btn btn-light">Unlock LAB B <i class="fas fa-lock text-info"></i></button>
                                        <button type="submit" name="labBdAll" class="btn btn-light">Delete all records <i class="fas fa-trash text-danger"></i></button>
                                    </div>
                                </form>
                                <div class="table-responsive m-b-40">
                                    <div class="alert alert-danger" style="display: <?php echo $labBrecordDeleteAlert; ?>" role="alert">
                                        Record Deleted!
                                    </div>
                                    <table class="table table-borderless table-data3">

                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>username</th>
                                                <th>status</th>
                                                <th>login_time</th>
                                                <th>lab</th>
                                                <th class="bg-danger">delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $modalBid = '';
                                            ?>
                                            <?php while ($rowlabBcontrol = $resultlabBcontrol->fetch_assoc()) : ?>
                                                <tr>
                                                    <td id="userId"><?php echo $rowlabBcontrol['lab_id']; ?></td>
                                                    <td><?php echo $rowlabBcontrol['username']; ?></td>
                                                    <td><?php echo $rowlabBcontrol['status']; ?></td>
                                                    <td><?php echo $rowlabBcontrol['login_time']; ?></td>
                                                    <td class="text-info"><?php echo $rowlabBcontrol['lab_name']; ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <?php $modalBid =  $rowlabBcontrol['lab_id']; ?>
                                                            <a class="text-danger" data-toggle="modal" data-target="#deleteModalB">
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade <?php echo $labC_Tab; ?> " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div style="float: right; ">
                                    <h1>C</h1>
                                </div>
                                <form method="POST">
                                    <div style="float: left; margin-top: 1%; ">
                                        <!-- Default dropright button -->
                                        <div class="btn-group dropright">

                                            <div class="form-row align-items-center">
                                                <div class="col-auto my-1">
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="filterInput">
                                                        <option selected>Fillter Records</option>
                                                        <option value="1">Today</option>
                                                        <option value="2">Week</option>
                                                        <option value="3">Month</option>
                                                    </select>
                                                </div>
                                                <div class="col-auto my-1">
                                                    <button type="submit" name="filterSearchC" class="btn btn-light">Search</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div style="float:right; margin: 2%; margin-top: 0.5%;">
                                        <a href="php/pdfC.php?pdfLab=C" style="display: <?php echo $lockC; ?>;" type="submit" name="downl" class="btn btn-light">Download PDF <i class="fas fa-file-pdf text-danger"></i></i></a>
                                        <button style="display: <?php echo $lockC; ?>;" type="submit" name="labClockdown" class="btn btn-light">Lock LAB A <i class="fas fa-unlock text-info"></i></button>
                                        <button style="display: <?php echo $UnlockC; ?>;" type="submit" name="labCUndown" class="btn btn-light">Unlock LAB A <i class="fas fa-lock text-info"></i></button>
                                        <button type="submit" name="labCdAll" class="btn btn-light">Delete all records <i class="fas fa-trash text-danger"></i></button>
                                    </div>
                                </form>
                                <div class="table-responsive m-b-40">
                                    <div class="alert alert-danger" style="display: <?php echo $labCrecordDeleteAlert; ?>" role="alert">
                                        Record Deleted!
                                    </div>
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>username</th>
                                                <th>status</th>
                                                <th>login_time</th>
                                                <th class="text-info">lab</th>
                                                <th class="bg-danger">delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $modalCid = '';
                                            ?>
                                            <?php while ($rowlabCcontrol = $resultlabCcontrol->fetch_assoc()) : ?>
                                                <tr>
                                                    <td id="userId"><?php echo $rowlabCcontrol['lab_id']; ?></td>
                                                    <td><?php echo $rowlabCcontrol['username']; ?></td>
                                                    <td><?php echo $rowlabCcontrol['status']; ?></td>
                                                    <td><?php echo $rowlabCcontrol['login_time']; ?></td>
                                                    <td><?php echo $rowlabCcontrol['lab_name']; ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                        <?php $modalCid =  $rowlabCcontrol['lab_id']; ?>
                                                            <a class="text-danger" data-toggle="modal" data-target="#deleteModalC">
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade <?php echo $labD_Tab; ?> " id="contactD" role="tabpanel" aria-labelledby="contactD-tab">
                                <div style="float: right; ">
                                    <h1>D</h1>
                                </div>
                                <form method="POST">
                                    <div style="float: left; margin-top: 1%; ">
                                        <!-- Default dropright button -->
                                        <div class="btn-group dropright">

                                            <div class="form-row align-items-center">
                                                <div class="col-auto my-1">
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="filterInput">
                                                        <option selected>Fillter Records</option>
                                                        <option value="1">Today</option>
                                                        <option value="2">Week</option>
                                                        <option value="3">Month</option>
                                                    </select>
                                                </div>
                                                <div class="col-auto my-1">
                                                    <button type="submit" name="filterSearchD" class="btn btn-light">Search</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div style="float:right; margin: 2%; margin-top: 0.5%;">
                                        <a href="php/pdfD.php?pdfLab=D" style="display: <?php echo $lockD; ?>;" type="submit" name="downl" class="btn btn-light">Download PDF <i class="fas fa-file-pdf text-danger"></i></i></a>
                                        <button style="display: <?php echo $lockD; ?>;" type="submit" name="labDlockdown" class="btn btn-light">Lock LAB A <i class="fas fa-unlock text-info"></i></button>
                                        <button style="display: <?php echo $UnlockD; ?>;" type="submit" name="labDUndown" class="btn btn-light">Unlock LAB A <i class="fas fa-lock text-info"></i></button>
                                        <button type="submit" name="labDdAll" class="btn btn-light">Delete all records <i class="fas fa-trash text-danger"></i></button>
                                    </div>
                                </form>
                                <div class="table-responsive m-b-40">
                                    <div class="alert alert-danger" style="display: <?php echo $labDrecordDeleteAlert; ?>" role="alert">
                                        Record Deleted!
                                    </div>
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>username</th>
                                                <th>status</th>
                                                <th>login_time</th>
                                                <th>lab</th>
                                                <th class="bg-danger">delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $modaliD = '';
                                            ?>
                                            <?php while ($rowlabDcontrol = $resultlabDcontrol->fetch_assoc()) : ?>
                                                <tr>
                                                    <td id="userId"><?php echo $rowlabDcontrol['lab_id']; ?></td>
                                                    <td><?php echo $rowlabDcontrol['username']; ?></td>
                                                    <td><?php echo $rowlabDcontrol['status']; ?></td>
                                                    <td><?php echo $rowlabDcontrol['login_time']; ?></td>
                                                    <td class="text-info"><?php echo $rowlabDcontrol['lab_name']; ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                        <?php $modalDid =  $rowlabDcontrol['lab_id']; ?>
                                                            <a class="text-danger" data-toggle="modal" data-target="#deleteModalD">
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade <?php echo $labE_Tab; ?> " id="contactE" role="tabpanel" aria-labelledby="contactE-tab">
                                <div style="float: right; ">
                                    <h1>E</h1>
                                </div>
                                <form method="POST">
                                    <div style="float: left; margin-top: 1%; ">
                                        <!-- Default dropright button -->
                                        <div class="btn-group dropright">

                                            <div class="form-row align-items-center">
                                                <div class="col-auto my-1">
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="filterInput">
                                                        <option selected>Fillter Records</option>
                                                        <option value="1">Today</option>
                                                        <option value="2">Week</option>
                                                        <option value="3">Month</option>
                                                    </select>
                                                </div>
                                                <div class="col-auto my-1">
                                                    <button type="submit" name="filterSearchE" class="btn btn-light">Search</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div style="float:right; margin: 2%; margin-top: 0.5%;">
                                        <a href="php/pdfE.php?pdfLab=E" style="display: <?php echo $lockE; ?>;" type="submit" name="downl" class="btn btn-light">Download PDF <i class="fas fa-file-pdf text-danger"></i></i></a>
                                        <button style="display: <?php echo $lockE; ?>;" type="submit" name="labElockdown" class="btn btn-light">Lock LAB A <i class="fas fa-unlock text-info"></i></button>
                                        <button style="display: <?php echo $UnlockE; ?>;" type="submit" name="labEUndown" class="btn btn-light">Unlock LAB A <i class="fas fa-lock text-info"></i></button>
                                        <button type="submit" name="labEdAll" class="btn btn-light">Delete all records <i class="fas fa-trash text-danger"></i></button>
                                    </div>
                                </form>
                                <div class="table-responsive m-b-40">
                                    <div class="alert alert-danger" style="display: <?php echo $labErecordDeleteAlert; ?>" role="alert">
                                        Record Deleted!
                                    </div>
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>username</th>
                                                <th>status</th>
                                                <th>login_time</th>
                                                <th>lab</th>
                                                <th class="bg-danger">delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $modalEid = '';
                                            ?>
                                            <?php while ($rowlabEcontrol = $resultlabEcontrol->fetch_assoc()) : ?>
                                                <tr>
                                                    <td id="userId"><?php echo $rowlabEcontrol['lab_id']; ?></td>
                                                    <td><?php echo $rowlabEcontrol['username']; ?></td>
                                                    <td><?php echo $rowlabEcontrol['status']; ?></td>
                                                    <td><?php echo $rowlabEcontrol['login_time']; ?></td>
                                                    <td class="text-info"><?php echo $rowlabEcontrol['lab_name']; ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                        <?php $modalEid =  $rowlabEcontrol['lab_id']; ?>
                                                            <a class="text-danger" data-toggle="modal" data-target="#deleteModalE">
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>

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
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <i class="fas fa-user-secret fa-3x"></i>
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" name="btnLogin" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- A Modal delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
                <a href="labcontrol.php?deleteAdminU=<?php echo $modalAid; ?>" class="btn btn-danger" style="width: 100px;" >Yes</a>
                <button type="button" class="btn btn-info" data-dismiss="modal" style="width: 100px;">No</button>
            </form>
        </div>
        <br>
        </div>
    </div>
    </div>
    <!-- Button trigger modal -->
    <div class="modal fade" id="deleteModalB" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
                <a href="labcontrol.php?deleteBdminU=<?php echo $modalBid; ?>" class="btn btn-danger" style="width: 100px;" >Yes</a>
                <button type="button" class="btn btn-info" data-dismiss="modal" style="width: 100px;">No</button>
            </form>
        </div>
        <br>
        </div>
    </div>
    </div>
    <!-- Button trigger modal -->
    <!-- Button trigger modal -->
    <div class="modal fade" id="deleteModalC" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
                <a href="labcontrol.php?deleteCdminU=<?php echo $modalCid; ?>" class="btn btn-danger" style="width: 100px;" >Yes</a>
                <button type="button" class="btn btn-info" data-dismiss="modal" style="width: 100px;">No</button>
            </form>
        </div>
        <br>
        </div>
    </div>
    </div>
    <!-- Button trigger modal -->
    <!-- Button trigger modal -->
    <div class="modal fade" id="deleteModalD" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
                <a href="labcontrol.php?deleteDdminU=<?php echo $modalDid; ?>" class="btn btn-danger" style="width: 100px;" >Yes</a>
                <button type="button" class="btn btn-info" data-dismiss="modal" style="width: 100px;">No</button>
            </form>
        </div>
        <br>
        </div>
    </div>
    </div>
    <!-- Button trigger modal -->
    <!-- Button trigger modal -->
    <div class="modal fade" id="deleteModalE" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
                <a href="labcontrol.php?deleteEdminU=<?php echo $modalEid; ?>" class="btn btn-danger" style="width: 100px;" >Yes</a>
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
    <script src="js/control.js"></script>

</body>

</html>
<!-- end document-->