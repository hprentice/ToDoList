<?php
require '../controllers/conn.php';

$id = $_POST["id"];

//echo $id;

$sql = "DELETE FROM tasks WHERE id=(?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();

$conn->close();

header("Location: ../index.php");
die();
?>