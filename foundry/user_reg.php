<?php
include('db.php');  // connect to the database and start the session

// Read the data sent from the registration form (new_user.html)
$firstname   = $_POST['firstname'];
$lastname    = $_POST['lastname'];
$email       = $_POST['email'];
$username    = $_POST['username'];
$password    = $_POST['password'];
$city        = $_POST['city'];
$role        = $_POST['role'];
$industry    = $_POST['industry'];
$looking_for = $_POST['looking_for'];
$bio         = $_POST['bio'];

// 1) Check whether the username already exists
$check = "SELECT iduser FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $check);

if ($result == false) {            // the query has a syntax error
    header("Location: query_error.html");
    exit();
}

if (mysqli_num_rows($result) > 0) {  // username is already taken
    header("Location: user_exist.html");
    exit();
}

// 2) Username is free -> insert the new founder
$insert = "INSERT INTO users (firstname, lastname, email, username, password, city, role, industry, looking_for, bio, admin)
           VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$city', '$role', '$industry', '$looking_for', '$bio', 0)";

$ok = mysqli_query($conn, $insert);
if ($ok == false) {
    header("Location: query_error.html");
    exit();
}

// 3) Log the new founder in (save data in session variables) and show the directory
$_SESSION['id_user']  = mysqli_insert_id($conn);
$_SESSION['username'] = $username;
$_SESSION['admin']    = 0;

header("Location: members.php");
exit();
?>
