<?php
//Access buttons
@session_start();

$btnA = "";
$btnB = "";
$btnC = "";
$btnD = "";
$btnE = "";

//Login to admin and admin var
$mainLogin = "";
$mainContent = "none";

$numUsers = 0;

$adminLabA = "Offline";
$adminLabB = "Offline";
$adminLabC = "Offline";
$adminLabD = "Offline";
$adminLabE = "Offline";
//Admin login var
$errorAlertEmail = "none";
$errorAlertPassword = "none";

$alertRecordDelete = "none";
$registerAlertError = "none";
$registerAlertErrorLogin = "";
$updateUserInfoAlertSuccess = "none";
$updateUserInfoAlertFail = "none";

$emailExistVar = "none";
$usercreatedalert = "none";

/////
$userNumCheck = "none";

//add admin
$displayAddAdminForm = "none";
$succAlert = "none";
$dangrAlertFailInset = "none";
$updateAlert = "none";
$dangrAlert = "none";
$dangrAlertEmailExist = "none";

$displayUpdateForm = "none";

//Admin display admin record
$alerDeleteAdminRecord = "none";
$displayAdminEditForm = "none";

$updateAlert = "none";

//Search var
$searchThename = false;
$searchResults = "none";
$displayDashBord = "";
$displayError = "none";

//Labcontrol var
$labArecordDeleteAlert = "none";
$labBrecordDeleteAlert = "none";
$labCrecordDeleteAlert = "none";
$labDrecordDeleteAlert = "none";
$labErecordDeleteAlert = "none";

//Lock Screen buttons
$UnlockA = "none";
$UnlockB = "none";
$UnlockC = "none";
$UnlockD = "none";
$UnlockE = "none";

//Active screen unlock menue
$lockA = "";
$lockB = "";
$lockC = "";
$lockD = "";
$lockE = "";
//hold lab name
$accessLabId = "";

if (isset($_POST['A'])) {
    $accessLabId = "A";
} else if (isset($_POST['B'])) {
    $accessLabId = "B";
} else if (isset($_POST['C'])) {
    $accessLabId = "C";
} else if (isset($_POST['D'])) {
    $accessLabId = "D";
} else if (isset($_POST['E'])) {
    $accessLabId = "E";
}

//Alerts messagesalertError
$alertError = "none";
//Session ended
$globalAlertInterface = "none";
$globlaBlockInterface = "";


//Control functions
if (!isset($_SESSION['email'])) {
    $globalAlertInterface = "";
    $globlaBlockInterface = "none";
}

//Global var
$recordInsert = false;


/////////////////////////////////////Tab control////////////////////////
$labA_Tab = "show active";
$labB_Tab = "";
$labC_Tab = "";
$labD_Tab = "";
$labE_Tab = "";
