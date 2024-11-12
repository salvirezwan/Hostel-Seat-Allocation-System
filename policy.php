<?php
    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM room WHERE status = false";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    echo "$count <br>";

// if (isset($_POST["submit"])) {
//     $csvFile = $_FILES["csvFile"]["tmp_name"];

//     // Establish a connection to the MySQL database.
//     $conn = new mysqli("localhost", "root", "", "test");

//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // Parse and insert data from the CSV file.
//     if (($handle = fopen($csvFile, "r")) !== false) {
//         if(($data = fgetcsv($handle, 1000, ",")) !== false){
//         }
//         while (($data = fgetcsv($handle, 1000, ",")) !== false) {
//             $column1 = $data[0];
//             $column2 = $data[1];
//             $column3 = $data[2];
//             $column4 = $data[3];
//             $column5 = $data[4];

            
//             $sql = "SELECT status FROM room WHERE number = '$column3' AND hall = '$column4' AND bed = '$column5' AND status = '1'";
//             $result = mysqli_query($conn, $sql);
//             $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//             $count = mysqli_num_rows($result);
//             if($count < 1){
//                 $sql = "UPDATE room SET id = '$column1', dept = '$column2', status = '1' WHERE number = '$column3' AND hall = '$column4' AND bed = '$column5'";
//                 if($conn->query($sql) === TRUE){
//                     echo "Room $column3$column4 updated successfully. <br>";
//                 }
//                 else echo "Room $column3$column4 updated failed. <br>";
//             }
//             else{
//                 echo "Room $column3$column4 already filled. <br>";
//             }
            
//         }
//     }

//     // Close the database connection.
//     $conn->close();
// }
?>