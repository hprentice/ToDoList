<?php
require '../controllers/conn.php';

$task = $_POST["task"];

$id = date("Ymdis");


$sql = "INSERT INTO tasks (id, task) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $id, $task);
$stmt->execute();

$conn->close();

header("Location: ../index.php");
die();

?>