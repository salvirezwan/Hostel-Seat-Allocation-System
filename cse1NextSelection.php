<!DOCTYPE html>
<html lang="en">
<head class="top_class" id="top_id">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All</title>
</head>
<link rel="stylesheet" href="style.css">


<body>
    <form method="post" action="cse1NextSelection.php">
    <?php
        function connectToDatabase(){
            $host = "localhost";
            $user = "root";
            $pass = "";
            $dbname = "test";
            $conn = mysqli_connect($host, $user, $pass, $dbname);

            if($conn->connect_error){
                die("Error connecting to". $conn->connect_error);
            }

            return $conn;
        }

        function displayNextSelection($dept, $table, $conn){
            $sql = "SELECT * FROM year1 where status = 0 or status = 2";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $totalCount = mysqli_num_rows($result);
        
            $sql = "SELECT * FROM room where status = 0";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $vacant = mysqli_num_rows($result);
        
            $sql = "SELECT * FROM year1 where dept = '$dept' AND status = 0 or status = 2";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $Count = mysqli_num_rows($result);
        
            $sql = "SELECT * FROM year1 where dept = '$dept' AND status = 0";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $Avail = mysqli_num_rows($result);
            
            if($totalCount == 0){
                $Amount = 0;
            }
            else{
                $Amount = round(($Count/$totalCount)*$vacant);
            }
        
            if($Avail >= $Amount){
                $sql = "SELECT * FROM $table where status = 0 ORDER BY merit ASC limit $Amount";
                $result = mysqli_query($conn, $sql);
            }
            echo "<input type='hidden' name='dept[]' value='$dept'>";
            echo "<table id='view'>";
            echo "<tr>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Dept</th>
                    <th>Email</th>
                    <th>Merit</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>";

            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['studentID']}</td>
                            <td>{$row['firstname']}</td>
                            <td>{$row['lastname']}</td>
                            <td>{$row['dept']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['merit']}</td>
                            <td>{$row['status']}</td>
                            <td><input type='checkbox' name='selected_rows[$dept][]' value='{$row['studentID']}'></td>
                            </tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 results";
            }
            echo "</table>";
        }

        $conn = connectToDatabase();
        $depts = ['CSE', 'EEE', 'MPE', 'CEE', 'BTM'];

        foreach ($depts as $dept) {
            echo "<input type='hidden' name='dept' value='$dept'>";
            echo "<p>This is $dept Year 1</p>";
            echo "<table id='view'>";
            if($dept == 'CSE') $table = 'cse1';
            else if($dept == 'EEE') $table = 'eee1';
            else if($dept == 'MPE') $table = 'mpe1';
            else if($dept == 'CEE') $table = 'cee1';
            else if($dept == 'BTM') $table = 'btm1'; 
            // Fetch and display data for the respective department
            // ...
            displayNextSelection($dept, $table, $conn);
            // Add a hidden input field for selected rows in the respective department
            echo "<input type='hidden' name='{$dept}_selected_rows' value=''>";
            echo "</table>";
        }
     ?>
        <input type="submit" name="update_status_all" value="Update Status for All">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['update_status_all'])) {
            foreach ($depts as $dept) {
                $selectedRows = isset($_POST['selected_rows'][$dept]) ? $_POST['selected_rows'][$dept] : [];
                updateStatus($selectedRows, $dept);
                echo "Status updated successfully for $dept!<br>";
            }
    
            // Redirect to the same page to prevent form resubmission
            header("Location: cse1NextSelection.php");
            exit();
        }
    }


    function updateStatus($selectedRows, $dept) {
        $conn = connectToDatabase();

        // Update the status of selected rows to 1
        if (!empty($selectedRows)) {
            $escapedSelectedRows = array_map(function ($value) use ($conn) {
                return "'" . mysqli_real_escape_string($conn, $value) . "'";
            }, $selectedRows);

            $updateSelected = "UPDATE year1 SET status = 1 WHERE studentID IN (" . implode(',', $escapedSelectedRows) . ")";
            mysqli_query($conn, $updateSelected);
            echo "Selected rows for $dept updated to status 1: " . implode(', ', $selectedRows) . "<br>";
        }

        //Update the status of unselected rows to 2 for the currently displayed rows
    }
?>


</body>
</html>