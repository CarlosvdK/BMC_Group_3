<?php 
include('db.php');  // Call to database connection file

$_SESSION['username'] = $_POST['username'];// Save username & password in a session variable
$_SESSION['pass']  = $_POST['pass'];
$username = $_SESSION['username'];  
$pass = $_SESSION['pass'];


$query = "SELECT iduser, username, password, admin FROM users WHERE username = '$username' && password = '$pass'";
$result = mysqli_query($conn, $query); // $result is a recordset object that contains the result of the SQL query.

if($result == false) // if $result is false means that the query is incorrect (syntax error)
{
    header("Location: query_error.html");  
}
if(mysqli_num_rows($result)==0) // if the query returns 0 registers so the customer doesn't exist
{
     header("Location: error_login.html");  // username and/or password incorrect
}
else // the query has returned one or more records 
{
    $row = mysqli_fetch_row($result);
    $_SESSION['id_user'] = $row[0];
    $_SESSION['admin'] = $row[3]; // capture in a session variables  'iduser' and 'admin' field (0 or 1)
        
    // everything is correct. the list of tasks is displayed.
    header("Location: tasks_list.php");
}

?>