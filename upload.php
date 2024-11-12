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
        $sql = "DELETE FROM temp1";
        $conn->query($sql);
        if(($data = fgetcsv($handle, 1000, ",")) !== false){
        }
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            $column1 = $data[0];
            $column2 = $data[1];
            $column3 = $data[2];
            $column4 = $data[3];
            $column5 = $data[4];
            $column6 = $data[5];
            $column7 = $data[6];
            $sql = "INSERT INTO temp1 (studentID, firstname, lastname, merit, email, dept, status) VALUES ('$column1', '$column2', '$column3', '$column4', '$column5', '$column6', '$column7')";
            if ($conn->query($sql) === TRUE) {
                echo "Record inserted successfully.<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        $sql = "DELETE FROM year1 WHERE studentID NOT IN (SELECT studentID FROM temp1)";
        mysqli_query($conn, $sql);
        $sql = "INSERT INTO year1 (SELECT * FROM temp1 WHERE studentID NOT IN (SELECT studentID FROM year1))";
        mysqli_query($conn, $sql);
        fclose($handle);
    }

    // Close the database connection.
    $conn->close();
}
?>
