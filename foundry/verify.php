<?php
include('db.php');  // connect to the database and start the session

// Read the credentials sent from the login form (login.html)
$username = $_POST['username'];
$password = $_POST['password'];

// Look for a user with this username AND password
$query = "SELECT iduser, username, admin FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if ($result == false) {              // the query has a syntax error
    header("Location: query_error.html");
    exit();
}

if (mysqli_num_rows($result) == 0) {  // no user found -> wrong username/password
    header("Location: error_login.html");
    exit();
}

// Correct credentials -> save data in session variables and show the directory
$row = mysqli_fetch_row($result);
$_SESSION['id_user']  = $row[0];
$_SESSION['username'] = $row[1];
$_SESSION['admin']    = $row[2];

header("Location: members.php");
exit();
?>
