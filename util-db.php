<?php
function get_db_connection(){
    // Create connection
   $conn = new mysqli('hw3-mis4013.mysql.database.azure.com', 'kalebtking', '!Wolverine0', 'hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>



