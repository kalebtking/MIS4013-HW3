<?php
function get_db_connection()
{
    // Create connection
    $servername = "hw3-mis4013.mysql.database.azure.com";
    $username = "kalebtking";
    $password = "!Wolverine0";

// Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // $conn = new mysqli('hw3-mis4013.mysql.database.azure.com', 'kalebtking', '!Wolverine0', 'hw3');
    // // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // if ($conn->connect_error) {
    //   return false;
    // }
    
    return $conn;
}
?>



