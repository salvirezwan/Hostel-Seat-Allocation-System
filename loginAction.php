<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "test";   
    $conn = new mysqli($host, $user, $pass, $dbname);

    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }
    else{    
        $email =  $_POST['email_id'];
        $password = $_POST['password'];


        $sql = "SELECT password FROM new where email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1){
            // Verify the user-provided password against the hashed password from the database
            if (password_verify($password, $row['password'])){
                header("Location: trying.php");
            }
            else {
                header("Location: loginError.php");
            }
        }
        else {
            header("Location: loginError.php");
        }

    }
?>