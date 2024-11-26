<?php 
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "malcome";

$conn = new mysqli($servername, $username,$password,$dbname);

if($conn->connect_error){
    die("connection faield: ".$conn->connect_error);
}
$name =$_POST['name'];
$email =$_POST['email'];
$date = $_POST['date'];
$mobil_no = $_POST['mobil_no'];
$package = $_POST['package'];

$sql = "INSERT INTO booking (name, email, date, mobil_no, package) VALUES  (?,?,?,?,?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("sssds",$name,$email,$date,$mobil_no,$package);

if($stmt->execute()){
    echo "<script>alert('Booking successful!'); window.location.href='Contact.php';</script>";
}
else{
    echo "<script>alert('Error: Unable to process your booking.'); window.location.href='Contact.php';</script>";
}

?>