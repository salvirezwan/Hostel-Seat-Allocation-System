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
        $sql = "SELECT * FROM year1 where status = 0 or status = 2";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $totalCount = mysqli_num_rows($result);

        $sql = "SELECT * FROM room where status = 0";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $vacant = mysqli_num_rows($result);

        $sql = "SELECT * FROM year1 where dept = 'CSE' AND status = 0 or status = 2";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $cseCount = mysqli_num_rows($result);

        $sql = "SELECT * FROM year1 where dept = 'EEE' AND status = 0 or status = 2";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $eeeCount = mysqli_num_rows($result);

        $sql = "SELECT * FROM year1 where dept = 'MPE' AND status = 0 or status = 2";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $mpeCount = mysqli_num_rows($result);

        $sql = "SELECT * FROM year1 where dept = 'CEE' AND status = 0 or status = 2";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $ceeCount = mysqli_num_rows($result);

        $sql = "SELECT * FROM year1 where dept = 'BTM' AND status = 0 or status = 2";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $btmCount = mysqli_num_rows($result);

        $cseAmount = round(($cseCount/$totalCount)*$vacant);
        $eeeAmount = round(($eeeCount/$totalCount)*$vacant);
        $mpeAmount = round(($mpeCount/$totalCount)*$vacant);
        $ceeAmount = round(($ceeCount/$totalCount)*$vacant);
        $btmAmount = round(($btmCount/$totalCount)*$vacant);

        $sql = "SELECT * FROM year1 where dept = 'CSE' AND status = 0";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $cseAvail = mysqli_num_rows($result);

        $sql = "SELECT * FROM year1 where dept = 'EEE' AND status = 0";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $eeeAvail = mysqli_num_rows($result);

        $sql = "SELECT * FROM year1 where dept = 'MPE' AND status = 0";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $mpeAvail = mysqli_num_rows($result);

        $sql = "SELECT * FROM year1 where dept = 'CEE' AND status = 0";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $ceeAvail = mysqli_num_rows($result);

        $sql = "SELECT * FROM year1 where dept = 'BTM' AND status = 0";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $btmAvail = mysqli_num_rows($result);


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