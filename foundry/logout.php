<?php
session_start();     // open the current session
session_destroy();   // delete all session variables (log the user out)
header("Location: index.html");
exit();
?>
