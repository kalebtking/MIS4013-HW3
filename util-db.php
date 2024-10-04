<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('d09ee87442dd', 'kalebtking', '!Wolverine0', 'hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>



