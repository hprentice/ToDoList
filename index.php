<!DOCTYPE html>
<html>
<head>
	<meta charset = 'utf-8'> 
	<title>Todo List</title> 
	<meta name='viewport' content='width=device-width, initial-scale=1.0'> 
		
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
	<link rel = 'stylesheet' href = './public/style.css'> 
	<style>
		@media only screen and (max-width: 600px) {
			li{
			  	display: grid;
			  	grid-template-columns: 50% 30% 25%;
			}
	</style>
</head>

<body>
	<h2>To Do List</h2>
</body>

<?php
include './models/show.php';

echo "<body>";

echo "<a href='./views/add_task.html' class='btn btn-primary add_btn'>Add task!</a>";

echo "</body>";

$conn->close();
?> 