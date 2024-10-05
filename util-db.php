<?php
function get_db_connection(){
    // Create connection
   //$conn = new mysqli('hw3-mis4013.mysql.database.azure.com', 'kalebtking', '!Wolverine0', 'hw3');
    $conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "/Users/kalebking/Desktop/MIS-4013/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "hw3-mis4013.mysql.database.azure.com", "kalebtking", "!Wolverine0", "hw3", 3306, MYSQLI_CLIENT_SSL);
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>



