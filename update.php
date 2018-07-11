<?php
require_once 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE BINARY username = '$username'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)){
    
    if(strlen($password) < 6){
        echo 'Password must not be less than 6 chars';
    }else{
        $query = "UPDATE users SET password = '$password' WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        
        if($result){
            echo 'Password Successfully Changed!';
        }else{
            echo 'Failed Chaging Password!';
        }
    }
}else{
    echo 'Account is not registered.';
}