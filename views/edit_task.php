 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'> 

<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
<link rel = 'stylesheet' href = '../public/style.css'> 
</head>
<body>

<?php 

$id = $_POST["id"];
$task = $_POST["task"];


//echo $id;
//echo $task;

echo "<h2>Edit a Task</h2>";
echo "<form action='../models/edit.php' method='post' class='add_form'>";
echo "<input type='hidden' name='id' value='".$id."' required>";
echo "<input type='text' name='task' value='".$task."' required>";
echo "<input type='submit' value ='Create Task' class='btn btn-primary'>";
echo "</form>";
?>

</body>
</html> 