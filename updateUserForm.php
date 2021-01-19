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
  <title>Updateform</title>

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
            <br>
          </a>
        </div>
        <h1 class="display-4">Form access error!</h1>
        <p class="lead">Make sure you are logged in to access this form!</p>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="page-wrapper" style="display: <?php echo $registerAlertErrorLogin; ?> ">
    <div class="page-content--bge5">
      <div class="container">
        <div class="login-wrap">
          <!-- Update alerts -->
          <div class="alert alert-success" role="alert" style="display: <?php echo $updateUserInfoAlertSuccess; ?>;">
            Updated!
          </div>
          <div class="alert alert-danger" role="alert" style="display: <?php echo $updateUserInfoAlertFail; ?>;">
            Faild to update record!
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

              <form method="POST">
                <div class="form-group">
                  <textarea class="form-control" name="name" rows="1"><?php echo $rowUserToUpdate['name']; ?></textarea>

                </div>
                <div class="form-group">
                  <textarea class="form-control" name="surname" rows="1"><?php echo $rowUserToUpdate['surname']; ?></textarea>

                </div>
                <div class="form-group">
                  <textarea class="form-control" name="email" rows="1"><?php echo $rowUserToUpdate['email']; ?></textarea>

                </div>
                <div class="form-group">
                  <textarea class="form-control" name="password" rows="1"><?php echo $rowUserToUpdate['pass']; ?></textarea>

                </div>
                <div class="form-row" id="selectionInputs">
                  <div class="form-group col-md-4">
                    <label for="inputState">Gender</label>
                    <select id="inputState" name="gender" class="form-control" required>
                      <option selected><?php echo $rowUserToUpdate['Gender']; ?></option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Campus</label>
                    <select id="inputState" name="campus" class="form-control" required>
                      <option selected><?php echo $rowUserToUpdate['campus']; ?></option>
                      <option>Soshanguve</option>
                      <option>Pretoria</option>
                      <option>Acadia</option>
                      <option>Polokwane</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Access to lab</label>
                    <select id="inputState" name="access" class="form-control">
                      <option selected><?php echo $rowUserToUpdate['access']; ?></option>
                      <option>Desabled</option>
                      <option>Enabled</option>
                    </select>
                  </div>
                </div>
                <button type="submit" name="updateUserInfoBtn" class="btn btn-success" style="width: 100%;">Update User info</button>
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