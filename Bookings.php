<?php
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

// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM booking WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        // Redirect back to Booking.php after successful deletion
        header("Location: Booking.php");
        exit();
    } else {
        echo "<script>alert('Error deleting booking.'); window.location.href='Booking.php';</script>";
    }
    $stmt->close();
}

// Fetch data from the 'booking' table
$sql = "SELECT id, name, email, date, mobil_no, package FROM booking";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings | 📸</title>
    <link rel="icon" href="images/favicon/apple-touch-icon.png">
    <link rel="stylesheet" href="Style.css">
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body style="background-color:#23052d">
    <div>
        <?php include('adminHeader.php') ?>
    </div>
    <div class="container-fluid mt-5">
        <h2 class="text-center txt-yellow mb-4">Booking Details</h2>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Date</th>
                    <th scope="col">Mobil No</th>
                    <th scope="col">Package</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Loop through the result set and populate the table
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <th scope='row'>{$row['id']}</th>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['date']}</td>
                                <td>{$row['mobil_no']}</td>
                                <td>{$row['package']}</td>
                                <td>
                                    <a href='?delete_id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this booking?');\">
                                        Delete
                                    </a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>No bookings found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
