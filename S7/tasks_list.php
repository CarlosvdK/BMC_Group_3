<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tasks List</title>
  <link rel = "stylesheet" type="text/css" href="style.css" />
</head>
<body>
  
<?php  
// include conn BBDD
?>

    <section class="list-tasks">
        <h4> Tasks List</h4>
        <table class="content-table">
            <thead>
              <tr>
                <!-- header of the tasks table -->
                <th>TaskID</th>
                <th>Title</th>
                <th>Description</th>
                <th>User</th>
                <th>Created at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              
              // PHP CODE
              
              
              
              
              
              
              
              ?> <!-- do a loop while a tasks exist in a recorset $result_tasks -->
                <tr>
                  <!-- Show tasks in a table. One row per task -->
                <td><?php                        ?></td>
                <td><?php                        ?></td>
                <td><?php                        ?></td>
                <td><?php                        ?></td>
                <td><?php                        ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $row['id']?>"><img border="0" src="images/edit.png" width="30" height="30"></a><!-- show edit button -->
                  <a href="delete_task.php?id=<?php echo $row['id']?>"><img border="0" src="images/delete.png" width="30" height="30"></a> <!-- show detete button -->  
              </td>
          </tr>
          <?php
             

            
          ?> <!-- end of loop while -->
            </tbody>
          </table>
          <!-- Show buttons at the end of the table -->
          <button class="single-button" value="Cancel" onclick="window.location.href='login.html'">Return</button>
          <button class="single-button" value="New_Task" onclick="window.location.href='new_task.html'">New Task</button>
    </section>
    </body>
</html>