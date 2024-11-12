<!DOCTYPE html>
<html lang="en">
<header class="top_class" id="top_id">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE 1</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    This is Year 1
    <table id = "view">
        <tr>
        <th>Number</th>
        <th>Hall</th>
        <th>Bed</th>
        <th>Seat</th>
        <th>ID</th>
        <th>Dept</th>

        </tr>
        <?php
            $host = "localhost";
            $user = "root";
            $pass = "";
            $dbname = "test";
            $conn = mysqli_connect($host, $user, $pass, $dbname);
            
            
            if($conn->connect_error){
                die("Error connecting to". $conn->connect_error);
            }
            $sql = "SELECT * FROM room";
            $result = mysqli_query($conn, $sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>" . $row["number"]. "</td><td>" . $row["hall"]. "</td><td>" . $row["bed"]. "</td><td>" . $row["status"]. "</td><td>" . $row["id"]. "</td><td>" . $row["dept"]. "</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 results";
            }
        ?>
    </table>
</body>
</html>