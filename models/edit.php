<?php
require '../controllers/conn.php';

$task = $_POST["task"];

$id = $_POST["id"];


$sql = "UPDATE tasks SET task ='".$task."' WHERE id = '".$id."'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

header("Location: ../index.php");
die();

?>