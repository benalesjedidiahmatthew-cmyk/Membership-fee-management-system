<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_number = $_POST['student_number'];
    $password = $_POST['password'];

    echo "<h3>Form Submitted Successfully!</h3>";
    echo "Welcome Student #: " . $student_number;
    session_destroy();
    header("Location: dashboard.html");
}
?>
