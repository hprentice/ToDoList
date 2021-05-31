<?php
include './controllers/conn.php';

$sql = "SELECT id, task FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	echo "<ul>";
  while($row = $result->fetch_assoc()) {

    echo "<li><p>" . $row["task"] . "</p><form action='./models/delete.php' method='post' ><input type='hidden' name='id' value='". $row["id"] ."'><input type='submit' value='Done!' class='btn btn-success'></form> <form action='./views/edit_task.php' method='post' ><input type='hidden' name='id' value='". $row["id"] ."'><input type='hidden' name='task' value='". $row["task"] ."'><input type='submit' value='Edit' class='btn btn-info'></form></li>";

  }
  	echo "</ul>";
}
?>