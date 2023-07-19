<?php
require("../connection/dbConnection.php");
$conn = conString1();

// print_r($_POST);
if (isset($_POST["submit"])) {
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $pwd = $_POST["pwd"];
    $pwdCon = $_POST["pwdCon"];
    $dateSigned = date('Y-m-d');

    if ($pwd == $pwdCon) {
        $query = "INSERT INTO users (`firstName`, `middleName` ,`lastName`, `email`,`phone`,`country`, `state`,`pwd`,`dateSigned`)VALUES ('$firstName',' $middleName','$lastName','$email','$phone','$country','$state','$pwd','$dateSigned')";
        $results = mysqli_query($conn, $query);
        $noofrows = mysqli_affected_rows($conn);

        if ($noofrows == 1) {
            header("Location:  ../login.php?message=Registration Successful, pleas login with your credentials");
        } else {
            header("Location: ../register.php?fail= Error:" . mysqli_error($conn));
        }
    } else {
        header("Location: ../register.php?fail= Error:pleas confirm your Password");
    }
} else {
    header("location: ../register.php");
}
