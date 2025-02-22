<?php
// User Controller
require_once "controllers/UserController.php";
$controller = new UserController();
$users = $controller->getUsers();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome to the User Management System</h1>
    <a href="views/users/index.php">View Users</a>
</body>
</html>