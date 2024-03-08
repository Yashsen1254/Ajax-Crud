<?php
    $connection = mysqli_connect('localhost', 'root', '', 'login');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $query = "UPDATE setdata SET name='$name', password='$password' WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Updated successfully.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    mysqli_close($connection);
?>
