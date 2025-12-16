<?php
include("db_connect.php");

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Check if username already exists
    $check = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($link, $check);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already exists!";
    } else {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($link, $sql)) {
            echo "Register successful!";
        } else {
            echo "Error: " . mysqli_error($link);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="" method="post">
        <label for="">User name</label>
        <input type="text" name="username" required> <br>
        <label for="">Password</label>
        <input type="password" name="password" required>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>