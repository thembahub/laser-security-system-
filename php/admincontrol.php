<?php
@session_start();
include 'connect.php';


if (isset($_SESSION['email'])) {

    $selectAdminOnline = "SELECT*FROM admin WHERE email = '$_SESSION[email]' ";
    $resultAdminOnline = $conn->query($selectAdminOnline);
    $rowAdminOnline = $resultAdminOnline->fetch_assoc();

    //Total nuber of users
    $countUsers = "SELECT*FROM users";
    $resultcountUsers = $conn->query($countUsers);
    while ($rowcountUsers = $resultcountUsers->fetch_assoc()) {
        $numUsers++;
    }

    //Get all user info
    $selectAllUsers = "SELECT*FROM users";
    $resultselectAllUsers  = $conn->query($selectAllUsers);

    //Delete users
    if (isset($_GET['deleteUser'])) {
        $sqlDeleteUserRecord = "DELETE FROM users WHERE Id = $_GET[deleteUser] ";

        if ($conn->query($sqlDeleteUserRecord) === TRUE) {
            //header("Location: table.php?record=deleted");
        }
    }
    if (isset($_GET['record'])) {
        $alertRecordDelete = "";
    }

    //Update user record updateUserInfo
    if (isset($_GET['updateUserInfo'])) {
        $selectUserToUpdate = "SELECT*FROM users WHERE Id = $_GET[updateUserInfo] ";
        $resultUserToUpdate = $conn->query($selectUserToUpdate);
        $rowUserToUpdate = $resultUserToUpdate->fetch_assoc();

        if (isset($_POST['updateUserInfoBtn'])) {
            $updateUserData = "UPDATE users SET name ='$_POST[name]', surname = '$_POST[surname]', email = '$_POST[email]', pass = '$_POST[password]', campus = '$_POST[campus]', Gender = '$_POST[gender]', access ='$_POST[access]' WHERE Id =  $_GET[updateUserInfo] ";

            if ($conn->query($updateUserData) === TRUE) {
                $updateUserInfoAlertSuccess = "";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }

    //Add users ino the database
    $addUser = false;

    //$_POST[name]', '$_POST[surname]', '$_POST[email]', '$_POST[password]', '$_POST[department]', '$_POST[gender]', '$_POST[campus]', '$_POST[access]')

    if (isset($_POST['addUserBtn'])) {

        if (preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $_POST['name']))
        {
            $userNumCheck = '';

        }else{
            
            if (preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $_POST['surname']))
            {
                $userNumCheck = '';
            }else{
    
                if(ctype_digit($_POST['name']) == TRUE)
                {
                    $userNumCheck = '';
                }
                else
                {
                        
                    if(ctype_digit($_POST['surname']) == TRUE)
                    {
                        $userNumCheck = '';
                    }
                    else
                    {
                //Add users now

                $selectUserExist = "SELECT email FROM users";
                $resultUserExist = $conn->query($selectUserExist);
        
        
                if ($resultUserExist->num_rows > 0) {
                    // output data of each row
                    while ($rowUserExist = $resultUserExist->fetch_assoc()) {
                        if ($rowUserExist['email'] == $_POST['email']) {
        
                            $usercreatedalert = "none";
                            $emailExistVar = "";
                            $addUser = false;
                            break;
                        } else {
                            $addUser = true;
                        }
                    }
                } else {
                    $addUser = true;
                }
        
        
                if ($addUser == true) {
                    $sql = "INSERT INTO users (name, surname, email, pass, department, Gender, campus, access )VALUES ('$_POST[name]', '$_POST[surname]', '$_POST[email]', '$_POST[password]', '$_POST[department]', '$_POST[gender]', '$_POST[campus]', '$_POST[access]')";
        
                    if ($conn->query($sql) === TRUE) {
                        $usercreatedalert = "";
                        $emailExistVar = "none";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        $emailExistVar = "";
                    }
                }
                    }
                    
                }

            }
        }

    }

    //Adding admin
    if (isset($_GET['addAdmin'])) {
        $displayAddAdminForm = "";

        if (isset($_POST['btnAddAdmin'])) {

            
            $sql = "INSERT INTO admin (username, email, password, control, Gender)VALUES ('$_POST[username]', '$_POST[email]','$_POST[password]', '$_POST[control]', '$_POST[gender]')";

            if ($conn->query($sql) === TRUE) {
                //header("register.php?addAdmin#=$_GET[addAdmin])");
                $succAlert = "";
            } else {

                $dangrAlertFailInset = "";
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    //Admin panel
    $selectDisplayAdminUsers = "SELECT * FROM admin";
    $resultDisplayAdminUsers = $conn->query($selectDisplayAdminUsers);

    if (isset($_GET['deleteAdminRecord'])) {
        // sql to delete a record
        $sql = "DELETE FROM admin WHERE admin_id = $_GET[deleteAdminRecord] ";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            header("Location:admin.php?recorddeletedAlert=true");
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    if (isset($_GET['recorddeletedAlert'])) {
        //Admin display admin record
        $alerDeleteAdminRecord = "";
    }
    //Display admin info
    $selectDisplayMainAdminUsers = "SELECT * FROM admin";
    $resultDisplayMainAdminUsers = $conn->query($selectDisplayMainAdminUsers);
    $rowDisplayMainAdminUsers = $resultDisplayMainAdminUsers->fetch_assoc();
    if (isset($_GET['updateAdmin'])) {
        $displayUpdateForm = "";

        $selectDisplayMainAdminOne = "SELECT * FROM admin WHERE admin_id = $_GET[updateAdmin] ";
        $resultDisplayMainAdminOne = $conn->query($selectDisplayMainAdminOne);
        $rowDisplayMainAdminOne = $resultDisplayMainAdminOne->fetch_assoc();

        if (isset($_POST['btnUpdateAdmin'])) {
            $sql = "UPDATE admin SET username = '$_POST[username]', email = '$_POST[email]', password = '$_POST[password]', control='$_POST[control]', Gender = '$_POST[gender]' WHERE admin_id = $_GET[updateAdmin] ";

            if ($conn->query($sql) === TRUE) {
                //header("Location: admin.php?adminrecordUpdatealert=true");
                $updateAlert = "";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }


    $labAcontrol = "SELECT*From lab WHERE lab_name = 'A' ";
    $resultlabAcontrol  = $conn->query($labAcontrol);

    //Delete all records
    if (isset($_POST['labAdAll'])) {
        // sql to delete a record
        $sqlDelAllA = "DELETE FROM lab WHERE lab_name = 'A'";
        if ($conn->query($sqlDelAllA) === TRUE) {
            $tab_A = "Active";
            header("Location: labcontrol.php?labArecords=deleted");
        }
    }
    //Single record
    if (isset($_GET['deleteAdminU'])) {
        // sql to delete a record
        $sqlDelOne = "DELETE FROM lab WHERE lab_id = $_GET[deleteAdminU] ";
        if ($conn->query($sqlDelOne) === TRUE) {
            $tab_A = "Active";
            header("Location: labcontrol.php?labArecords=deleted");
        }
    }
    if (isset($_GET['labArecords'])) {

        $labA_Tab = "show active";
        $labArecordDeleteAlert = "";
    }

    //Lock Lab B

    $labBcontrol = "SELECT*From lab WHERE lab_name = 'B' ";
    $resultlabBcontrol  = $conn->query($labBcontrol);

    //Delete all records
    if (isset($_POST['labBdAll'])) {
        // sql to delete a record
        $sqlDelBllA = "DELETE FROM lab WHERE lab_name = 'B'";
        if ($conn->query($sqlDelBllA) === TRUE) {
            $tab_B = "Active";
            header("Location: labcontrol.php?labBrecords=deleted");
        }
    }
    //Single record
    if (isset($_GET['deleteBdminU'])) {
        // sql to delete a record
        $sqlDelOne = "DELETE FROM lab WHERE lab_id = $_GET[deleteBdminU] ";
        if ($conn->query($sqlDelOne) === TRUE) {
            $tab_B = "Active";
            header("Location: labcontrol.php?labBrecords=deleted");
        }
    }
    if (isset($_GET['labBrecords'])) {

        $labB_Tab = "show active";
        $labA_Tab = "";
        $labC_Tab = "";
        $labD_Tab = "";
        $labE_Tab = "";
        $labBrecordDeleteAlert = "";
    }

    $labCcontrol = "SELECT*From lab WHERE lab_name = 'C' ";
    $resultlabCcontrol  = $conn->query($labCcontrol);


    //Delete all records
    if (isset($_POST['labCdAll'])) {
        // sql to delete a record
        $sqlDelCllA = "DELETE FROM lab WHERE lab_name = 'C'";
        if ($conn->query($sqlDelCllA) === TRUE) {
            $tab_C = "Active";
            header("Location: labcontrol.php?labCrecords=deleted");
        }
    }
    //Single record
    if (isset($_GET['deleteCdminU'])) {
        // sql to delete a record
        $sqlDelOne = "DELETE FROM lab WHERE lab_id = $_GET[deleteCdminU] ";
        if ($conn->query($sqlDelOne) === TRUE) {
            $tab_C = "Active";
            header("Location: labcontrol.php?labCrecords=deleted");
        }
    }
    if (isset($_GET['labCrecords'])) {

        $labB_Tab = "";
        $labA_Tab = "";
        $labC_Tab = "show active";
        $labD_Tab = "";
        $labE_Tab = "";
        $labCrecordDeleteAlert = "";
    }
    $labDcontrol = "SELECT*From lab WHERE lab_name = 'D' ";
    $resultlabDcontrol  = $conn->query($labDcontrol);

    //Delete all records
    if (isset($_POST['labDdAll'])) {
        // sql to delete a record
        $sqlDelDllA = "DELETE FROM lab WHERE lab_name = 'D'";
        if ($conn->query($sqlDelDllA) === TRUE) {
            $tab_C = "Active";
            header("Location: labcontrol.php?labDrecords=deleted");
        }
    }
    //Single record
    if (isset($_GET['deleteDdminU'])) {
        // sql to delete a record
        $sqlDelOne = "DELETE FROM lab WHERE lab_id = $_GET[deleteDdminU] ";
        if ($conn->query($sqlDelOne) === TRUE) {
            $tab_C = "Active";
            header("Location: labcontrol.php?labDrecords=deleted");
        }
    }
    if (isset($_GET['labDrecords'])) {

        $labB_Tab = "";
        $labA_Tab = "";
        $labC_Tab = "";
        $labD_Tab = "show active";
        $labE_Tab = "";
        $labDrecordDeleteAlert = "";
    }

    $labEcontrol = "SELECT*From lab WHERE lab_name = 'E' ";
    $resultlabEcontrol  = $conn->query($labEcontrol);


    //Delete all records
    if (isset($_POST['labEdAll'])) {
        // sql to delete a record
        $sqlDelEllA = "DELETE FROM lab WHERE lab_name = 'E'";
        if ($conn->query($sqlDelEllA) === TRUE) {
            $tab_C = "Active";
            header("Location: labcontrol.php?labErecords=deleted");
        }
    }
    //Single record
    if (isset($_GET['deleteEdminU'])) {
        // sql to delete a record
        $sqlDelOne = "DELETE FROM lab WHERE lab_id = $_GET[deleteEdminU] ";
        if ($conn->query($sqlDelOne) === TRUE) {
            $tab_C = "Active";
            header("Location: labcontrol.php?labErecords=deleted");
        }
    }
    if (isset($_GET['labErecords'])) {

        $labB_Tab = "";
        $labA_Tab = "";
        $labC_Tab = "";
        $labD_Tab = "";
        $labE_Tab = "show active";
        $labErecordDeleteAlert = "";
    }


    //Filters for the records AA
    if (isset($_POST['filterSearchA'])) {

        if (isset($_POST['filterInput'])) {


            $labB_Tab = "";
            $labA_Tab = "show active";
            $labC_Tab = "";
            $labD_Tab = "";
            $labE_Tab = "";

            if ($_POST['filterInput'] == 1) {
                //filter today
                $labAcontrol = "SELECT*From lab WHERE lab_name = 'A' AND DATE(login_time) = DATE(NOW()) ORDER BY lab_id DESC";
                $resultlabAcontrol  = $conn->query($labAcontrol);
            } else if ($_POST['filterInput'] == 2) {
                //filter by a week
                $labAcontrol = "SELECT*From lab WHERE lab_name = 'A' AND WEEKOFYEAR(login_time) = WEEKOFYEAR(NOW()) ORDER BY lab_id DESC";
                $resultlabAcontrol  = $conn->query($labAcontrol);
            } else if ($_POST['filterInput'] == 3) {
                //filter by a week
                $labAcontrol = "SELECT*From lab WHERE lab_name = 'A' AND YEAR(login_time) = YEAR(NOW()) AND MONTH(login_time)=MONTH(NOW()) ORDER BY lab_id DESC";
                $resultlabAcontrol  = $conn->query($labAcontrol);
            }
        }
    }
    //Lab control statements
    //Filters for the records BB
    if (isset($_POST['filterSearchB'])) {

        if (isset($_POST['filterInput'])) {


            $labB_Tab = "show active";
            $labA_Tab = "";
            $labC_Tab = "";
            $labD_Tab = "";
            $labE_Tab = "";

            if ($_POST['filterInput'] == 1) {
                //filter today
                $labBcontrol = "SELECT*From lab WHERE lab_name = 'B' AND DATE(login_time) = DATE(NOW()) ORDER BY lab_id DESC";
                $resultlabBcontrol  = $conn->query($labBcontrol);
            } else if ($_POST['filterInput'] == 2) {
                //filter by a week
                $labBcontrol = "SELECT*From lab WHERE lab_name = 'B' AND WEEKOFYEAR(login_time) = WEEKOFYEAR(NOW()) ORDER BY lab_id DESC";
                $resultlabBcontrol  = $conn->query($labBcontrol);
            } else if ($_POST['filterInput'] == 3) {
                //filter by a week
                $labBcontrol = "SELECT*From lab WHERE lab_name = 'B' AND YEAR(login_time) = YEAR(NOW()) AND MONTH(login_time)=MONTH(NOW()) ORDER BY lab_id DESC";
                $resultlabBcontrol  = $conn->query($labBcontrol);
            }
        }
    }
    //Lab control statements
    //Filters for the records CC
    if (isset($_POST['filterSearchC'])) {

        if (isset($_POST['filterInput'])) {


            $labB_Tab = "";
            $labA_Tab = "";
            $labC_Tab = "show active";
            $labD_Tab = "";
            $labE_Tab = "";

            if ($_POST['filterInput'] == 1) {
                //filter today
                $labCcontrol = "SELECT*From lab WHERE lab_name = 'C' AND DATE(login_time) = DATE(NOW()) ORDER BY lab_id DESC";
                $resultlabCcontrol  = $conn->query($labCcontrol);
            } else if ($_POST['filterInput'] == 2) {
                //filter by a week
                $labCcontrol = "SELECT*From lab WHERE lab_name = 'C' AND WEEKOFYEAR(login_time) = WEEKOFYEAR(NOW()) ORDER BY lab_id DESC";
                $resultlabAcontrol  = $conn->query($labCcontrol);
            } else if ($_POST['filterInput'] == 3) {
                //filter by a week
                $labCcontrol = "SELECT*From lab WHERE lab_name = 'C' AND YEAR(login_time) = YEAR(NOW()) AND MONTH(login_time)=MONTH(NOW()) ORDER BY lab_id DESC";
                $resultlabCcontrol  = $conn->query($labCcontrol);
            }
        }
    }
    //Filters for the records DD
    if (isset($_POST['filterSearchD'])) {

        if (isset($_POST['filterInput'])) {


            $labB_Tab = "";
            $labA_Tab = "";
            $labC_Tab = "";
            $labD_Tab = "show active";
            $labE_Tab = "";

            if ($_POST['filterInput'] == 1) {
                //filter today
                $labDcontrol = "SELECT*From lab WHERE lab_name = 'D' AND DATE(login_time) = DATE(NOW()) ORDER BY lab_id DESC";
                $resultlabDcontrol  = $conn->query($labDcontrol);
            } else if ($_POST['filterInput'] == 2) {
                //filter by a week
                $labDcontrol = "SELECT*From lab WHERE lab_name = 'D' AND WEEKOFYEAR(login_time) = WEEKOFYEAR(NOW()) ORDER BY lab_id DESC";
                $resultlabDcontrol  = $conn->query($labDcontrol);
            } else if ($_POST['filterInput'] == 3) {
                //filter by a week
                $labDcontrol = "SELECT*From lab WHERE lab_name = 'D' AND YEAR(login_time) = YEAR(NOW()) AND MONTH(login_time)=MONTH(NOW()) ORDER BY lab_id DESC";
                $resultlabDcontrol  = $conn->query($labDcontrol);
            }
        }
    }
    //Filters for the records EEE
    if (isset($_POST['filterSearchE'])) {

        if (isset($_POST['filterInput'])) {


            $labB_Tab = "";
            $labA_Tab = "";
            $labC_Tab = "";
            $labD_Tab = "";
            $labE_Tab = "show active";

            if ($_POST['filterInput'] == 1) {
                //filter today
                $labEcontrol = "SELECT*From lab WHERE lab_name = 'E' AND DATE(login_time) = DATE(NOW()) ORDER BY lab_id DESC";
                $resultlabEcontrol  = $conn->query($labEcontrol);
            } else if ($_POST['filterInput'] == 2) {
                //filter by a week
                $labEcontrol = "SELECT*From lab WHERE lab_name = 'E' AND WEEKOFYEAR(login_time) = WEEKOFYEAR(NOW()) ORDER BY lab_id DESC";
                $resultlabEcontrol  = $conn->query($labEcontrol);
            } else if ($_POST['filterInput'] == 3) {
                //filter by a week
                $labEcontrol = "SELECT*From lab WHERE lab_name = 'E' AND YEAR(login_time) = YEAR(NOW()) AND MONTH(login_time)=MONTH(NOW()) ORDER BY lab_id DESC";
                $resultlabEcontrol  = $conn->query($labEcontrol);
            }
        }
    }


    /////////////////////////////////////////////////////////////////////////////////////////////////

    //list active labs
    $A = "SELECT*From lab WHERE status = 'Active' AND lab_name = 'A' ";
    $resultAA = $conn->query($A);
    $rowAA = $resultAA->fetch_assoc();
    if (isset($rowAA)) {
        $adminLabA = "Online";
    }
    $B = "SELECT*From lab WHERE status = 'Active' AND lab_name = 'B' ";
    $resultBB = $conn->query($B);
    $rowBB = $resultBB->fetch_assoc();
    if (isset($rowBB)) {
        $adminLabB = "Online";
    }
    $C = "SELECT*From lab WHERE status = 'Active' AND lab_name = 'C' ";
    $resultCC = $conn->query($C);
    $rowCC = $resultCC->fetch_assoc();
    if (isset($rowCC)) {
        $adminLabC = "Online";
    }
    $D = "SELECT*From lab WHERE status = 'Active' AND lab_name = 'D' ";
    $resultDD = $conn->query($D);
    $rowDD = $resultDD->fetch_assoc();
    if (isset($rowDD)) {
        $adminLabD = "Online";
    }
    $E = "SELECT*From lab WHERE status = 'Active' AND lab_name = 'E' ";
    $resultEE = $conn->query($E);
    $rowEE = $resultEE->fetch_assoc();
    if (isset($rowEE)) {
        $adminLabE = "Online";
    }

    //Locking labs________________________________
    $lockStatusA = "SELECT*From lab_lock WHERE lock_id = 1 ";
    $resultStatusA = $conn->query($lockStatusA);
    $rowStatusA = $resultStatusA->fetch_assoc();

    ////////////////////////////////////////////-----AAA
    if ($rowStatusA['lockA'] == "Lock_A") {
        $lockA = "none";
        $UnlockA = "";
    } else {
        $lockA = "";
        $UnlockA = "none";
    }
    if (isset($_POST['labAlockdown'])) {
        $sqlLockA = "UPDATE lab_lock SET lockA = 'Lock_A' WHERE lock_id = 1 ";
        if ($conn->query($sqlLockA) === TRUE) {
            //echo "Record updated successfully";
            header("Location: labcontrol.php");
        }
    }
    if (isset($_POST['labAUndown'])) {
        $sqlLockA = "UPDATE lab_lock SET lockA = 'Unlock_A' WHERE lock_id = 1 ";
        if ($conn->query($sqlLockA) === TRUE) {
            //echo "Record updated successfully";
            header("Location: labcontrol.php");
        }
    }
    ////////////////////////////////////////////-----BB
    if ($rowStatusA['lockB'] == "Lock_B") {
        $lockB = "none";
        $UnlockB = "";
    } else {
        $lockB = "";
        $UnlockB = "none";
    }
    if (isset($_POST['labBlockdown'])) {
        $sqlLockB = "UPDATE lab_lock SET lockB = 'Lock_B' WHERE lock_id = 1 ";
        if ($conn->query($sqlLockB) === TRUE) {
            //echo "Record updated successfully";
            header("Location: labcontrol.php?tab=b");
        }
    }
    if (isset($_POST['labBUndown'])) {
        $sqlLockB = "UPDATE lab_lock SET lockB = 'Unlock_B' WHERE lock_id = 1 ";
        if ($conn->query($sqlLockB) === TRUE) {
            //echo "Record updated successfully";
            header("Location: labcontrol.php?tab=b");
        }
    }
    if (isset($_GET['tab'])) {
        if ($_GET['tab'] == 'b') {
            $labB_Tab = "show active";
            $labA_Tab = "";
            $labC_Tab = "";
            $labD_Tab = "";
            $labE_Tab = "";
        }
    }

    ////////////////////////////////////////////-----CCCCCC
    if ($rowStatusA['lockC'] == "Lock_C") {
        $lockC = "none";
        $UnlockC = "";
    } else {
        $lockC = "";
        $UnlockC = "none";
    }
    if (isset($_POST['labClockdown'])) {
        $sqlLockC = "UPDATE lab_lock SET lockC = 'Lock_C' WHERE lock_id = 1 ";
        if ($conn->query($sqlLockC) === TRUE) {
            //echo "Record updated successfully";
            header("Location: labcontrol.php?tab=c");
        }
    }
    if (isset($_POST['labCUndown'])) {
        $sqlLockC = "UPDATE lab_lock SET lockC = 'Unlock_C' WHERE lock_id = 1 ";
        if ($conn->query($sqlLockC) === TRUE) {
            //echo "Record updated successfully";
            header("Location: labcontrol.php?tab=c");
        }
    }
    if (isset($_GET['tab'])) {
        if ($_GET['tab'] == 'c') {
            $labB_Tab = "";
            $labA_Tab = "";
            $labC_Tab = "show active";
            $labD_Tab = "";
            $labE_Tab = "";
        }
    }

    ////////////////////////////////////////////-----BB
    if ($rowStatusA['lockD'] == "Lock_D") {
        $lockD = "none";
        $UnlockD = "";
    } else {
        $lockD = "";
        $UnlockD = "none";
    }
    if (isset($_POST['labDlockdown'])) {
        $sqlLockD = "UPDATE lab_lock SET lockD = 'Lock_D' WHERE lock_id = 1 ";
        if ($conn->query($sqlLockD) === TRUE) {
            //echo "Record updated successfully";
            header("Location: labcontrol.php?tab=d");
        }
    }
    if (isset($_POST['labDUndown'])) {
        $sqlLockD = "UPDATE lab_lock SET lockD = 'Unlock_D' WHERE lock_id = 1 ";
        if ($conn->query($sqlLockD) === TRUE) {
            //echo "Record updated successfully";
            header("Location: labcontrol.php?tab=d");
        }
    }
    if (isset($_GET['tab'])) {
        if ($_GET['tab'] == 'd') {
            $labB_Tab = "";
            $labA_Tab = "";
            $labC_Tab = "";
            $labD_Tab = "show active";
            $labE_Tab = "";
        }
    }

    ////////////////////////////////////////////-----BB
    if ($rowStatusA['lockE'] == "Lock_E") {
        $lockE = "none";
        $UnlockE = "";
    } else {
        $lockE = "";
        $UnlockE = "none";
    }
    if (isset($_POST['labElockdown'])) {
        $sqlLockE = "UPDATE lab_lock SET lockE = 'Lock_E' WHERE lock_id = 1 ";
        if ($conn->query($sqlLockE) === TRUE) {
            //echo "Record updated successfully";
            header("Location: labcontrol.php?tab=e");
        }
    }
    if (isset($_POST['labEUndown'])) {
        $sqlLockE = "UPDATE lab_lock SET lockE = 'Unlock_E' WHERE lock_id = 1 ";
        if ($conn->query($sqlLockE) === TRUE) {
            //echo "Record updated successfully";
            header("Location: labcontrol.php?tab=e");
        }
    }
    if (isset($_GET['tab'])) {
        if ($_GET['tab'] == 'e') {
            $labB_Tab = "";
            $labA_Tab = "";
            $labC_Tab = "";
            $labD_Tab = "";
            $labE_Tab = "show active";
        }
    }
} else {
    $registerAlertError = "";
    $registerAlertErrorLogin = "none";
}

if(isset($_POST['confrim']))
{
    echo "OK";
    header("Location: index.php");
}
$mainTable = "";
$confirmModal = "none";

if(isset($_GET['deleteID']))
{
    $mainTable = "none";
    $confirmModal = "";
}
if(isset($_GET['deleteUser']))
{
    header("Location: table.php?update=delete");

}
if(isset($_GET['update']))
{
    $alertRecordDelete = "";
}