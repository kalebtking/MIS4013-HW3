<?php
function selectInstructors()
{
    try {
        $conn = get_db_connection();
        if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $conn->prepare("SELECT Instructor_ID, Instructor_Name, email FROM instructor");
        if (!$stmt) {
            die("Query preparation failed: " . $conn->error);
        }
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        if (isset($conn)) {
            $conn->close();
    }
        // $conn->close();
        throw $e;
    }
}
?>
