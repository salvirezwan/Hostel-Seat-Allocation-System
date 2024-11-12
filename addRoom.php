<?php
if (isset($_POST["submit"])) {
    $csvFile = $_FILES["csvFile"]["tmp_name"];

    // Establish a connection to the MySQL database.
    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Parse and insert data from the CSV file.
    if (($handle = fopen($csvFile, "r")) !== false) {
        if(($data = fgetcsv($handle, 1000, ",")) !== false){
        }
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            $column1 = $data[0];
            $column2 = $data[1];
            $sql = "SELECT * FROM room WHERE number = '$column1' AND hall = '$column2'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count < 1){
                $sql = "INSERT INTO room(number, hall, bed) values('$column1', '$column2', 'A')";
                mysqli_query($conn, $sql);
                $sql = "INSERT INTO room(number, hall, bed) values('$column1', '$column2', 'B')";
                mysqli_query($conn, $sql);
                $sql = "INSERT INTO room(number, hall, bed) values('$column1', '$column2', 'C')";
                mysqli_query($conn, $sql);
                $sql = "INSERT INTO room(number, hall, bed) values('$column1', '$column2', 'D')";
                mysqli_query($conn, $sql);
                echo "Room $column1$column2 inserted successfully. <br>";
            }
            else{
                echo "Room $column1$column2 already there. <br>";
            }
            
        }
    }

    // Close the database connection.
    $conn->close();
}
?>
