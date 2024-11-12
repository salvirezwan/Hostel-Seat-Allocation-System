<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(isset($_POST['submit'])){
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email =  $_POST['email_id'];
    $merit = $_POST
    $password = $_POST['password'];

    $query = "SELECT * FROM dbase WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $input = mysqli_fetch_assoc($result);
    if($input){
        $query = "INSERT INTO dbase (firstname, lastname, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
    }
}
?>