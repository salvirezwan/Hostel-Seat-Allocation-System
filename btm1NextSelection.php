
<!DOCTYPE html>
<html lang="en">
<header class="top_class" id="top_id">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTM 1</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    This is BTM Year 1
    <table id = "view">
        <tr>
        <th>Student ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Dept</th>
        <th>Email</th>
        <th>Merit</th>
        <th>Status</th>
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
            
            $sql = "SELECT * FROM year1 where status = 0 or status = 2";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $totalCount = mysqli_num_rows($result);
        
            $sql = "SELECT * FROM room where status = 0";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $vacant = mysqli_num_rows($result);
        
            $sql = "SELECT * FROM year1 where dept = 'BTM' AND status = 0 or status = 2";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $btmCount = mysqli_num_rows($result);
        
            $sql = "SELECT * FROM year1 where dept = 'BTM' AND status = 0";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $btmAvail = mysqli_num_rows($result);
           
            if($totalCount == 0){
                $btmAmount = 0;
            }
            else{
                $btmAmount = round(($btmCount/$totalCount)*$vacant);
            }
        
            if($btmAvail >= $btmAmount){
                $sql = "SELECT * FROM btm1 where status = 0 ORDER BY merit ASC limit $btmAmount";
                $result = mysqli_query($conn, $sql);
            }
            
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>" . $row["studentID"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["dept"]. "</td><td>" . $row["email"]. "</td><td>" . $row["merit"]. "</td><td>" . $row["status"]. "</td></tr>";
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