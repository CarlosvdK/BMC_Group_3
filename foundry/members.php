<?php
include('db.php');  // connect to the database and start the session

// Only logged-in founders can see the directory
if (!isset($_SESSION['id_user'])) {
    header("Location: login.html");
    exit();
}

// Get all founders from the database (the "catalog list")
$query = "SELECT firstname, lastname, city, role, industry, looking_for, bio FROM users ORDER BY firstname";
$result = mysqli_query($conn, $query);
if ($result == false) {
    header("Location: query_error.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foundry - Founder Directory</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="nav">
    <a class="brand" href="index.html">Foundry</a>
    <a href="index.html">Home</a>
    <a href="how_it_works.html">How it works</a>
    <a href="events.html">Events</a>
    <a href="members.php">Founder Directory</a>
    <div class="right">
      <span style="color:#cdd6ea;">Hi, <?php echo $_SESSION['username']; ?></span>
      <a href="logout.php">Log out</a>
    </div>
  </div>

  <div class="page">
    <h1>Founder Directory</h1>
    <p>Browse founders who are looking for a co-founder.</p>

    <div class="cards">
      <?php
        // Loop through every founder returned by the query, one card per founder
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="card">
          <h3><?php echo $row['firstname'] . " " . $row['lastname']; ?></h3>
          <span class="tag"><?php echo $row['role']; ?></span>
          <span class="tag"><?php echo $row['industry']; ?></span>
          <p class="muted"><?php echo $row['city']; ?></p>
          <p><strong>Looking for:</strong> <?php echo $row['looking_for']; ?></p>
          <p><?php echo $row['bio']; ?></p>
        </div>
      <?php
        }  // end of while loop
      ?>
    </div>
  </div>
</body>
</html>
