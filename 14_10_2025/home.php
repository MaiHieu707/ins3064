<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Take user info from DB
$con = mysqli_connect('localhost', 'root', '', 'loginReg', 3306);
mysqli_select_db($con, 'LoginReg');

$username = $_SESSION['username'];
$query = "SELECT * FROM userReg WHERE name='$username'";
$result = mysqli_query($con, $query);
$user_data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <a class="float-right btn btn-danger mt-3" href="logout.php">LOGOUT</a>
    <h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>

    <div class="user-info text-white mt-5">
        <h3>Your Information:</h3>
        <p><strong>Student ID:</strong> <?php echo $user_data['StudentID']; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $user_data['Date_of_Birth']; ?></p>
        <p><strong>Country:</strong> <?php echo $user_data['Country']; ?></p>
    </div>
</div>
</body>
</html>