<?php
session_start();

require("../connection/dbConnection.php");

$conn = conString1();


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = $_REQUEST['email'];
    $password = $_REQUEST['pwd'];
    $privilege = "";


    if ($username & $password) {
        $query = "select id, firstName, lastName, balance,lastDeposit,totalDeposited,lastWithdrawal,pendingWithdrawals,totalWithdrawn,dateSigned from users where email='$username' and pwd ='$password'";
        $results = mysqli_query($conn, $query);
        $noofrows = mysqli_num_rows($results);
        if ($noofrows == 1) {
            while ($row = mysqli_fetch_array($results)) {
                $_SESSION['validUser'] = $username;
                $_SESSION['id'] = $row[0];
                $_SESSION['firstName'] = $row[1];
                $_SESSION['lastName'] = $row[2];
                $_SESSION['email'] = $username;
                $_SESSION['userName'] = $row[2] . "," . $row[1];
                $_SESSION['balance'] = $row[3];
                $_SESSION['lastDeposit'] = $row[4];
                $_SESSION['totalDeposited'] = $row[5];
                $_SESSION['lastWithdrawal'] = $row[6];
                $_SESSION['pendingWithdrawals'] = $row[7];
                $_SESSION['totalWithdrawn'] = $row[8];
                $_SESSION['dateSigned'] = $row[9];

                header("Location: ../home.php");
                exit;
            }
        } else {
            header("Location: ../login.php?message=Incorrect credentials");
            exit;
        }
    } else {
        header("Location: ../login.php?message=Please confirm your inputs");
        exit;
    }
}
