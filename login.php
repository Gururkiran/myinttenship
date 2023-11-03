<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace with your actual authentication logic
    if ($username === "your_username" && $password === "your_password") {
        // Successful login, redirect to a dashboard or another page
        header("Location: dashboard.php");
        exit;
    } else {
        // Failed login, redirect back to the login page with an error message
        header("Location: login.php?error=1");
        exit;
    }
}
?>
