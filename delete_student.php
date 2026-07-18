<?php

include "auth.php";

checkRole(['admin']);

include "connection.php";


// Check if ID is provided
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    // Delete the student record
    $sql = "DELETE FROM students WHERE id = $id";

    if ($conn->query($sql) === TRUE) {

        echo "
        <script>
            alert('Student deleted successfully!');
            window.location='view_students.php';
        </script>
        ";

    } else {

        echo "
        <script>
            alert('Error deleting student.');
            window.location='view_students.php';
        </script>
        ";

    }

} else {

    header("Location: view_students.php");
    exit();

}

$conn->close();

?>