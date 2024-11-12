<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    function connectToDatabase() {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "test";
        $conn = mysqli_connect($host, $user, $pass, $dbname);

        if ($conn->connect_error) {
            die("Error connecting to" . $conn->connect_error);
        }

        return $conn;
    }

    function updateStatus($selectedRows, $dept) {
        // Your existing code here

        // Update unselected rows to status 2 for the current display
        $conn = connectToDatabase();

        if (!empty($selectedRows)) {
            foreach ($selectedRows as $studentID) {
                $updateSql = "UPDATE year1 SET status = 1 WHERE studentID = '$studentID'";
                mysqli_query($conn, $updateSql);
            }
        }
        $updateUnselectedSql = "UPDATE year1 SET status = 2 WHERE dept = '$dept'";
        mysqli_query($conn, $updateUnselectedSql);

        mysqli_close($conn);
    }

    if (isset($_POST['update_status'])) {
        $selectedRows = isset($_POST['selected_rows']) ? $_POST['selected_rows'] : [];
        if (isset($_POST['dept'])) {
            $dept = $_POST['dept'];
            echo "$dept";
        }

        // Call the updateStatus function with the $dept variable
        updateStatus($selectedRows, $dept);
        echo "Status updated successfully!";
        echo "<br> $dept";
    }
?>
