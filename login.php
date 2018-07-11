<?php
require_once 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE BINARY username = '$username' AND BINARY password = '$password'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        $response['data'] = $row; 
    }

    echo json_encode($response);
}else{
    echo 'Login Failed!';
}