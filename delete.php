<?php
require_once 'database.php';

$id = $_POST['id'];

$query = "DELETE FROM users WHERE id = '$id'";
$result= mysqli_query($conn,$query);

if (mysqli_affected_rows($conn))
{
    echo 'Account deleted.';  
}else
{
    echo 'Fail Account Deleting';
}
 
