<?php @session_start(); ?>
<?php include 'php/mainVar.php'; ?>
<?php include 'php/adminlogin.php'; ?>
<?php include 'php/admincontrol.php'; ?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Register Admin</title>

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
    <div class="alert alert-danger" role="alert" style="margin: 10%; display: <?php echo $registerAlertError; ?> ">
        <div class="jumbotron-fluid text-center">
            <div class="container">
                <br>
                <br>
                <div class="login-logo">
                    <a href="index.php">
                        <i class="fas fa-user-secret fa-3x"></i>
                    </a>
                </div>
                <h1 class="display-4">Form access error!</h1>
                <p class="lead">Make sure you are logged in to access this form!</p>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="page-wrapper" style="display: <?php echo $registerControl; ?>">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="alert alert-success" role="alert" style="display: <?php echo $succAlert; ?>;">
                        New record created successfully!
                    </div>
                    <div class="alert alert-danger" role="alert" style="display: <?php echo $dangrAlertFailInset; ?>;">
                        Faild to insert record!
                    </div>
                    <!-- Update alerts -->
                    <div class="alert alert-success" role="alert" style="display: <?php echo $updateAlert; ?>;">
                        Record successfully updated!
                    </div>
                    <div class="alert alert-danger" role="alert" style="display: <?php echo $dangrAlert; ?>;">
                        Faild to update record!
                    </div>
                    <div class="alert alert-danger" role="alert" style="display: <?php echo $dangrAlertEmailExist; ?>;">
                        The email exist in our database!
                    </div>
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.php">
                                <i class="fas fa-user-secret fa-3x">
                                </i>
                                <p>LAB CONTROL SYSTEM</p>

                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post" style="display: <?php echo $displayAddAdminForm; ?>;">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Gender</label>
                                    <select id="inputState" name="gender" class="form-control" required>
                                        <option selected>Choose...</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Control</label>
                                    <select id="inputState" name="control" class="form-control" required>
                                        <option selected>Choose...</option>
                                        <option>allow</option>
                                        <option>restrict</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>
                                <button name="btnAddAdmin" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                            </form>
                            <form method="post" style="display: <?php echo $displayUpdateForm; ?>;">
                                <div class="form-group">
                                    <label>Username</label>
                                    <textarea class="form-control" name="username" rows="1"><?php echo $rowDisplayMainAdminOne['username']; ?></textarea> </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <textarea class="form-control" name="email" rows="1"><?php echo $rowDisplayMainAdminOne['email']; ?></textarea> </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <textarea class="form-control" name="password" rows="1"><?php echo $rowDisplayMainAdminOne['password']; ?></textarea> </div>
                                <div class="form-group">
                                    <label for="inputState">Gender</label>
                                    <select id="inputState" name="gender" class="form-control" required>
                                        <option selected><?php echo $rowDisplayMainAdminOne['Gender']; ?></option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Control</label>
                                    <select id="inputState" name="control" class="form-control" required>
                                        <option selected><?php echo $rowDisplayMainAdminOne['control']; ?></option>
                                        <option>allow</option>
                                        <option>restrict</option>
                                    </select>
                                </div>
                                <button name="btnUpdateAdmin" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Update user</button>
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

</body>

</html>
<!-- end document-->