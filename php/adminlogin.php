<?php
@session_start();
include 'connect.php';

//Login 
if (isset($_POST['btnLogin'])) {

    $selectUser = "SELECT email, password FROM admin Where control = 'allow' ";
    $resultSelectUser = $conn->query($selectUser);

    if ($resultSelectUser->num_rows > 0) {
        while ($rowSelectUser = $resultSelectUser->fetch_assoc()) {

            if ($rowSelectUser['email'] == $_POST['email']) {
                if ($rowSelectUser['password'] == $_POST['password']) {
                    $_SESSION['email'] = $_POST['email'];
                } else {
                    $errorAlertPassword = "";
                    $errorAlertEmail = "none";
                }
            } else {
                $errorAlertEmail = "";
            }
        }
    } else {

        $errorAlertEmail = "";
    }
}
if (isset($_SESSION['email'])) {
    $mainLogin = "none";
    $mainContent = "";
} else {

    $mainLogin = "";
    $mainContent = "none";
}

//Logout
if (isset($_POST['btnLogout'])) {

    session_destroy();
    header("Location: ./index.php?session=over");
}
