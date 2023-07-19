<?php
require("../connection/dbConnection.php");
$conn = conString1();

// print_r($_POST);
if (isset($_POST["submit"])) {

    $firstName = $_POST["firstName"];
    $surName = $_POST["surName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $selectedCourse = $_POST["selectedCourse"];
    $qualification = $_POST["qualification"];
    $state = $_POST["state"];
    $joinMode = $_POST["joinMode"];


    $query = "INSERT INTO  student (`firstName`, `surName` ,`email`,`phone`,`selectedCourse`,`qualification`,`state`,`joinMode`)VALUES ('$firstName',' $surName','$email',$phone,'$selectedCourse','$qualification','$state','$joinMode')";
    $results = mysqli_query($conn, $query);
    $noofrows = mysqli_affected_rows($conn);

    if ($noofrows == 1) {
        header("Location:  ../registration.php?msg=Registration successful");
    } else {
        header("Location: ../registration.php?fail= Error:" . mysqli_error($conn));
    }
} else {
    header("location: ../registration.php");
}
