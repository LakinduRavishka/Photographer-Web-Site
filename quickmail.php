<?php
// Database connection details
$servername = "localhost";
$username = "root";  // Your MySQL username
$password = "";  // Your MySQL password
$dbname = "malcome";  // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('Message sent successfully!'); window.location.href='Home.php';</script>"; // Redirect to homepage (index.html)
    } else {
        echo "<script>alert('Error: Unable to send message.'); window.location.href='contact_form.html';</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
