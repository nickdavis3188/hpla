<?php
require("../connection/dbConnection.php");
$conn = conString1();

// print_r($_POST);
if (isset($_POST["submit"])) {

    $pwd = $_POST["pwd"];
    $pwdC = $_POST["pwdC"];
    $btc = $_POST["btc"];
    $eth = $_POST["eth"];
    $bnb = $_POST["bnb"];
    $userId = $_POST["id"];

    if ($pwd) {
        if ($pwd == $pwdC) {
            $query = "UPDATE users SET pwd='$pwd', btc='$btc',eth='$eth',bnb='$bnb' WHERE id=$userId";
            $results = mysqli_query($conn, $query);
            $noofrows = mysqli_affected_rows($conn);

            if ($noofrows == 1) {
                header("Location:  ../profile.php?message=Update successful");
            } else {
                header("Location: ../profile.php?fail= Error:" . mysqli_error($conn));
            }
        } else {
            header("Location:  ../profile.php?fail=Please confirm your password");
        }
    } else {
        $query = "UPDATE users SET  btc='$btc',eth='$eth',bnb='$bnb' WHERE id=$userId";
        $results = mysqli_query($conn, $query);
        $noofrows = mysqli_affected_rows($conn);

        if ($noofrows == 1) {
            header("Location:  ../profile.php?message=Update successful");
        } else {
            header("Location: ../profile.php?fail= Error:" . mysqli_error($conn));
        }
    }
} else {
    header("location: ../profile.php");
}
