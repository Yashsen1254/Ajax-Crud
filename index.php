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
    <form>
        <input type="text" id="name" name="name">
        <input type="password" id="password" name="password">
        <button type="button" name="button" onclick="sendData()">Submit</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Password</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['password']; ?></td>
                    <td><button value="submit" name="submit"><a href="./api/delete.php ?id=<?=  $user['id'] ?>"> Delete</a></button></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <button value="submit" name="submit"><a href="updateform.php">Update</a></button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function sendData() {
            var name = $("#name").val();
            var password = $("#password").val();

            $.ajax({
                url: "./api/insert.php",
                method: "POST",
                data: {
                    name: name,
                    password: password
                },
                success: function (response) {
                    console.log(response);
                }
            });
        }
        function updateData() {
            var name = $("#name").val();
            var password = $("#password").val();

            $.ajax({
                url: "updateform.php",
                method: "POST",
                data: {
                    name: name,
                    password: password
                },
                success: function(response) {
                    console.log(response);
                }
            })
        }
    </script>
</body>
</html>