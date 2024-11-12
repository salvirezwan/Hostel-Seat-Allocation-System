<?php
// Database connection settings
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'test';
$table_name = 'year1';

// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a file handle for output
$filename = 'exported_data.csv';
$file = fopen($filename, 'w');

// Fetch data from the database and write to the CSV file
$query = "SELECT * FROM $table_name";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    fputcsv($file, $row);
}

fclose($file);

// Close the database connection
$conn->close();

// Provide a download link to the user
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');
readfile($filename);
