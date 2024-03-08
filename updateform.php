<?php
$connection = mysqli_connect("localhost", "root", "", "login");
$query = "SELECT * FROM setdata";
$result = mysqli_query($connection, $query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id']; ?>\</td>
                    <td><?= $user['name']; ?>\</td>
                    <td><?= $user['password']; ?>\</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form action="./api/update.php" method="post">
        <input type="text" id="id" name="id">
        <input type="text" id="name" name="name">
        <input type="password" id="password" name="password">
        <button type="button" name="button"><a href="api/update.php">Update</a></button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </script>
</body>

</html>