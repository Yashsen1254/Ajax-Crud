<?php

    $name = $_POST['name'];
    $password = $_POST['password'];
    echo $name;
    echo $password;
    $connection = mysqli_connect('localhost','root','','login');
    $query = "insert into setdata(name,password)value('$name','$password')";
    $result = mysqli_query($connection, $query);
    
    if($result > 0){
        echo"success";
    }else{
        echo "error";
    }  
?>