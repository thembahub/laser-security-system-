<?php @session_start(); ?>
<?php include 'php/accesslabs.php'; ?>
<?php include 'php/mainVar.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/moreStyle.css">
  <title>Active Lab</title>

  <!-- Fontfaces CSS-->
  <link href="css/font-face.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
</head>

<body class="jumbotron jumbotron-fluid">
  <div class="alert alert-danger text-center" role="alert" style="display:<?php echo $globalAlertInterface; ?>; margin: 5%;">
    <div class="login-logo text-center">
      <a href="lab.php">
        <i class="fas fa-user-secret fa-3x"></i>
      </a>
    </div>
    <br>
    You are logged out of the system!...login again to access!!
  </div>
  <div style="margin: 3%; display:<?php echo $globlaBlockInterface; ?>;">
    <div class="row">
      <div class="col-sm-6">
        <div class="login-logo">
          <a href="lab.php">
            <i class="fas fa-user-secret fa-3x"></i>
          </a>
        </div>
        <br>
        <h5 class="card-title">Lab status : <?php echo $rowLapAcess['status']; ?> </h5>
        <h5 class="card-title">Curent User : <?php echo $rowLapAcess['username']; ?></h5>
        <hr>
      </div>
      <div class="col-sm-6 text-center" style="border: 5px solid rgb(6, 201, 207); border-radius: 10px;">
        <br>
        <br>
        <img src="images/computer.png" width="200" alt="">
        <h1><?php echo 'LAB' . ' ' . $rowLapAcess['lab_name']; ?></h1>
        <p class="text-success">ACTIVE</p>
        <form method="POST">
          <button type="submit" name="labLogOut" class="btn btn-info mb-2" style="float: right; padding: 20px; border-radius: 200px; margin-bottom: 2%;">LogOut</button>
        </form>
        <br>
        <br>
      </div>
    </div>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>