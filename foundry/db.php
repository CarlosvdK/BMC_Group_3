<?php
// db.php  -  Connection to the database (included by every PHP page)
// This is the ONLY file you need to edit when deploying to a new server (Plesk).

session_start();  // start the session so we can remember the logged-in founder

$conn = mysqli_connect(   // connect to the database
  'localhost',   // host (the same machine that runs PHP). Leave as localhost.
  'root',        // database username   <-- on Plesk, change to your DB user
  'root',        // database password   <-- on Plesk, change to your DB password
  'foundry'      // database name        (leave this as it is)
) or die("Connection error: could not connect to the database.");
?>
