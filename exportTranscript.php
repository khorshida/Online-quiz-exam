<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = trim($_POST["student_id"]);

    if ($student_id == "") {
        echo "Error: Student ID is required.";
    } else if (!is_numeric($student_id)) {
        echo "Error: Student ID must be a number.";
    } else if (strlen($student_id) < 5 || strlen($student_id) > 10) {
        echo "Error: Student ID must be between 5 and 10 digits.";
    } else {
        $_SESSION['student_id'] = $student_id;
        echo "Transcripts will be exported for Student ID: " . $student_id;
    }
} else {
    echo "Invalid request.";
}
?>
