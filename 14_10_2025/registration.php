<?php
session_start();

/* connect to database check user */
$con = mysqli_connect('localhost', 'root', '', 'loginReg', 3306);
mysqli_select_db($con, 'LoginReg');

/* create variables to store data */
$name = $_POST['user'];
$pass = $_POST['password'];
$studentid = $_POST['studentid'];
$dob = $_POST['dob'];
$country = $_POST['country'];

/* select data from DB */
$s = "SELECT * FROM userReg WHERE name='$name'";

/* result variable to store data */
$result = mysqli_query($con, $s);

/* check for duplicate names and count records */
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Username Exists";
} else {
    $reg = "INSERT INTO userReg (name, password, StudentID, Date_of_Birth, Country)
            VALUES ('$name', '$pass', '$studentid', '$dob', '$country')";
    mysqli_query($con, $reg);
    echo "Registration successful!";
}
?>