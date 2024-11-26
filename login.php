<?php
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "malcome";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$formUsername = $_POST['email'];
$formPassword = $_POST['password'];

// Prepare and execute the SQL statement
$sql = "SELECT * FROM admin WHERE Username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $formUsername);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    // Check if the password matches
    if ($formPassword === $row['Password']) {
        // Password matches, login successful
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['Username'] = $formUsername;

        // Redirect to the Booking page
        header("Location: Bookings.php");
        exit();
    } else {
        // Incorrect password
        echo "<script>alert('Incorrect password.'); window.location.href='login.html';</script>";
    }
} else {
    // User not found
    echo "<script>alert('User not found.'); window.location.href='login.html';</script>";
}

$stmt->close();
$conn->close();
?>
