<?php include 'php/mainVar.php'; ?>
<?php include 'php/accesslabs.php'; ?>
<?php include 'php/admincontrol.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="fontawesome-free-5.15.0-web/css/all.css" rel="stylesheet">
    <!--load all styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/moreStyle.css">
    <title>Lab control</title>
</head>

<body class="jumbotron jumbotron-fluid">
    <div class="jumbotron jumbotron-fluid text-info text-center" style="display:none;">
        <div class="container">
            <div class="text-center">
                <img src="images/offline.png" width="100" alt="">
            </div>
            <h1 class="display-4">All Labs are currently offline!</h1>
            <p class="lead">please contact system admin for more info!</p>
        </div>
    </div>
    <div class="main" style="display: <?php echo $displayAllLabs; ?>;">
        <div class="container">
            <div class="text-center text-light bg-info" style="padding-bottom: 10px; padding-top: 10px;">
                <h1>Lab access</h1>
            </div>
            <div class="card-group">
                <div class="card">
                    <div class="card-body" style="display: <?php echo $UnlockA; ?>;">
                        <h5 class="card-title">LAB A</h5>
                        <div class="text-center">
                            <i class="fas fa-suitcase-rolling fa-5x text-danger"></i>
                        </div>
                        <br>
                        <p>Status <span class="text-danger">OFFLINE</span></p>
                        <hr>
                    </div>
                    <div class="card-body" style="display: <?php echo $lockA; ?>;">
                        <h5 class="card-title">LAB A</h5>
                        <div class="text-center">
                            <img src="images/computer.png" id="pc" alt="">
                        </div>
                        <br>
                        <p>Status <span class="text-success">Active</span></p>
                        <hr>
                        <form method="POST">
                            <button type="submit" name="A" class="btn btn-info mb-2" style="float: right;" <?php echo $btnA; ?>>Access Lab</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body" style="display: <?php echo $UnlockB; ?>;">
                        <h5 class="card-title">LAB B</h5>
                        <div class="text-center">
                            <i class="fas fa-suitcase-rolling fa-5x text-danger"></i>
                        </div>
                        <br>
                        <p>Status <span class="text-danger">OFFLINE</span></p>
                        <hr>
                    </div>
                    <div class="card-body" style="display: <?php echo $lockB; ?>;">
                        <h5 class="card-title">LAB B</h5>
                        <div class="text-center">
                            <img src="images/computer.png" id="pc" alt="">
                        </div>
                        <br>
                        <p>Status <span class="text-success">Active</span></p>
                        <hr>
                        <form method="POST">
                            <button type="submit" name="B" class="btn btn-info mb-2" style="float: right;" <?php echo $btnB; ?>>Access Lab</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body" style="display: <?php echo $UnlockC; ?>;">
                        <h5 class="card-title">LAB C</h5>
                        <div class="text-center">
                            <i class="fas fa-suitcase-rolling fa-5x text-danger"></i>
                        </div>
                        <br>
                        <p>Status <span class="text-danger">OFFLINE</span></p>
                        <hr>
                    </div>
                    <div class="card-body" style="display: <?php echo $lockC; ?>;">
                        <h5 class="card-title">LAB C</h5>
                        <div class="text-center">
                            <img src="images/computer.png" id="pc" alt="">
                        </div>
                        <br>
                        <p>Status <span class="text-success">Active</span></p>
                        <hr>
                        <form method="POST">
                            <button type="submit" name="C" class="btn btn-info mb-2" style="float: right;" <?php echo $btnC; ?>>Access Lab</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <div class="card-body" style="display: <?php echo $UnlockD; ?>;">
                        <h5 class="card-title">LAB D</h5>
                        <div class="text-center">
                            <i class="fas fa-suitcase-rolling fa-5x text-danger"></i>
                        </div>
                        <br>
                        <p>Status <span class="text-danger">OFFLINE</span></p>
                        <hr>
                    </div>
                    <div class="card-body" style="display: <?php echo $lockD; ?>;">
                        <h5 class="card-title">LAB D</h5>
                        <div class="text-center">
                            <img src="images/computer.png" id="pc" alt="">
                        </div>
                        <br>
                        <p>Status <span class="text-success">Active</span></p>
                        <hr>
                        <form method="POST">
                            <button type="submit" name="D" class="btn btn-info mb-2" style="float: right;" <?php echo $btnD; ?>>Access Lab</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body" style="display: <?php echo $UnlockE; ?>;">
                        <h5 class="card-title">LAB E</h5>
                        <div class="text-center">
                            <i class="fas fa-suitcase-rolling fa-5x text-danger"></i>
                        </div>
                        <br>
                        <p>Status <span class="text-danger">OFFLINE</span></p>
                        <hr>
                    </div>
                    <div class="card-body" style="display: <?php echo $lockE; ?>;">
                        <h5 class="card-title">LAB E</h5>
                        <div class="text-center">
                            <img src="images/computer.png" id="pc" alt="">
                        </div>
                        <br>
                        <p>Status <span class="text-success">Active</span></p>
                        <hr>
                        <form method="POST">
                            <button type="submit" name="E" class="btn btn-info mb-2" style="float: right;" <?php echo $btnE; ?>>Access Lab</button>
                        </form>
                    </div>
                </div>
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