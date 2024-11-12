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
    $merit = $_POST['merit'];
    $dept = $_POST['dept'];
    $status = $_POST['status'];
    $id = $_POST['student_id'];

    $query = "INSERT INTO year1 (studentID, firstname, lastname, email, merit, dept, status) VALUES ('$id','$firstName', '$lastName', '$email', '$merit', '$dept', '$status')";
    $result = mysqli_query($conn, $query);

}

if(isset($_POST['enter'])){
    $email =  $_POST['email_id'];
    $password = $_POST['password'];

    $query = "SELECT * FROM dbase WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $query);
    $input = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if($count == 1){
        if (password_verify($password, $row['password'])){
            header("Location: profile.php");
        }
        else {
            header("Location: loginError.php");
        }
    }
    else{
        echo 'FAILED';
    }
}
?>
