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

// Fetch data from the 'customers' table
$sql = "SELECT id, name,email, subject, message FROM contact_messages";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body style="background-color:#23052d">
    <div class="">
        <?php include('adminHeader.php') ?>
    </div>
    <div class="container-fluid mt-5">
        <h2 class="text-center fontsec txt-yellow mb-4">Contact Messages</h2>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
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
                                <td>{$row['subject']}</td>
                                <td>{$row['message']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center'>No messages found</td></tr>";
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
