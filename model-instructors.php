<?php
function selectInstructors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Instructor_ID, Instructor_Name, email FROM instructor");
        $stmt->execute();
        if (!$stmt) {
    die("Query preparation failed: " . $conn->error);
}
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
