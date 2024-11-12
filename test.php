<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "test";
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql = "SELECT * FROM year1 where status = 0 or status = 2";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $totalCount = mysqli_num_rows($result);

    echo "$totalCount<br>";

    $sql = "SELECT * FROM room where status = 0";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $vacant = mysqli_num_rows($result);

    echo "$vacant<br>";

    $sql = "SELECT * FROM year1 where dept = 'MPE' AND status = 0 or status = 2";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $mpeCount = mysqli_num_rows($result);

    echo "$mpeCount<br>";

    $sql = "SELECT * FROM year1 where dept = 'MPE' AND status = 0";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $mpeAvail = mysqli_num_rows($result);

    echo "$mpeAvail<br>";

    $mpeAmount = round(($mpeCount/$totalCount)*$vacant);
    echo "$mpeAmount<br>"
    
?>