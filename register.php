<?php
require_once 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM users WHERE username ='$username'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)){
    echo 'Account is already exist.';
}else{
    $query = "INSERT INTO users (username, password) values ('$username', '$password')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo 'Registration Successful!';
    }else{
        echo 'Registration Failed!';
    }
}