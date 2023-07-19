<?php
require("../connection/dbConnection.php");
$conn = conString1();

// print_r($_POST);
if (isset($_POST["submit"])) {

    $investmentPlan = $_POST["package"];
    $currency = $_POST["channel"];
    $amount = $_POST["amount"];
    $userId = $_POST["userId"];
    $dateTime = $_POST["dateTime"];


    $query = "INSERT INTO invoice (`investmentPlan`, `currency` ,`amount`,`userId`,`dateTime`,`status`)VALUES ('$investmentPlan',' $currency','$amount',$userId,'$dateTime',0)";
    $results = mysqli_query($conn, $query);
    $noofrows = mysqli_affected_rows($conn);

    if ($noofrows == 1) {
        header("Location:  ../invoice.php?amount=$amount & coin=$currency");
    } else {
        header("Location: ../deposit.php?fail= Error:" . mysqli_error($conn));
    }
} else {
    header("location: ../deposit.php");
}
