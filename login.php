<?php
session_start();

// Get the username and password values from the POST data
$username = $_POST["username"];
$password = $_POST["password"];

// Check if the username and password are correct
$users = file("users.txt", FILE_IGNORE_NEW_LINES);
foreach ($users as $user) {
	$userData = explode(",", $user);
	if ($username === $userData[0] && $password === $userData[1]) {
		$_SESSION["username"] = $username;
		echo "success";
		exit;
	}
}

echo "failure";
?>