<?php
require_once "../../controllers/UserController.php";
$controller = new UserController();
$users = $controller->getUsers();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h2>User List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>