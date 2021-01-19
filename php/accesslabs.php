<?php
@session_start();
include 'connect.php';
include 'mainVar.php';

//Direct to  login section
if (isset($_POST['A']) || isset($_POST['B']) || isset($_POST['C']) || isset($_POST['D']) || isset($_POST['E'])) {
    header("Location: login.php?lab=$accessLabId");
}
//Check login info
$insertUserRecord = false;
$alertErrorUserOn = "none";

if (isset($_POST['btnLoginLap'])) {

    if (isset($_POST['email']) && isset($_POST['password'])) {

        $sqlCheckIfUserIsActive = "SELECT*FROM lab WHERE username = '$_POST[email]' AND status = 'Active' ";
        $resultCheckIfUserIsActive = $conn->query($sqlCheckIfUserIsActive);
        $rowCheckIfUserIsActive = $resultCheckIfUserIsActive->fetch_assoc();

        if (empty($rowCheckIfUserIsActive)) {
            $sqlLoginInfo = "SELECT*FROM users";
            $resultLoginInfo = $conn->query($sqlLoginInfo);

            while ($rowLoginInfo = $resultLoginInfo->fetch_assoc()) {

                if ($rowLoginInfo['email'] == $_POST['email'] && $rowLoginInfo['pass'] == $_POST['password']) {

                    $sqlUserRecord = "INSERT INTO lab (status, lab_name, username) VALUES ('Active', '$_GET[lab]', '$_POST[email]')";

                    if ($conn->query($sqlUserRecord) === TRUE) {
                        
                        header("Location: activelab.php?activelab=$_GET[lab]");

                    } else {
                        echo "Error: " . $sqlUserRecord . "<br>" . $conn->error;
                    }

                    $_SESSION['email'] = $_POST['email'];
                } else {

                    $alertError = " ";
                }
            }
        } else {
            $alertErrorUserOn = "";
        }
    }
}
//Set controls for the lab
if (isset($_SESSION['email'])) {

    //Display active the lab information
    if (isset($_GET['activelab'])) {
        $sqlDisplay = "SELECT*FROM lab WHERE username = '$_SESSION[email]' AND status = 'Active' AND lab_name = '$_GET[activelab]' ";
        $resultDisplay = $conn->query($sqlDisplay);
        $rowLapAcess = $resultDisplay->fetch_assoc();
    }
}
//Display active the lab information
$sqlActiveA = "SELECT*FROM lab WHERE status = 'Active' AND lab_name = 'A' ";
$resultActiveA  = $conn->query($sqlActiveA);
$rowActiveA  = $resultActiveA->fetch_assoc();

if (isset($rowActiveA)) {
    if ($rowActiveA['lab_name'] == 'A') {
        $btnA = "disabled";
    }
}
//Lab B control 
$sqlActiveB = "SELECT*FROM lab WHERE status = 'Active' AND lab_name = 'B' ";
$resultActiveB  = $conn->query($sqlActiveB);
$rowActiveB  = $resultActiveB->fetch_assoc();

if (isset($rowActiveB)) {
    if ($rowActiveB['lab_name'] == 'B') {
        $btnB = "disabled";
    }
}
//
//Lab B control 
$sqlActiveC = "SELECT*FROM lab WHERE status = 'Active' AND lab_name = 'C' ";
$resultActiveC  = $conn->query($sqlActiveC);
$rowActiveC  = $resultActiveC->fetch_assoc();

if (isset($rowActiveC)) {
    if ($rowActiveC['lab_name'] == 'C') {
        $btnC = "disabled";
        //echo "B active";
    }
}
//
//Lab B control 
$sqlActiveD = "SELECT*FROM lab WHERE status = 'Active' AND lab_name = 'D' ";
$resultActiveD  = $conn->query($sqlActiveD);
$rowActiveD  = $resultActiveD->fetch_assoc();

if (isset($rowActiveD)) {
    if ($rowActiveD['lab_name'] == 'D') {
        $btnD = "disabled";
        //echo "B active";
    }
}
//
//Lab B control 
$sqlActiveE = "SELECT*FROM lab WHERE status = 'Active' AND lab_name = 'E' ";
$resultActiveE  = $conn->query($sqlActiveE);
$rowActiveE  = $resultActiveE->fetch_assoc();

if (isset($rowActiveE)) {
    if ($rowActiveE['lab_name'] == 'E') {
        $btnE = "disabled";
        //echo "B active";
    }
}
//
if (isset($_POST['labLogOut'])) {

    $sql = "UPDATE lab SET status='Offline' WHERE username = '$_SESSION[email]' AND status = 'Active' AND lab_name = '$_GET[activelab]' ";

    if ($conn->query($sql) === TRUE) {
        header("Location:lab.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    session_destroy();
    
}
