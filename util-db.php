<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('40.122.114.229', 'kalebtking', '!Wolverine0', 'hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>



